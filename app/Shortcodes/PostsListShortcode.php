<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class PostsListShortcode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'example'  => [
            'default'     => 'default',
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

        return $this->view('shortcodes.some-shortcode', compact('atts', 'shared', 'content'));
    }
}
