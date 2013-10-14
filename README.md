# Pallo: Application Setup

Installer hook to setup the Pallo framework through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _application/log_ exists
* make sure _application/config_ exists
* copy _vendor/pallo/app/src/parameters.php_ to _application/config/parameters.php_