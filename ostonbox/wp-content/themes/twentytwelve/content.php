<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) ) : //[&& is_multi_author()] If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<?php $custom_fields = get_post_custom_keys($post_id);
				if (!in_array ('copyright', $custom_fields)) : ?>		
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2>作者：<?php the_author(); ?></h2>				
						<p>
							文章链接：<a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_permalink()?></a>
							<br/>
							除非注明，文章皆由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>)原创，欢迎转载！转载请保留本文地址．
						</p>
					</div><!-- .author-description -->	
				</div><!-- .author-info -->					
				<?php else: ?>
				<?php $custom = get_post_custom($post_id);
				$custom_value = $custom['copyright']; ?>
				<div class="author-info">
				<p><strong> 声明: </strong> 本文转自 <a target="_blank" rel="nofollow" href="<?php echo $custom_value[0] ?>" ><?php echo $custom_value[0] ?></a> ，由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>) 整编。</p>
				<p><strong> 本文链接: </strong><a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_permalink()?></a> .</p>
				</div>				
				<?php endif; ?>	<!-- .article-copyright -->
								
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
