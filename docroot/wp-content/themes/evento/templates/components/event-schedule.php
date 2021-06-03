<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $event_schedule = get_sub_field('event_schedules');
?>
<div class="event-schedule">
    <div class="container">
        <div class="event-schedule__wrap">
            <div class="event-schedule__content">
                <?php if ($title): ?>
                    <h2 class="event-schedule__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($description): ?>
                    <div class="event-schedule__description " id="list">
                        <?php echo $description; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="event-schedule__nav">
            <div class="event-schedule__nav-wrap">
                <div class="event-schedule__list">
                    <?php foreach ($event_schedule as $event ) { ?>
                        <a href="" class="event-schedule__item nav-link js-index"><?php echo $event['schedule_day']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="event-schedule__body">
            <div class="event-schedule__body-content">
                <div class="accordion-wrapper">
                    <?php foreach ($event_schedule as $event ) { ?>
                        <div class="accordion js-accordion">
                            <?php foreach ($event['schedule_times'] as $eventItem ) { ?>
                                <div class="accordion__item">
                                    <h3 class="accordion__title"><?php echo $eventItem['time_tilte']; ?><p class="speaker-title"><?php echo $eventItem['speaker_title'] ?></p></h3>

                                    <div class="accordion__body">
                                        <?php echo $eventItem['event_description']; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
