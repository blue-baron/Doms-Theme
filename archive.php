<?php get_header('small'); ?>

<div id="archive" class="mainContent row">
	 <div class="small-12 medium-8 large-9 columns">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1>Archive for &#8216;<?php single_cat_title(); ?>&#8217;</h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>
			
			<?php } ?>


			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						<?php get_template_part('_/inc/meta'); ?>

						<div class="entry">
							<?php the_content(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php get_template_part('_/inc/nav'); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
    </div><!-- end .columns -->

<?php get_sidebar(); ?>
</div><!-- end .row -->

<?php get_footer(); ?>
