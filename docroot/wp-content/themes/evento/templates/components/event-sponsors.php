<?php $title = get_sub_field('title');
      $description = get_sub_field('description');
?>

<div class="event-sponsors">    
    <div class="container">
      <div class="event-sponsors__wrap">
        <div class="event-sponsors__content-left">
            <?php if ($title):  ?>
                <h2 class="event-sponsors__title"> <?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($description):  ?>  
            <div class="event-sponsors__description">
                <?php echo $description; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="event-sponsors__content-right">
          <div class="event-sponsors__list">
            <?php $images = get_sub_field('image'); ?>
              <?php if( $images ): ?>
                  <?php foreach( $images as $image ): ?>
                      <div class="event-sponsors__item">
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </div>
                  <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>    
</div>
