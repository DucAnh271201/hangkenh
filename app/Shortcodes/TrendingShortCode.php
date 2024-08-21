<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class TrendingShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'sub-title'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'title'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'block-image'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'block-title'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'block-desc'  => [
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

        return $this->view('frontend.shortcodes.trending', compact('atts', 'shared', 'content'));
    }
}
