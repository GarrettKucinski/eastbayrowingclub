<?php

function show_coach_list( $atts, $content = null ) {
    ob_start();

   $attributes = shortcode_atts(
        array(
                'type' => 'coaches',
                'coach_ids' => '',
            ), $atts
        );

        global $post;

        $no_whitespaces = preg_replace( '/\s*,\s*/', ',', filter_var( $attributes['coach_ids'], FILTER_SANITIZE_STRING ) );
        $coach_ids = explode( ',', $no_whitespaces );

        $options = array(
            'post_type' => $attributes['type'],
            'post__in' => $coach_ids,
        );

        $query = new WP_Query( $options );

        $output = '';
        
       if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
       $output .= '<div class="coach">';
            $output .= '<div class="coach-image-mask" style="background-image: url(\'' . get_the_post_thumbnail_url() . '\');"></div>';
                $output .= '<span class="coaches-bio">';
                    $output .= '<h5 class="coach-name">' . get_the_title() . '</h5>';
                    $output .= '<span class="coach-bio">' . get_the_content() . '</span>';
                $output .= '</span>';
        $output .= '</div>';
        
        endwhile;
        endif;
        
        wp_reset_postdata();

        return html_entity_decode( $output );
    }
    add_shortcode( 'coaches', 'show_coach_list' );
