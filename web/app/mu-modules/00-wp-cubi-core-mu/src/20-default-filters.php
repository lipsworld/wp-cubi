<?php

namespace Globalis\WP\Cubi;

/*
 * Prevent modification of .htaccess by WordPress, as it is handled by wp-cubi and Robo
 */
add_filter('flush_rewrite_rules_hard', '__return_false', 99, 1);

/*
 * Remove accents from media uploads
 */
add_filter('sanitize_file_name', 'remove_accents', 10, 1);

/*
 * Disable conversion of wysiwyg smilies codes to images
 */
add_filter('pre_option_use_smilies', '__return_zero', 10, 1);

/*
 * Remove emojis and smilies hooks
 */
remove_action('init', 'smilies_init', 5);
remove_filter('the_content', 'convert_smilies', 20);
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

/*
 * Remove useless capital_P_dangit filter
 */
remove_filter('wp_title', 'capital_P_dangit', 11);
remove_filter('the_title', 'capital_P_dangit', 11);
remove_filter('the_content', 'capital_P_dangit', 11);
remove_filter('widget_text_content', 'capital_P_dangit', 11);
remove_filter('comment_text', 'capital_P_dangit', 31);
