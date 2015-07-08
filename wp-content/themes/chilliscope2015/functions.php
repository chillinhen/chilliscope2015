<?php
add_action('after_setup_theme', 'chilli_theme_setup');

function chilli_theme_setup() {
    // Add Translation Option
    load_theme_textdomain( 'chilli_2015', get_stylesheet_directory() . '/languages' );
    $locale = get_locale();
    
    //init Styles
    if (!function_exists("chi_styles")) {
        if (!is_admin()) {
            function chi_styles() {
                wp_register_style('googlefonts', 'http://fonts.googleapis.com/css?family=Hind&subset=latin', 'style', '1.0', 'screen');
		wp_enqueue_style('googlefonts');
                wp_register_style('googlefonts', 'http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', 'style', '4.0.3', 'all');
                wp_enqueue_style('googlefonts');
                wp_register_style('wip', get_stylesheet_directory_uri() . '/css/wip.css', 'style', '1.0', 'screen');
                wp_enqueue_style('wip');
            }
        }
    }
    add_action('wp_enqueue_scripts', 'chi_styles');
    
    //init scripts
    if (!function_exists("chi_scripts")) {
        if (!is_admin()) {

            function chi_scripts() {
                //masonry
		wp_register_script('masonry', 'cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js', array('jquery'), '1.0');
		wp_enqueue_script('masonry');
                //masonry
		wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0');
		wp_enqueue_script('custom');
            }

        }
    }
    add_action('wp_enqueue_scripts', 'chi_scripts');
    
    // Customs Functions
    function chilli_entry_meta(){
        	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'twentyfifteen' ) );
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentyfifteen' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			_x( 'Posted on', 'Used before publish date.', 'twentyfifteen' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	if ( 'post' == get_post_type() ) {
		if ( is_singular() || is_multi_author() ) {
			printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
				_x( 'Author', 'Used before post author name.', 'twentyfifteen' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
		if ( $categories_list && twentyfifteen_categorized_blog() ) {
			printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Categories', 'Used before category names.', 'twentyfifteen' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Tags', 'Used before tag names.', 'twentyfifteen' ),
				$tags_list
			);
		}
	}

	if ( is_attachment() && wp_attachment_is_image() ) {
		// Retrieve attachment metadata.
		$metadata = wp_get_attachment_metadata();

		printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
			_x( 'Full size', 'Used before full size attachment link.', 'twentyfifteen' ),
			esc_url( wp_get_attachment_url() ),
			$metadata['width'],
			$metadata['height']
		);
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'twentyfifteen' ), __( '1 Comment', 'twentyfifteen' ), __( '% Comments', 'twentyfifteen' ) );
		echo '</span>';
	}
    }

}

?>