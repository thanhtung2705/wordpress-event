<?php
if( have_rows('components_list') ):
     // loop through the rows of data
  while ( have_rows('components_list') ) : the_row();
    // Event Gallery
    get_template_part('templates/components/event-gallery');

    get_template_part('templates/components/event-sponsors');

    get_template_part('templates/components/event-speakers');
    
    get_template_part('templates/components/event-blog');

    get_template_part('templates/components/event-confe');

    get_template_part('templates/components/event-contact');

  endwhile;
endif;?>