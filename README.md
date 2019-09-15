# WordPress

**This is a WordPress project managed via Composer**

This project serves as an example, and a baseline for Composer managed WordPress projects.

It's built using [John P. Bloch's composer-ized WordPress mirror](https://github.com/johnpbloch/wordpress-core) for the core; [WordPress Packagist](https://wpackagist.org/) for registered WordPress plugins, and themes; and [oomphinc/composer-installers-extender]() package for custom installation path support.

Besides the WordPress core, following also added as minimalist examples:

* [Classic Editor](https://wordpress.org/plugins/classic-editor/) plugin.
* [cweagans/composer-patches](https://packagist.org/packages/cweagans/composer-patches) to apply patches via Composer.
* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer), and [WordPress coding standards](https://github.com/WordPress/WordPress-Coding-Standards).

## Installation
```sh
composer create-project gormus/wordpress your_folder
```

## PHP_CodeSniffer
The first time this project is installed, [WordPress coding standards](https://github.com/WordPress/WordPress-Coding-Standards#rulesets) are installed as well. They can also be installed via following command:
`composer run-script install-codestandards`

Try running `./vendor/bin/phpcs -i` to list all installed standards; following should be listed in the output:
_WordPress_, _WordPress-Extra_, _WordPress-Docs_ and _WordPress-Core_.

The installed code sniffer, and standards can be used either via Composer, in shell scripts, or even in your favorite IDE. Here are a few examples:

**Run PHP_CodeSniffer in current directory using _WordPress_ standard:**

`composer run phpcs .`

**Fix _wp-config.local.php_ file using _WordPress_ standard:**

`composer run phpcbf wp-config.local.php`

**Configure Visual Studio Code and [phpcs](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs) plugin to use _WordPress_ standard**

```settings.json
{
    "phpcs.standard": "./vendor/wp-coding-standards/wpcs/WordPress/ruleset.xml"
}
```
