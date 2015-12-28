<?php get_header('small'); ?>

<div class="mainContent row">
	 <div class="small-12 medium-8 large-9 columns">

	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>

		<?php get_template_part('nav'); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<?php get_template_part('meta'); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php get_template_part('nav'); ?>

	<?php else : ?>

		 <h2>Search Results</h2>
         <div class="post">
         <h3>Sorrry, no posts found.</h3>
         
         <p><?php _e('Perhaps searching, or one of the links below, can help.'); ?></p>
    
   
    <div class="row">
    
    <div class="links-404 small-12 medium-7 large-4 columns">
    	<?php get_search_form(); ?>
   		</div>

	<div class="links-404 small-12 medium-6 large-4 columns">
		<?php wp_list_pages('title_li=<h3>Pages</h3>' ); ?>
    	</div>
    
    <div class="links-404 small-12 medium-6 large-4 columns">
    	<h3>Categories</h3>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        </div>
   
    </div><!-- end .row -->
        </div>

	<?php endif; ?>

    </div><!-- end .columns -->

<?php get_sidebar(); ?>
</div><!-- end .row -->

<?php get_footer(); ?>
