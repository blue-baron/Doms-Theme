<?php get_header('small'); ?>

<div class="mainContent row">
	 <div class="small-12 medium-8 large-9 columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			
				<?php  get_template_part('meta'); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			<?php comments_template(); ?>

		</article>

	
	<?php endwhile; endif; ?>
    </div><!-- end .columns -->
	
<?php get_sidebar(); ?>
</div><!-- end .row -->
<?php get_footer(); ?>