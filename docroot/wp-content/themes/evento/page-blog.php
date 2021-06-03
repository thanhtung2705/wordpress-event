<?php get_header(); ?>
	<main role="main">
    <div class="event-banner banner--onlyhavetitle">
      <div class="container">
        <div class="event-banner__wrap">
          <div class="event-banner__content">
            <h1 class="event-banner__title"><?php echo get_the_title( get_the_ID('') ); ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="main-content">
      <div class="container">
        <div class="blog-left">
          <div class="event-blog">
            <?php 
            // the query
            $args = array (
              'post_type' => 'post',
              'post_status' => 'publish',
              'orderby' => 'date',
              'paged' => get_query_var('paged'),
            );

            $the_query = new WP_Query( $args ); ?>
            
            <?php if ( $the_query->have_posts() ) : ?>
            
                <!-- pagination here -->
            
                <!-- the loop -->
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
                  <?php $content = get_field('content');
                        $body = get_field('blog_body')
                  ?>
                  <div class="event-blog__item">
                    <div class="event-blog__image">
                      <?php echo get_the_post_thumbnail($the_query->post->ID); ?>
                      <div class="event-blog__date">
                        <?php if($content): echo $content; endif; ?>  
                      </div>
                    </div>
                    <div class="event-blog__content">
                      <h3 class="event-blog__sub-title"><a href="<?php echo get_permalink($the_query->post->ID) ?>"><?php the_title(); ?></a></h3>
                      <div class="event-blog__body"><?php ?><p><?php echo the_content($the_query->post->ID); ?></p></div>

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
                    </div>
                  </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
            
                <!-- pagination here -->

            <div class="pagination">
              <?php 
              $big = 999999999;
              echo paginate_links(array(
                'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages,
                'prev_text'    => '<',
                'next_text'    => '>',
                'end_size'     => 3,
                'mid_size'     => 1,
              ));
              ?>
            </div>
            
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>

          <div class="event-widget">
            <?php 
              // the_widget('WP_Widget_Search');
              // the_widget('WP_Widget_Categories');
              // the_widget('WP_Widget_Tag_Cloud');
              // the_widget('WP_Widget_Gallery');
              // the_widget('WP_Widget_Recent_Posts');
              dynamic_sidebar('widget-area-1');
            ?>
          </div>
        </div>
      </div>
      <?php //the_widget('WP_Widget_Search', 'WP_Widget_Categories', 'WP_Widget_Recent_Posts',  $instance, $args); ?>
    </div>
  </main>
<?php get_footer(); ?>
