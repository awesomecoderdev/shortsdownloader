<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

class FontendOperationController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Request
     */
    function changeTheme(Request $request)
    {
        if (Cache::has('theme')) {
            Cache::forget('theme');
            return Response::json(["theme" => Cache::get("theme", "light")]);
        } else {
            Cache::forever('theme', 'dark');
            return Response::json(["theme" => Cache::get("theme")]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Request
     */
    function sitemap(Request $request)
    {
        $pages = DB::table('shorts')->select(["vid", "updated_at"])->get();
        return response()->view('sitemap', ['pages' => $pages])->header('Content-Type', 'text/xml');
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Request
     */
    function forbidden(Request $request)
    {
        abort(403);
    }
}
