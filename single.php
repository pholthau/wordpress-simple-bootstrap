<?php get_header(); ?>
			
			<div id="content" class="row">
			
				<div id="main" class="col-sm-8 <?php echo (is_active_sidebar( 'sidebar1' ) ? '' : 'col-sm-push-2'); ?>" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 itemprop="headline"><?php the_title(); ?></h1></div>
						
							<?php the_post_thumbnail('wpbs-featured-small'); ?>
							
							<?php display_post_meta() ?>
						
						</header> <!-- end article header -->
					
						<section class="post_content" itemprop="articleBody">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('', ' ', ''); ?></p>

							<nav>
								<ul class="pager">
									<li class="previous"><?php previous_post_link( '%link', esc_html(__( 'Previous Post')) ); ?></li>
									<li class="next"><?php next_post_link( '%link', esc_html(__( 'Next Post')) ); ?></li>
								</ul>
							</nav>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>