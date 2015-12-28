<?php get_header(); ?>

<div class="mainContent row">
	 <div class="small-12 medium-8 large-9 columns">
	 
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

			<?php get_template_part('_/inc/meta'); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
       
			
            </footer>

		</article>
       
       

	<?php endwhile; ?>
    

	<?php get_template_part('_/inc/nav'); ?>

	<?php else : ?>

		<h1>Not Found</h1>

	<?php endif; ?>
	</div><!-- end .columns -->
    
<?php get_sidebar(); ?> 

</div><!-- end .row -->

<?php get_footer(); ?>
