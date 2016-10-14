# Ride: Application Setup

Installer hook to setup the Ride framework through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _application/config_ exists
* make sure _application/data/log_ exists
* copy _vendor/ride/app/src/parameters.php_ to _application/config/parameters.php_

## Related Modules

- [ride/app](https://github.com/all-ride/ride-app)
- [ride/setup](https://github.com/all-ride/ride-setup-app)
- [ride/setup-base](https://github.com/all-ride/ride-setup-base)
- [ride/setup-cli](https://github.com/all-ride/ride-setup-cli)
- [ride/setup-cms](https://github.com/all-ride/ride-setup-cms)
- [ride/setup-web](https://github.com/all-ride/ride-setup-web)

## Installation

You can use [Composer](http://getcomposer.org) to install this application.

```
composer require ride/setup-app
```
