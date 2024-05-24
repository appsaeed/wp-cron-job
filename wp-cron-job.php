<?php

/**
 * Plugin Name:  Advanced Cron Jobs
 * Plugin URI:   https://github.com/appsaeed/wp-cron-job
 * Description:  WP Cron enables you to view and control cron job in the WP-Cron system.
 * Author:       Appsaeed | Saeed Hossen
 * Author URI:   https://appsaeed.github.io
 * Version:      1.1.0
 * Text Domain:  ac-job
 * Domain Path:  /languages/
 * Requires at least: 5.6
 * Requires PHP: 7.4
 * License URI:  https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * License:      GPL v2 or later
 *
 * LICENSE
 * This file is part of WP Crontrol.
 *
 * Advanced Cron Jobs is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @package    ac-job
 * @author     Appsaeed & Edward Dale
 * @copyright  Copyright 2023 Appsaeed, 2023-2024 Saeed Hossen
 * @license    https://www.gnu.org/licenses/old-licenses/gpl-2.0.txt GPL 2.0
 * @link       https://appsaeed.github.io/
 */

namespace Crontrol;

const PLUGIN_FILE = __FILE__;
const WP_CRONTROL_VERSION = '1.1.1';

if (!defined('ABSPATH')) {
	exit;
}

if (!version_compare(PHP_VERSION, '7.4', '>=')) {
	return;
}

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
	return;
}
define('WCT_ACTION_PATH', 'admin.php');
define('WCT_STATUS_PAGE_NAME', 'action-scheduler');
define('WCT_SCHEDUL_PAGE_NAME', 'cron_schedule_page');
define('WCT_EVENT_PAGE_NAME', 'cron_event_page');

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/bootstrap.php';
require_once __DIR__ . '/src/event.php';
require_once __DIR__ . '/src/schedule.php';

// Get this show on the road.
init_hooks();
