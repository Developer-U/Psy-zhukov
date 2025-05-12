<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$documents_image = get_field('documents_image');
$slogan_cta_text = get_field('documents_slogan_cta_text');
$documents_description = get_field('documents_description', 'options');
/**
 *  Page documents
 */

get_header();

get_template_part('template-parts/hero', 'pages');
?>

<section class="documents gradient-heaven heaven2 position-relative">
    <div class="container">
        <div class="tabs gallery-tabs">
            <!-- Кнопки-переключатели табов -->
            <ul class="gallery-tabs__btns gallery-tab-btns d-flex gap-2">
                <li class="gallery-tab-btns__button js-pathTabs col-auto active" data-path="0"
                    data-tabpathrep="galery_0">
                    Дипломы
                </li>

                <li class="gallery-tab-btns__button js-pathTabs col-auto" data-path="1" data-tabpathrep="galery_1">
                    Сертификаты
                </li>

                <li class="gallery-tab-btns__button js-pathTabs col-auto" data-path="2" data-tabpathrep="galery_2">
                    Удостоверения
                </li>
            </ul>

            <article class="gallery-tab-target__target js-targetTabs gallery-tab-target active" data-target="0"
                data-tabTargetReprep="galery_0">
                <h2 class="gallery-tab-target__title visually-hidden">Дипломы</h2>

                <ul class="documents__list documents-list d-flex">
                    <?php if (have_rows('new_document_diploma', 'options')): ?>
                        <?php while (have_rows('new_document_diploma', 'options')):
                            the_row();
                            $document_diploma_preview = get_sub_field('document_diploma_preview', 'options');
                            $document_diploma = get_sub_field('document_diploma', 'options');
                            $document_diploma_text = get_sub_field('document_diploma_text', 'options');
                            ?>

                            <a href="<?php echo $document_diploma['url']; ?>"
                                class="documents-list__item document position-relative list-1" data-fancybox="document_gallery">
                                <span class="gallery-zoom position-absolute"></span>

                                <?php if ($document_diploma_text) {
                                    echo '<div class="document__description position-absolute">' . $document_diploma_text . '</div>';
                                } ?>

                                <img src="<?php echo $document_diploma_preview['url']; ?>"
                                    alt="<?php echo $document_diploma_preview['alt']; ?>">
                            </a>

                            <?php
                        endwhile; ?>
                    <?php endif; ?>
                </ul>
            </article>

            <article class="gallery-tab-target__target js-targetTabs gallery-tab-target" data-target="1"
                data-tabTargetReprep="galery_1">
                <h2 class="gallery-tab-target__title visually-hidden">Сертификаты</h2>

                <ul class="documents__list documents-list d-flex">
                    <?php if (have_rows('new_document_cert', 'options')): ?>
                        <?php while (have_rows('new_document_cert', 'options')):
                            the_row();
                            $document_cert_preview = get_sub_field('document_cert_preview', 'options');
                            $document_cert = get_sub_field('document_cert', 'options');
                            $document_cert_text = get_sub_field('document_cert_text', 'options');
                            ?>

                            <a href="<?php echo $document_cert['url']; ?>"
                                class="documents-list__item document position-relative list-2"
                                data-fancybox="document_gallery_2">
                                <span class="gallery-zoom position-absolute"></span>

                                <?php if ($document_cert_text) {
                                    echo '<div class="document__description position-absolute">' . $document_cert_text . '</div>';
                                } ?>

                                <img src="<?php echo $document_cert_preview['url']; ?>"
                                    alt="<?php echo $document_cert_preview['alt']; ?>">
                            </a>

                            <?php
                        endwhile; ?>
                    <?php endif; ?>
                </ul>

                <?php if ($documents_description) {
                    echo '<div class="documents_description post">' . $documents_description . '</div>';
                } ?>
            </article>

            <article class="gallery-tab-target__target js-targetTabs gallery-tab-target" data-target="2"
                data-tabTargetReprep="galery_2">
                <h2 class="gallery-tab-target__title visually-hidden">Удостоверения</h2>

                <ul class="documents__list documents-list d-flex">
                    <?php if (have_rows('new_document_idcard', 'options')): ?>
                        <?php while (have_rows('new_document_idcard', 'options')):
                            the_row();
                            $document_idcard_preview = get_sub_field('document_idcard_preview', 'options');
                            $document_idcard = get_sub_field('document_idcard', 'options');
                            $document_idcard_text = get_sub_field('document_idcard_text', 'options');
                            ?>

                            <a href="<?php echo $document_idcard['url']; ?>"
                                class="documents-list__item document position-relative list-2"
                                data-fancybox="document_gallery_3">
                                <span class="gallery-zoom position-absolute"></span>

                                <?php if ($document_idcard_text) {
                                    echo '<div class="document__description position-absolute">' . $document_idcard_text . '</div>';
                                } ?>


                                <img src="<?php echo $document_idcard_preview['url']; ?>"
                                    alt="<?php echo $document_idcard_preview['alt']; ?>">
                            </a>

                            <?php
                        endwhile; ?>
                    <?php endif; ?>
                </ul>
            </article>
        </div>
    </div>
</section>

<script>
    /*Load more button*/
    const Wrappers = document.querySelectorAll('.js-targetTabs'); // Родитель постов   

    Wrappers.forEach(function (Wrapper) {
        var all_posts_wrapper = Wrapper.querySelector('.documents-list');

        const allItems1 = all_posts_wrapper.querySelectorAll('.documents-list__item.list-1'); // Все документы в 1

        const allItems2 = all_posts_wrapper.querySelectorAll('.documents-list__item.list-2'); // Все документы в 2

        const allItems3 = all_posts_wrapper.querySelectorAll('.documents-list__item.list-3'); // Все документы в 3


        var newsMoreBtn = document.createElement('button'); // Создаём кнопку Добавить ещё          

        newsMoreBtn.classList.add('button', 'button', 'more-btn'); // Присваиваем её стили

        newsMoreBtn.innerText = 'показать ещё';

        if (allItems1.length > 8 || allItems2.length > 8 || allItems3.length > 8) {  // Добавляем кнопку, если статей более 15
            Wrapper.append(newsMoreBtn);
        }

        for (let i = 8; i < allItems1.length; i++) {
            // console.log(allItems1[i]);
            allItems1[i].style.display = 'none';
        }

        for (let i = 8; i < allItems2.length; i++) {
            // console.log(allItems1[i]);
            allItems2[i].style.display = 'none';
        }

        for (let i = 8; i < allItems3.length; i++) {
            // console.log(allItems1[i]);
            allItems3[i].style.display = 'none';
        }

        var countD = 8; //Установим счётчик для 1

        var countT = 8; //Установим счётчик для 2

        var countB = 8; //Установим счётчик для 3

        newsMoreBtn.addEventListener('click', function () {
            countD += 4;

            countT += 4;

            countB += 4;

            if (countD <= allItems1.length) {
                for (let i = 0; i < countD; i++) {
                    allItems1[i].style.display = 'block'; // При клике на кнопку добавляем дипломы
                }

                if (countD == allItems1.length) {
                    newsMoreBtn.style.display = 'none';
                }
            } else {
                allItems1.forEach(function (elsePost) {
                    elsePost.style.display = 'block'; // При клике на кнопку добавляем дипломы

                    newsMoreBtn.style.display = 'none';
                });
            }

            if (countT <= allItems2.length) {
                for (let i = 0; i < countT; i++) {
                    allItems2[i].style.display = 'block'; // При клике на кнопку добавляем дипломы
                }

                if (countT == allItems2.length) {
                    newsMoreBtn.style.display = 'none';
                }
            } else {
                allItems2.forEach(function (elsePost) {
                    elsePost.style.display = 'block'; // При клике на кнопку добавляем дипломы

                    newsMoreBtn.style.display = 'none';
                });
            }

            if (countB <= allItems3.length) {
                for (let i = 0; i < countB; i++) {
                    allItems3[i].style.display = 'block'; // При клике на кнопку добавляем дипломы
                }

                if (countB == allItems3.length) {
                    newsMoreBtn.style.display = 'none';
                }
            } else {
                allItems3.forEach(function (elsePost) {
                    elsePost.style.display = 'block'; // При клике на кнопку добавляем дипломы

                    newsMoreBtn.style.display = 'none';
                });
            }

        });
    });
</script>

<?php
get_template_part('template-parts/block', 'services');

get_template_part('template-parts/block', 'cta');

get_footer();