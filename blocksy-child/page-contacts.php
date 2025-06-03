<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
/**
 *  Page contacts
 */

$contacts_image = get_field('contacts_image');
$slogan_cta_text = get_field('contacts_slogan_cta_text');

$socials = get_field('social_icons', 'options');
$address = get_field('address', 'options');
/*Map*/
$markImg = get_field('mark_img', 'options');
$markCoords = get_field('mark_coords', 'options');
$work_time = get_field('work_time', 'options');
$baloon_text = get_field('baloon_text', 'options');
$mark_zoom = get_field('mark_zoom', 'options') ? get_field('mark_zoom', 'options') : 14;

get_header();

get_template_part('template-parts/hero', 'pages');
?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU"
    type="text/javascript">
    </script>

<section class="contacts position-relative tree gradient">
    <div class="container position-relative">
        <div class="contacts__wrap contacts-wrap d-grid align-items-start">
            <ul class="contacts-wrap__block contact-list d-flex flex-column">
                <?php
                // Цикл с телефонами
                if (have_rows('new_phone', 'options')) { ?>
                    <?php while (have_rows('new_phone', 'options')) {
                        the_row();
                        $phone_tel = get_sub_field('phone_tel', 'options');
                        ?>
                        <li>
                            <a class="contacts__item phone" data-aos="fade-right" data-aos-offset="100" data-aos-delay="200"
                                data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"
                                data-aos-anchor-placement="left-top"
                                href="tel:<?php echo str_replace([' ', '(', ')', '-', '+'], '', $phone_tel); ?>">
                                <?php echo $phone_tel; ?>
                            </a>
                        </li>
                    <?php }
                    ;
                }

                if ($socials['whatsapp']) { ?>
                    <li>
                        <a class="contacts__item whatsapp" data-aos="fade-right" data-aos-offset="100" data-aos-delay="200"
                            data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"
                            data-aos-anchor-placement="left-top"
                            href="https://api.whatsapp.com/send?phone=<?php echo str_replace([' ', '(', ')', '-', '+'], '', $socials['whatsapp']); ?>"
                            target="_blank">
                            <?php echo $socials['whatsapp']; ?>
                        </a>
                    </li>
                <?php }

                if ($socials['telegram']) { ?>
                    <li>
                        <a class="contacts__item telegram" data-aos="fade-right" data-aos-offset="200" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"
                            data-aos-anchor-placement="left-top"
                            href="https://t.me/<?php echo str_replace([' ', '(', ')', '-', '+'], '', $socials['telegram']); ?>"
                            target="_blank">
                            <?php echo $socials['telegram']; ?>
                        </a>
                    </li>
                <?php }

                if ($address) { ?>
                    <li>
                        <p class="contacts__item address" data-aos="fade-right" data-aos-offset="50" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"
                            data-aos-anchor-placement="left-top">
                            <?php echo $address; ?>
                        </p>
                    </li>
                <?php }
                ?>
            </ul>

            <div class="contacts__cta blue-cta">
                <?php
                get_template_part('template-parts/cta', 'services-block');
                ?>
            </div>
        </div>
    </div>
</section>

<div id="map" class="map"></div>

<script type="text/javascript">
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map('map', {
            center: [<?php echo $markCoords; ?>],
            zoom: <?php echo $mark_zoom; ?>,
            controls: ['zoomControl']
        }, {
            searchControlProvider: 'yandex#search'
        });

        var myPlacemark = new ymaps.Placemark([<?php echo $markCoords; ?>], {

            balloonContentHeader: '<figure class="map__image"><img src="<?php echo esc_url($markImg['url']); ?>"></figure>',
            balloonContentBody: `                
                                        <div class="baloon__box">                    
                                            <p class="baloon__text"><?php echo $baloon_text; ?></p>                
                                            <p class="baloon__text fw-bold"><?php echo $work_time; ?></p>               
                                        </div>`,
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/map-mark.svg',
            // Размеры метки.
            iconImageSize: [60, 60],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        }),


            myGeoObject = new ymaps.GeoObject({
                geometry: {
                    type: "Point",
                    coordinates: [<?php echo $markCoords; ?>]
                },
                properties: {
                    balloonContentHeader: '<figure class="map__image"><img src="<?php echo esc_url($markImg['url']); ?>"></figure>',
                    balloonContentBody: `                
                                        <div class="baloon__box">                    
                                            <p class="baloon__text"><?php echo $baloon_text; ?></p>                
                                            <p class="baloon__text fw-bold"><?php echo $work_time; ?></p>               
                                        </div>`,
                }
            }, {
                preset: 'islands#redGlyphIcon'
            }
            );

        myMap.geoObjects
            // .add(myGeoObject);
            .add(myPlacemark);

        myMap.behaviors.disable('scrollZoom');
    }
</script>

<?php
get_template_part('template-parts/block', 'results');

get_footer();
?>