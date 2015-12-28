<?php get_header('small'); ?>

<div class="mainContent row">
	 <div class="small-12 medium-8 large-9 columns">
     
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<h1><?php the_title(); ?></h1>
		
        <article class="post" id="post-<?php the_ID(); ?>">
        		
			<?php get_template_part('meta'); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>
		
		
		<?php endwhile; endif; ?>
        </div><!-- end .columns -->

<?php get_sidebar(); ?>
</div><!-- end .row -->

<?php get_footer(); ?>
