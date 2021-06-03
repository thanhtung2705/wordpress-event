<?php
    $class = get_sub_field('class');
    $subTitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $downloadLink = get_sub_field('download_link');
    $videoLink = get_sub_field('video_link');
    $bannerTime = get_sub_field('banner_time');
?>
<div class="event-banner <?php if ($class): echo $class; endif ?>">
    <div class="container">
        <div class="event-banner__wrap">
            <div class="event-banner__content">
                <?php if ($subTitle): ?>
                    <h4 class="event-banner__sub-title"><?php echo $subTitle; ?></h4>
                <?php endif; ?>

                <?php if ($title): ?>
                    <h1 class="event-banner__title"><?php echo $title; ?></h1>
                <?php endif; ?>

                <div class="event-banner__link">
                    <?php if($downloadLink): ?>
                        <div class="event-banner__download">
                            <a href="<?php echo $downloadLink['url']; ?>" class="btn btn--banner" target="_blank"><?php echo $downloadLink['title']; ?></a>
                        </div>
                    <?php endif; ?>

                    <div class="event-banner__video">
                        <?php if($videoLink): ?>
                            <div class="play">
                                <a href="<?php echo $videoLink['url']; ?>" class="videoLink"><span><?php echo $videoLink['title']; ?></span><img src="wp-content/themes/evento/assets/images/Play.png" alt=""></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="event-banner__timer">
                    <?php echo $bannerTime; ?>
                </div>
            </div>
        </div>
    </div>
</div>