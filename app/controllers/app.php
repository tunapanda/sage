<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_tax('swagtrack')) {
            $tax = get_queried_object();
            return __($tax->name);
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function breadcrumbs() {
        if (is_tax('swagtrack')) {
            $term = get_queried_object();
            $tax = get_taxonomy($term->taxonomy);

            $ancestors = get_ancestors( $term->term_id, "swagtrack", "taxonomy" );

            $breadcrumbs = sprintf("<a class=\"bread-root\" href=\"%s\">%s</a>",
                '/swagtracks/',
                $tax->labels->singular_name
            );

            foreach ($ancestors as $ancestor) {
                $ancestor = get_term( $ancestor );
                $breadcrumbs .= sprintf(" > <a class=\"bread-track\" href=\"%s\">%s</a>",
                    get_term_link($ancestor->term_id),
                    $ancestor->name
                );
            }
            
            $breadcrumbs .= sprintf("> <a class=\"bread-track\" href=\"%s\">%s</a>",
            get_term_link($term->term_id),
                $term->name
            );

            return $breadcrumbs;
        }
        if (is_singular( 'swagpath' )) {
            global $post;

            $terms = get_the_terms($post, 'swagtrack');

            $tax = get_taxonomy($terms[0]->taxonomy);

            $ancestors = get_ancestors($terms[0]->term_id, "swagtrack", "taxonomy");

            $breadcrumbs = sprintf("<a class=\"bread-root\" href=\"%s\">%s</a>",
                '/swagtracks/',
                $tax->labels->singular_name
            );

            foreach ($ancestors as $ancestor) {
                $ancestor = get_term($ancestor);
                $breadcrumbs .= sprintf(" > <a class=\"bread-track\" href=\"%s\">%s</a>",
                    get_term_link($ancestor->term_id),
                    $ancestor->name
                );
            }

            $breadcrumbs .= sprintf("> <a class=\"bread-track\" href=\"%s\">%s</a> > <a class=\"bread-path\">%s</a>",
                get_term_link($terms[0]->term_id),
                $terms[0]->name,
                $post->post_title
            );

            return $breadcrumbs;
        }
    }
}
