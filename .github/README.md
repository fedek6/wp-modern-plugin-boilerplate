![logo](https://realhe.ro/img/logo.svg "Realhe.ro")

# WP Modern Plugin Boilerplate 

A standardized, well organized, modern, object-oriented foundation for building high-quality WordPress Plugins (based on [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate)). It supports modern JavaScript workflow and automated assets building out-of-box.

This boilerplate breaks dumb [WordPress Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/) and instead of it fully utilizes the [PSR](https://www.php-fig.org/psr/).

It is the simplest solution for modern JS / PHP workflow!

## What's built in?

* Composer.
* PHPUnit.
* TypeScript.
* Sass.
* ESLint.
* Prettier.
* Grunt.

## Usage

Main idea behind this boilerplate is to keep potential code changes as much we can inside the main plugin file (`wp-modern-plugin-boilerplate.php`).

### How to add a new functionality?

Simply create a new class in `plugin\Components` (or your own namespace) and register it in main plugin file:

```php
$plugin = new \Fedek6\WpMPB\Bootstrap($pluginName, $assetsUrl, __DIR__, '1.0.0');
$plugin->registerComponent(
    'frontendAssets'
    '\Fedek6\WpMPB\Components\FrontendAssets'
);
```

Please check provided components for code examples.

## Customization

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

## Installation & assets building

Run `composer update` to install PHP dependencies.

Edit assets in `src` directory. And run following commands:

* Please install node dependencies using `yarn install`.
* Use `yarn assets` to build assets.

## Other tools

* Use `yarn format` to run prettier on JS source files.
* Use `yarn lint` for ESLint.
* Use `composer test` for PHPUnit.
