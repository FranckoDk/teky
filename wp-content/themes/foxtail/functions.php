<?php

/**
 * Setup:
 * Load theme text domain
 * Register nav, widget
 * Register custom post type
 * Enqueue styles, etc.
 */

require get_template_directory() . '/core/setup.php';

/**
 * Structure
 */
require get_template_directory() . '/core/structure.php';

/**
 * Wiget
 */
require get_template_directory() . '/core/widgets.php';

/**
 * Theme options by Redux framework
 */
require get_template_directory() . '/core/options.php';

/**
 * WooCommerce
 */
require get_template_directory() . '/core/woocommerce.php';

/**
 * Visual Composer
 */
require get_template_directory() . '/core/visual-composer.php';

/**
 * Custom WP Admin
 */
require get_template_directory() . '/core/custom-wp-admin.php';