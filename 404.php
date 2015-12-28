<?php get_header('small'); ?>

<div class="mainContent row">
	<div class="small-12 large-9 columns">  

	<div class='post'>
    	
    <h2><?php _e('Sorry, we can\'t find what you are looking for.'); ?></h2>
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
   
    </div><!-- end .post -->
    
    
    </div><!-- end .columns -->

<?php get_sidebar(); ?>
</div><!-- end .row -->

<?php get_footer(); ?>