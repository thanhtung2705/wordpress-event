<?php 
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $link = get_sub_field('link');
?>
<div class="event-speakers">
    <div class="container">
        <div class="event-speakers__list">
            <div class="event-speakers__wrap">
                <div class="event-speakers__content item--large">
                    <?php if ($title): ?>
                        <h2 class="event-speakers__title"><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if ($description): ?>
                        <div class="event-speakers__description">
                            <?php echo $description; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($link): ?>
                        <div class="event-speakers__button">
                            <a href="<?php echo $link['url']; ?>" class="btn btn--white"><?php echo $link['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php if (have_rows('item')): while (have_rows('item')): the_row();
                    $image = get_sub_field('image');
                    $subDescription = get_sub_field('sub_description');
                    $subLink = get_sub_field('sub_link');
                ?>
                    <div class="event-speakers__item item--small">
                        <div class="event-speakers__image">
                            <?php if( $image ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <ul class="team-social">
                                <div class="team-social__wrap">
                                    <?php if (have_rows('social_icon')): while (have_rows('social_icon')): the_row();
                                        $icon = get_sub_field('icon');
                                        $iconLink = get_sub_field('icon_link');
                                    ?>
                                        <li><a href="<?php echo $iconLink['url']; ?>"><?php echo $icon;?> <span><?php $iconLink['title']; ?></span></a></li>
                                    <?php endwhile; endif; ?>
                                </div>
                            </ul>
                        </div>

                        <div class="event-speakers__caption">
                            <?php if ($subLink): ?>
                                <h3><a href="<?php echo $subLink['url']; ?>"><?php echo $subLink['title']; ?></a></h3>
                            <?php endif; ?>

                            <?php if ($subDescription): ?>
                                <?php echo $subDescription; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
