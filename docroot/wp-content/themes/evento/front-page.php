<?php get_header(); ?>
  <main role="main">
    <?php
      // check if the flexible content field has rows of data
      if(get_field('components_list')):
        if (have_rows('components_list')):
          while (have_rows('components_list')): the_row();
            if (get_row_layout() == 'event_gallery'):
              get_template_part('templates/components/event-gallery');
            endif;

            if (get_row_layout() == 'event_sponsors'):
              get_template_part('templates/components/event-sponsors');
            endif;

            if (get_row_layout() == 'event_speakers'):
              get_template_part('templates/components/event-speakers');
            endif;

            if (get_row_layout() == 'event_blog'):
              get_template_part('templates/components/event-blog');
            endif;

            if (get_row_layout() == 'event_confe'):
              get_template_part('templates/components/event-confe');
            endif;

            if (get_row_layout() == 'event_contact'):
              get_template_part('templates/components/event-contact');
            endif;

            if (get_row_layout() == 'event_banner'):
              get_template_part('templates/components/event-banner');
            endif;

            if (get_row_layout() == 'event_schedule'):
              get_template_part('templates/components/event-schedule');
            endif;
          endwhile;
        endif;
      endif;
    ?>

    
  </main>
<?php get_footer();
