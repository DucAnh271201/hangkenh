<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class SectionBoxShortCode extends Shortcode
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
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'title'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => 'some-sample-value',
        ],
        'sub-title'  => [
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

        return $this->view('frontend.shortcodes.section_box', compact('atts', 'shared', 'content'));
    }
}
