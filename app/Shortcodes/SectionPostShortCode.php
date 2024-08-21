<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class SectionPostShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'big-item-title' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'big-item-desc' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'big-item-image' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'big-item-link' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-1-title' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-1-image' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-1-desc' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-2-title' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-2-image' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-2-desc' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-3-title' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-3-image' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-3-desc' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-4-title' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-4-image' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-4-desc' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
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
        return $this->view('frontend.shortcodes.section_post', compact('atts',  'content'));
    }
}
