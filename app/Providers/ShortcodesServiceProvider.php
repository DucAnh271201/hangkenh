<?php

namespace App\Providers;

use App\Shortcodes\BannerItemShortCode;
use App\Shortcodes\BannerShortCode;
use App\Shortcodes\BoldShortcode;
use App\Shortcodes\ColShortCode;
use App\Shortcodes\ContainerShortCode;
use App\Shortcodes\FeaturedPostShortCode;
use App\Shortcodes\ProductItemShortCode;
use App\Shortcodes\ProductListShortCode;
use App\Shortcodes\RowShortCode;
use App\Shortcodes\Section5ShortCode;
use App\Shortcodes\SectionBoxShortCode;
use App\Shortcodes\SectionLibraryShortCode;
use App\Shortcodes\SectionPostShortCode;
use App\Shortcodes\SectionProjectShortCode;
use App\Shortcodes\SectionShortCode;
use App\Shortcodes\TrendingItemShortCode;
use App\Shortcodes\TrendingShortCode;
use Illuminate\Support\ServiceProvider;
use Vedmant\LaravelShortcodes\Facades\Shortcodes;

class ShortcodesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Shortcodes::add('b', BoldShortcode::class);
        Shortcodes::add('banner', BannerShortCode::class);
        Shortcodes::add('banner-item', BannerItemShortCode::class);
        Shortcodes::add('row', RowShortCode::class);
        Shortcodes::add('col', ColShortCode::class);
        Shortcodes::add('section', SectionShortCode::class);
        Shortcodes::add('container', ContainerShortCode::class);
        Shortcodes::add('featured-post', FeaturedPostShortCode::class);
        Shortcodes::add('trending', TrendingShortCode::class);
        Shortcodes::add('trending-item', TrendingItemShortCode::class);
        Shortcodes::add('section-box', SectionBoxShortCode::class);
        Shortcodes::add('product-list', ProductListShortCode::class);
        Shortcodes::add('product-item', ProductItemShortCode::class);
        Shortcodes::add('section-5', Section5ShortCode::class);
        Shortcodes::add('section-project', SectionProjectShortCode::class);
        Shortcodes::add('section-library', SectionLibraryShortCode::class);
        Shortcodes::add('section-post', SectionPostShortCode::class);
    }
}
