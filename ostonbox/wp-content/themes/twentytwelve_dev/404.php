<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="row-fluid">
  
	<?php get_sidebar(); ?>

	
		<div class="span9">
			<div id="content">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h1>
				</header>
				
				
				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
					<?//php get_search_form(); ?>
				</div>
			</article><!-- #post-0 -->
				
		</div><!-- #content -->
	</div><!-- #primary -->
	</div>
	<hr/>
	

<?php get_footer(); ?>	