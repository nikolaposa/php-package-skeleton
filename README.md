# :package_name

[![Build Status][ico-build]][link-build]
[![Code Quality][ico-code-quality]][link-code-quality]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Latest Version][ico-version]][link-packagist]
[![PDS Skeleton][ico-pds]][link-pds]

**Setup:** 

1. `$ git clone --depth=1 https://github.com/nikolaposa/php-package-skeleton my-library`
1. `$ cd my-library`
1. `$ rm -rf .git`
1. Replace ```:author_name``` ```:author_username``` ```:author_email``` ```:author_website``` ```:vendor``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE](LICENSE), [composer.json](composer.json) and [phpunit.xml.dist](phpunit.xml.dist) files either manually or by running `$ php prefill.php` in the command line.
1. `$ composer install`
1. Delete this paragraph and prefill.php.

This is where your library description should be.

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following command to install the latest version of a package and add it to your project's `composer.json`:

```bash
composer require :vendor/:package_name
```

## Usage

``` php
$example = new PackageSkeleton\Example();
echo $example->say('Hello');
```

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

Released under MIT License - see the [License File](LICENSE) for details.


[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg
[ico-build]: https://travis-ci.org/:vendor/:package_name.svg?branch=master
[ico-code-coverage]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg
[ico-pds]: https://img.shields.io/badge/pds-skeleton-blue.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-build]: https://travis-ci.org/:vendor/:package_name
[link-code-coverage]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-pds]: https://github.com/php-pds/skeleton
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
