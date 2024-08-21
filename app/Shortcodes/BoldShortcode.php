<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class BoldShortcode extends Shortcode
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
//        dd($atts,$shared,$content);
        return $this->view('frontend.bold', compact('atts', 'shared', 'content'));
    }
}
