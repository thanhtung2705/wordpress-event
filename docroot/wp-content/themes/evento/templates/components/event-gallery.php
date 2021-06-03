<div class="event-gallery">
    <div class="event-gallery__gallery">
    <?php $images = get_sub_field('image');  
        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="event-gallery__item">
                    <div class="event-gallery__image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
