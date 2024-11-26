<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the request is for the sitemap
        if ($request->is('sitemap.xml')) {
            // Define the URLs you want to include in the sitemap
            $urls = [
                ['loc' => url('/'), 'lastmod' => now()->toAtomString(), 'priority' => '1.0'],
                ['loc' => url('/pages/about'), 'lastmod' => now()->toAtomString(), 'priority' => '0.8'],
                ['loc' => url('/contact'), 'lastmod' => now()->toAtomString(), 'priority' => '0.8'],
                // Add more URLs as needed
            ];

            // Create the XML structure for the sitemap
            $sitemapXml = '<?xml version="1.0" encoding="UTF-8"?>';
            $sitemapXml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap-image/1.1">';

            foreach ($urls as $url) {
                $sitemapXml .= '<url>';
                $sitemapXml .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
                $sitemapXml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
                $sitemapXml .= '<priority>' . $url['priority'] . '</priority>';
                $sitemapXml .= '</url>';
            }

            $sitemapXml .= '</urlset>';

            return Response::make($sitemapXml, 200, [
                'Content-Type' => 'application/xml',
            ]);
        }

        return $next($request);
    }
}