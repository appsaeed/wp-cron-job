## Custom wrodpress cron jobs management

### Description

The plugin inspaired from `Advanced Cron Jobs` plugin.
This simplifies managing and scheduling cron jobs directly from wp dashboard. 
It offers a user-friendly interface for viewing, editing, deleting, and creating cron events.

## Features

* View all cron events with details like arguments, recurrence, callback functions, and next run time.
* Edit, delete, pause, resume, and immediately run cron events.
* Add new cron events.
* Bulk delete cron events.
* Manage custom cron schedules.
* Export cron event lists as CSV files.
* Identify and address potential cron system issues.
* Supports timezones.

## Benefits

* Gain control over your WordPress cron jobs.
* Improve website performance by optimizing cron job schedules.
* Easily troubleshoot cron-related issues.
* Securely manage cron events with user access controls.

## Installation

There are two ways to install this plugin:

**Method 1: WordPress Plugin Directory Installation**

1. Download the plugin source code from the repository.
2. Navigate to the "Plugins" menu in your WordPress admin panel.
3. Go to "Add new" in the plugin sub menu.
4. Upload the downloaded file from this repository (.zip file).
5. Once uploaded, click "Activate" to start using it.
6. After all you will be able to use it by follow [Uses](#uses) section 

**Method 2: Manual Installation**

1. Download the plugin source code from the repository.
2. Upload the downloaded folder (containing the plugin files) to your WordPress site's `/wp-content/plugins/` directory.
3. Activate the  plugin from the WordPress admin panel (Plugins > Installed Plugins).


## Usage

1. Navigate to **Tools > Cron Events** to manage existing cron events.
2. Navigate to **Settings > Cron Schedules** to manage custom cron schedules.

## Accessibility

This plugin is designed to be accessible and adhere to WCAG 2.0 guidelines. 
If you encounter any accessibility issues, please report them through the repository issues.

## Frequently Asked Questions (FAQs)

**Does this plugin work with PHP 8 or above?**

Yes, the plugin is actively tested and works up to PHP 8.2.

**Is it safe to delete cron events?**

It depends. Use a search engine to find out which plugin the event belongs to before deleting. Events with "None" as the action are usually safe to delete.

**Why can't I delete some cron events?**

WordPress core uses these events. You can pause them instead.

**What happens when I pause an event?**

Pausing disables all actions attached to the event's hook. The event remains scheduled but won't run.

**What happens when I resume an event?**

Resuming re-enables all actions attached to the event's hook.

**What does "None" for the Action of a cron event mean?**

The event is scheduled but has no functionality to trigger, making it useless. This can happen with deactivated plugins that don't clean up their cron events.

**How do I change the schedule of a cron event?**

Edit the event through the plugin interface.

**How can I create a cron event that requests a URL?**

Create a PHP cron event that uses the WordPress HTTP API to fetch the URL.

**Can I export a list of cron events?**

Yes, you can export a CSV file from the cron event listing screen.

**What are cron schedules used for?**

Cron schedules define intervals for executing events. Plugins can add custom schedules for specific functionalities.

**How do I create a new cron event?**

1. Use the plugin interface to add a new event with the desired hook name and schedule.
2. In your theme's `functions.php` file, use `add_action` to define the function to be executed when the hook is triggered.

## Additional Notes

* WP-CLI commands for cron management are now part of WP-CLI itself. Use `wp help cron` for more information.
* Only users with the `manage_options` capability can manage cron events and schedules.
* Only users with the `edit_files` capability can manage PHP cron events.

## How to Contribute

The plugin's code is available on GitHub. Here's how to contribute:

1. Fork the repository on GitHub.
2. Clone the forked repository to your local machine.
3. Make your changes and commit them.
4. Create a pull request on the original GitHub repository.

