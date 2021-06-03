<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $blog_post_items = get_sub_field('blog_post_items');
?>


<div class="event-blog">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="event-blog__title"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if ($description): ?>
            <div class="event-blog__description">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
        <div class="event-blog__list">
            <?php foreach ($blog_post_items as $blog_post_item ) { ?>
                <?php $content = get_field('content', $blog_post_item->ID);
                      $blogCap = get_field('blog_cap', $blog_post_item->ID);
                ?>
                <div class="event-blog__item">
                    <div class="event-blog__image">
                        <?php echo get_the_post_thumbnail($blog_post_item->ID); ?>
                        <div class="event-blog__date">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <div class="event-blog__content">
                        <div class="event-blog__body"><?php ?><p><?php echo $blogCap; ?></p></div>
                        <h3 class="event-blog__sub-title"><a href="<?php echo get_permalink($blog_post_item->ID) ?>"><?php echo get_the_title($blog_post_item->ID); ?></a></h3>

                        <div class="event-blog__link">
                            <?php if(have_rows('item')): while(have_rows('item')): the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                            ?>
                            <div class="event-blog__link-item">
                                <a href="#"><?php if($icon && $title): echo $icon; echo $title; endif; ?></a>
                            </div>
                            <?php endwhile; endif; ?>

                            <?php if($blog_post_item->ID): ?>
                                <a href="<?php echo get_permalink($blog_post_item->ID) ?>" class="read-more">Read more >></a>
                            <?php endif; ?>
                        </div>

                        <?php if ($body): ?>
                            <div class="text">
                                <?php echo $body; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
