<?php
/**
 * Displaying Service block item
 * Отображает карточку услуги в листинге
 */
$service_image = get_field('service_image');
?>

<li class="services-list__item service-item d-flex flex-column gap-3 justify-content-between position-relative"
    style="background-image: url('<?php echo $service_image['url']; ?>'); background-size: cover; background-repeat: no-repeat">

    <a class="col-auto service-item__plashka" href="<?php the_permalink(); ?>">
        <h3 class="service-item__title">
            <?php the_title(); ?>
        </h3>

        <p class="service-item__text">
            <?php echo get_the_excerpt(); ?>
        </p>
    </a>

    <a href="<?php the_permalink(); ?>" class="button action-more">
        <p>подробнее           
        </p>        
    </a>
</li>