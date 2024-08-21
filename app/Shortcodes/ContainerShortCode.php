<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class ContainerShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'class'  => [
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

        return $this->view('frontend.shortcodes.container', compact('atts', 'shared', 'content'));
    }
}
