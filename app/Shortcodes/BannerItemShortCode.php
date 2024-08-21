<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class BannerItemShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'class' => [
            'default'     => '',
            'description' => 'Class name',
            'sample'      => 'some-class',
        ],
        'title' => [
            'default'     => '',
            'description' => 'Class name',
            'sample'      => 'some-class',
        ],
        'image' => [
            'default'     => '',
            'description' => 'Class name',
            'sample'      => 'some-class',
        ],
        'link' => [
            'default'     => '',
            'description' => 'Class name',
            'sample'      => 'some-class',
        ],
    ];

    protected $casts = [
        'class' => 'string',
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
        return $this->view('frontend.shortcodes.banner_item', compact('atts', 'shared', 'content'));
    }
}
