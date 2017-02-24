<?php

/**
 * Visual Composer additional custom shortcode
 */

add_shortcode( 'foxtail_blog', 'foxtail_blog' );
function foxtail_blog( $atts )
{
	extract( shortcode_atts( array(
		'category' => 0,
		'posts_per_page' => 4
	), $atts ) );

	if ( $category == 0 ) return;

	query_posts( array(
		'post_type' => 'post',
		'category' => $category,
		'posts_per_page' => $posts_per_page
	) );

	ob_start();

	echo '<div class="row foxtail-blog">';

	$i = 0;
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			echo '<div class="col-md-3 col-xs-12"><div class="wrap">';
			if ( $i % 2 == 0): ?>

				<a href="<?php the_permalink() ?>" class="post-thumbnail"><?php the_post_thumbnail() ?></a>
				<div class="detail">
					<a href="<?php the_permalink() ?>"><h3 class="entry-title"><?php the_title() ?></h3></a>
					<p class="excerpt"><?php the_excerpt() ?></p>
					<p class="meta">
						<?php _e( 'Post by', 'foxtail' ) ?>: <?php the_author_link() ?><br>
						<?php _e( 'In', 'foxtail' ) ?>: <?php the_category( ', ' ) ?>
					</p>
				</div>

			<?php else: ?>

				<div class="detail">
					<a href="<?php the_permalink() ?>"><h3 class="entry-title"><?php the_title() ?></h3></a>
					<p class="excerpt"><?php the_excerpt() ?></p>
					<p class="meta">
						<?php _e( 'Post by', 'foxtail' ) ?>: <?php the_author_link() ?><br>
						<?php _e( 'In', 'foxtail' ) ?>: <?php the_category( ', ' ) ?>
					</p>
				</div>
				<a href="<?php the_permalink() ?>" class="post-thumbnail"><?php the_post_thumbnail() ?></a>

			<?php endif;

			$i++;
			echo '</div></div>';
		}
	}

	echo '</div>';

	wp_reset_query();

	$str = ob_get_clean();
	return $str;
}

add_action( 'vc_before_init', 'foxtail_blog_vc_map' );
function foxtail_blog_vc_map()
{
	$categories = get_categories();
	$categories_array = array();
	foreach ( $categories as $item ) {
		$categories_array[$item->name] = $item->term_id;
	}

	vc_map( array(
		'name' => __( 'Foxtail Blog', 'foxtail' ),
		'base' => 'foxtail_blog',
		'class' => '',
		'category' => __( 'Content', 'foxtail'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => __( 'Posts per page', 'foxtail' ),
				'param_name' => 'posts_per_page',
				'value' => '4',
				'description' => __( 'Posts per page', 'foxtail' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => __( 'Category', 'foxtail' ),
				'param_name' => 'category',
				'value' => $categories_array,
				'description' => __( 'Select category', 'foxtail' )
			),
		)
	) );
}

/**
 * ************************************************************************
 * Shortcode to show course category
 */
add_shortcode( 'foxtail_course_category', 'foxtail_course_category' );
function foxtail_course_category( $atts )
{
	extract( shortcode_atts( array(
		'course_category_id' => 0
	), $atts ) );

	if ( $course_category_id == 0 ) return;

	$course_category = get_term( $course_category_id, 'course_category' );

	ob_start(); ?>

	<a href="<?php echo get_term_link( $course_category, 'course_category' ) ?>" class="item" style="background: #5AC582">
		<span class="icon"><img src="<?php the_field( 'thumbnail', $course_category ) ?>" alt="<?php echo $course_category->name ?>" title="<?php echo $course_category->name ?>" /></span>
		<p><?php echo $course_category->name ?></p>
		<div class="info-hover" style="border-bottom: 5px solid #5AC582">
			<h4><?php echo $course_category->name ?></h4>
			<div class="info-content"><?php echo $course_category->description ?></div>
			<span class="see-more">Xem chi tiết</span>
		</div>
	</a>

	<?php $str = ob_get_clean();
	return $str;
}

add_action( 'vc_before_init', 'foxtail_course_categories_vc_map' );
function foxtail_course_categories_vc_map()
{
	$categories = get_terms( 'course_category', array( 'hide_empty' => false ) );
	$cat_array = array();
	foreach ( $categories as $item ) {
		$cat_array[$item->name] = $item->term_id;
	}

	vc_map( array(
		'name' => __( 'Foxtail Course Category', 'foxtail' ),
		'base' => 'foxtail_course_category',
		'class' => '',
		'category' => __( 'Content', 'foxtail'),
		'params' => array(
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => __( 'Course Category', 'foxtail' ),
				'param_name' => 'course_category_id',
				'value' => $cat_array,
				'description' => __( 'Course Category', 'foxtail' )
			)
		)
	) );
}