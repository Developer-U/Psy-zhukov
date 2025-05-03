<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
/**
 *  Main Page
 */

get_header();

get_template_part('template-parts/hero');

get_template_part('template-parts/block', 'digits');

get_template_part('template-parts/block', 'competent');

get_template_part('template-parts/block', 'gift');

get_template_part('template-parts/block', 'services');

get_template_part('template-parts/block', 'documents-reviews');

get_template_part('template-parts/block', 'cta');

get_template_part('template-parts/block', 'solve-problems');

get_template_part('template-parts/block', 'levels');

get_template_part('template-parts/block', 'results');
get_footer();
?>