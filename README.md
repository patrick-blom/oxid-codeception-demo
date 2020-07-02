[![PHP Version](https://flat.badgen.net/packagist/php/patrick-blom/oxid-codeception-demo/?cache=300&scale=1.1)](https://github.com/patrick-blom/multi-ordermail-receiver)
[![Stable Version](https://flat.badgen.net/packagist/v/patrick-blom/oxid-codeception-demo/latest/?label=latest&cache=300&scale=1.1)](https://packagist.org/packages/patrick-blom/multi-ordermail-receiver)
[![Package Name](https://flat.badgen.net/packagist/name/patrick-blom/oxid-codeception-demo/?label=packagist&cache=300&scale=1.1)](https://packagist.org/packages/patrick-blom/multi-ordermail-receiver)
[![License](https://flat.badgen.net/packagist/license/patrick-blom/oxid-codeception-demo/?label=license&cache=300&scale=1.1)](https://github.com/patrick-blom/multi-ordermail-receiver/blob/master/LICENSE)
[![Follow me on twitter](https://flat.badgen.net/twitter/follow/pbl0m/?label=@pbl0m&cache=300&scale=1.1)](https://twitter.com/pbl0m)

OXID eShop Codeception Demo
==================

This project should explain how to write codeception acceptance tests for OXID eShop 

## Usage
These tests can be used with every OXID eShop which has activated the "Flow Theme". The project was created and tested
on OXID eShop 6.2 CE.

### Installation on Ubuntu 18.04
You will need the following things to run the tests:
  - The standalone Selenium Server - [Download](http://docs.seleniumhq.org/download/)
  - The Goolge Chrome Browser
  - The `chromium-chromedriver` for ubuntu which can be installed through `sudo apt install chromium-chromedriver` 
  - composer for the package installation

### Running tests
First you will have to run `composer install` in the root of the project. After that you have to export two variables
to define your Selenium-Server and the shop you want to test.

```bash
$ export WEBDRIVER_URL="127.0.0.1" && export WEBSITE_URL="https://my.oxid-eshop.de"
``` 

Now you have to start the Selenium-Server ip which you had downloaded before.

```bash
$ java -jar "/path/to/selenium-server-standalone-xxx.jar"
``` 

Finally you can run the codeception tests using the following command:

```bash
$ vendor/bin/codecept run  
```

### License
The project is released under GPL-3.0. For a full overview check the [LICENSE](LICENSE) file.
