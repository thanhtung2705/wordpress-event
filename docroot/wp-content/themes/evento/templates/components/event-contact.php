<?php
    $title = get_sub_field('title');
    $contactform = get_sub_field('contact_form_7');
?>

<div class="event-contact">
    <div class="container">
        <div class="event-contact__url">
            <?php if( have_rows('locations') ): ?>
                <div class="acf-map" data-zoom="16">
                    <?php while ( have_rows('locations') ) : the_row(); 
                        // Load sub field values.
                        $location = get_sub_field('location');
                        ?>
                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                            <p><em><?php echo esc_html( $location['address'] ); ?></em></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <h2 class="event-contact__title"><?php echo $title; ?></h2>

        <div class="event-contact__wrap">
            <div class="event-contact__form">
                <div class="event-contact__form-list">
                    <?php // echo $eventForm; ?>
                    <?php echo do_shortcode('[contact-form-7 id="'. $contactform .'"]'); ?>
                </div>
            </div>

            <div class="event-contact__media">
                <?php if (have_rows('media_item')): while (have_rows('media_item')): the_row();
                    $mediaIcon = get_sub_field('media_icon');
                    $mediaBody = get_sub_field('media_body');
                ?>
                    <div class="event-contact__item">
                        <div class="event-contact__icon">
                            <?php echo $mediaIcon; ?>
                        </div>

                        <div class="event-contact__body">
                            <?php echo $mediaBody; ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
fin sqld > default.sql
