<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

<main class="main main-archive">
	<div class="container">
		<div class="wrap-bg">
			<div class="row">
				<section class="content col-md-9 col-sm-8 col-xs-12" role="main">

					<?php if ( function_exists('yoast_breadcrumb') )
					{yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>

					<h1 class="archive-title"><?php the_archive_title() ?></h1>

					<div class="posts-with-thumbnail posts-standard">

						<?php
						if (have_posts()):
							while (have_posts()):
								the_post();
								get_template_part('content', get_post_format());
							endwhile;
							foxtail_pagination();
						else:
							get_template_part('content', 'none');
						endif;
						?>

					</div>
				</section>
				<aside class="sidebar col-md-3 col-sm-4 col-xs-12" role="complementary">

					<?php get_sidebar() ?>

				</aside>
			</div>
		</div>
	</div>
</main><!--/ main -->

<?php get_footer(); ?>
