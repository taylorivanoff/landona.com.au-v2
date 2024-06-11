<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Crawler\Url;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // The Crawler
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                // Exclude URLs that contain 'admin'
                if (str_contains($url->url, 'admin')) {
                    return;
                }

                // Set a custom priority for certain URLs
//                if ($url->url === config('app.url') . '/special-page') {
//                    $url->setPriority(1.0);
//                }

                // Add the last modified date
                $url->setLastModificationDate(now());

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }}
