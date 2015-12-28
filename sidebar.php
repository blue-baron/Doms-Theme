<div id="sidebar">

    <div class="small-12 medium-4 large-3 columns">
	
    <div id="highlightBox">
    <h3>Games in Development</h3>
    <div class="game">
    	<a href="http://www.dungeonbard.com" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/dungeonbard.png" alt="dungeonbard" /></a>
    	<a href="http://www.dungeonbard.com" target="blank">www.dungeonbard.com</a>
    </div>
    </div><!-- end .highlightBox -->
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>
    
    	<?php wp_list_pages('title_li=<h3>Pages</h3>' ); ?>
    
    	<h3>Archives</h3>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
        <h3>Categories</h3>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h3>Meta</h3>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>
    
    </div><!-- end .columns -->

</div>