<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{{ \URL('/') }}</loc>
        <lastmod>{{ date('c', strtotime('now')) }}</lastmod>
        <priority>1.00</priority>
    </url>
    @foreach ($pages as $page)
        <url>
            <loc>{{ route('shorts.show', base64_encode("{$page->vid}ibrahim")) }}</loc>
            <lastmod>
                {{ isset($page->updated_at) ? date('c', strtotime($page->updated_at)) : date('c', strtotime('now')) }}
            </lastmod>
            <priority>0.80</priority>
        </url>
    @endforeach
</urlset>
