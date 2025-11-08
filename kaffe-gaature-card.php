<?php
/*
 * Plugin Name: Kaffe Gåture – Popup
 * Description: Viser et popup-vindue med billede og en knap, der linker til en side. Brug shortcode [kaffe_gaature_popup].
 * Version: 1.2.0
 * Author: DIT NAVN
 * License: GPL2+
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'KG_POPUP_URL', plugin_dir_url( __FILE__ ) );

// Indlæs CSS + JS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('kg-popup-style', KG_POPUP_URL . 'css/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('kg-popup-script', KG_POPUP_URL . 'js/script.js', array('jquery'), '1.2.0', true);
});

// Shortcode
function kg_popup_shortcode( $atts ) {
    $defaults = array(
        'img'    => KG_POPUP_URL . 'img/kaffe-gaature.png',
        'alt'    => 'Kaffe Gåture – program',
        'link'   => 'https://www.instagram.com/peterlarsenkaffe/',
        'label'  => 'Følg med os på Instagram',
    );
    $a = shortcode_atts( $defaults, $atts, 'kaffe_gaature_popup' );

    ob_start(); ?>
    <div id="kg-popup-container" class="kg-hidden">
        <div id="kg-popup-box">
            <button type="button" id="kg-popup-close" aria-label="Luk popup">×</button>
            <img src="<?= esc_url($a['img']); ?>" alt="<?= esc_attr($a['alt']); ?>" class="kg-popup-image">
            <a href="<?= esc_url($a['link']); ?>" target="_blank" class="kg-popup-button"><?= esc_html($a['label']); ?></a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('kaffe_gaature_popup', 'kg_popup_shortcode');