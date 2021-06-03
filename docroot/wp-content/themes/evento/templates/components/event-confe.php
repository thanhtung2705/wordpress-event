<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $link = get_sub_field('link');
    $images = get_sub_field('image');
?>

<div class="event-confe">
    <div class="container">
        <div class="event-confe__wrap">
            <div class="event-confe__content-left">
                <?php if($title): ?>
                    <h2 class="event-confe__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if($description): ?>
                    <div class="event-confe__description">
                        <?php echo $description; ?>
                    </div>
                <?php endif; ?>

                <div class="event-confe__list">
                    <?php if (have_rows('item')): while (have_rows('item')): the_row();
                        $icon = get_sub_field('icon');
                        $caption = get_sub_field('caption');
                    ?>
                        <div class="event-confe__item">
                            <div class="event-confe__icon">
                                <?php echo $icon; ?>
                            </div>

                            <div class="event-confe__caption">
                                <?php echo $caption; ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>

                <?php if ($link): ?>
                    <div class="event-confe__link">
                        <a href="<?php echo $link['url']; ?>" class="btn"><?php echo $link['title']; ?></a>
                    </div>
                <?php  endif; ?>
            </div>

            <div class="event-confe__content-right">
                <?php if (have_rows('image_item')): while (have_rows('image_item')): the_row();
                    $image = get_sub_field('image');
                    $class = get_sub_field('class');
                ?>
                    <div class="event-confe__image <?php echo $class; ?>">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>