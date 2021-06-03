<?php get_header(); ?>

	<main role="main">
		<div class="event-banner banner--onlyhavetitle">
		<div class="container">
			<div class="event-banner__wrap">
			<div class="event-banner__content">
				<h1 class="event-banner__title">Blog Details</h1>
			</div>
			</div>
		</div>
		</div>
	<!-- section -->
	<section class="main-content">
		<div class="container">
			<div class="blog-left">
				<div class="blog-content">
					<?php if (have_posts()): while (have_posts()) : the_post();
                        $body = get_field('blog_body');
                    ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h2>
							<?php the_title(); ?>
						</h2>
						<!-- /post title -->

						<div class="event-blog__link">
                            <?php if(have_rows('item')): while(have_rows('item')): the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                            ?>
                            <div class="event-blog__link-item">
                                <a href="#"><?php if($icon && $title): echo $icon; echo $title; endif; ?></a>
                            </div>
                            <?php endwhile; endif; ?>

                            <?php if($titleLink): ?>
                                <a href="<?php echo get_permalink($the_query->post->ID) ?>" class="read-more">Read more >></a>
                            <?php endif; ?>
						</div>

                        <?php if ($body): ?>
                            <div class="text">
                                <?php echo $body; ?>
                            </div>
                        <?php endif; ?>

						<?php the_content(); // Dynamic Content ?>

						<?php comments_template(); ?>

						<?php comment_form(); ?>

					</article>
					<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

					<?php endif; ?>
				</div>
				<div class="event-widget">
					<?php dynamic_sidebar('widget-area-1'); ?>
				</div>
			</div>
		</div>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
