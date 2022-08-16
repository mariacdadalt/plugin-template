<?php

/**
 * Plugin Name: Maria C. Dadalt's Plugin Template
 * Plugin URI:
 * Description: A plugin template for use with plugin-core
 * Version: 1.0
 * Author: Maria C. Dadalt
 * Author URI:
 * License: MIT
 */

declare(strict_types=1);

use Plugin\Template\Plugin;

/**
 * Register the plugin instance with the Core Plugin.
 */
core()->registerPlugin(new Plugin());
