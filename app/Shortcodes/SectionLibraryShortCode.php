<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class SectionLibraryShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'big-item-id' => [
            'default' => '',
            'description' => 'Example attribute',
            'sample' => 'some-sample-value',
        ],
        'small-item-id' => [
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

        $bigPost = get_post_id($atts['big-item-id']);
        $smallPosts = get_posts(ids: $atts['small-item-id'], perPage: 2);
        return $this->view('frontend.shortcodes.section_library', compact('bigPost', 'smallPosts'));
    }
}
