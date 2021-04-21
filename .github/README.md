![logo](https://realhe.ro/img/logo.svg "Realhe.ro")

# WP Modern Plugin Boilerplate 

A standardized, organized, modern, object-oriented foundation for building high-quality WordPress Plugins (based on [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate)).

This boilerplate breaks dumb [WordPress Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/) and instead of it fully utilizes [PSR](https://www.php-fig.org/psr/).

## What's built in?

* Composer.
* PHPUnit.

## Usage

Main idea behind this boilerplate is to keep potential code changes as much we can inside the main plugin file (`wp-modern-plugin-boilerplate.php`).

To customize your plugin for production you'll need to replace some string occurrences. Use your IDE's find in files functionality.

### Replacement handlers

Replace these handlers with your information:

* {author} → your company or name.
* {author_uri} → link to your website.
* {plugin_uri} → link to plugin's website.
* {plugin_description} → short plugin description.
* {plugin_name} → full plugin name.

### Namespaces

* Find and replace `Fedek6\WpMPB\` → `{Vendor}\{PluginNamespace}\`
* Remember to edit also the composer file.