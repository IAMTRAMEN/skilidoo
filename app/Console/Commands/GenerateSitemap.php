<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        // Define the URLs you want to include in the sitemap
        $urls = [
            ['loc' => url('/'), 'lastmod' => now()->toAtomString(), 'priority' => '1.0'],
            ['loc' => url('/about'), 'lastmod' => now()->toAtomString(), 'priority' => '0.8'],
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

        // Save the sitemap to the public directory
        File::put(public_path('sitemap.xml'), $sitemapXml);

        $this->info('Sitemap generated successfully!');
    }
}