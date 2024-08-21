<?php

namespace App\Shortcodes;

use Vedmant\LaravelShortcodes\Shortcode;

class SectionProjectShortCode extends Shortcode
{
    /**
     * @var string Shortcode description
     */
    public $description = 'Shortcode description';

    /**
     * @var array Shortcode attributes with default values
     */
    public $attributes = [
        'ids'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => '15,16,17',
        ],
        'cat-id'  => [
            'default'     => '',
            'description' => 'Example attribute',
            'sample'      => '12',
        ],
        'sort'  => [
            'default'     => 'id',
            'description' => 'Example attribute',
            'sample'      => 'id',
        ],
        'sort-direction'  => [
            'default'     => 'DESC',
            'description' => 'Example attribute',
            'sample'      => 'DESC',
        ],
        'limit'  => [
            'default'     => '3',
            'description' => 'Example attribute',
            'sample'      => '3',
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
        $posts = get_posts(
            ids: $atts['ids'],
            catId: $atts['cat-id'],
            sort: $atts['sort'],
            sortDirection: $atts['sort-direction'],
            perPage: $atts['limit']
        );
        return $this->view('frontend.shortcodes.section_project', compact('posts'));
    }
}
