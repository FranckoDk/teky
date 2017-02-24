<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

<main class="main main-single">
	<div class="container">
		<div class="wrap-bg">
			<div class="row">
				<section class="content col-md-9 col-sm-8 col-xs-12" role="main">
					<?php if ( function_exists('yoast_breadcrumb') )
					{yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>

					<?php
					if (have_posts()):
						while (have_posts()):
							the_post();
							get_template_part('content', 'single');
						endwhile;
						wp_pagenavi();
					else:
						get_template_part('content', 'none');
					endif;
					?>

				</section>
				<aside class="sidebar col-md-3 col-sm-4 col-xs-12" role="complementary">

					<?php get_sidebar() ?>

				</aside>
			</div>
		</div>
	</div>
</main><!--/ main -->

<?php get_footer(); ?>