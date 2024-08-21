<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class TrendingItemShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'title'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'content'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'link'  => [
            'default'     => '#',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'image'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
    ];

    /**
     * Render shortcode
     *
     * @param string $content
     * @return string
     */
    public function render($content)
    {
        $atts = $this->atts();
        $shared = $this->shared();

        return $this->view('frontend.shortcodes.trending_item', compact('atts', 'shared', 'content'));
    }
}
