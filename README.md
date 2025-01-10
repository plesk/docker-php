Docker PHP
==========

**Docker PHP** (for lack of a better name) is a [Docker](http://docker.com/) client written in PHP.
This library aim to reach 100% API support of the Docker Engine.

The test suite currently passes against the [Docker Remote API v1.24](http://docs.docker.com/reference/api/docker_remote_api_v1.24/).

[![Documentation Status](https://readthedocs.org/projects/docker-php/badge/?version=latest)](http://docker-php.readthedocs.org/en/latest/)
[![Latest Version](https://img.shields.io/github/release/plesk/docker-php.svg?style=flat-square)](https://github.com/plesk/docker-php/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://app.travis-ci.com/plesk/docker-php.svg?token=8vzx95oWUi659HxdEazn&branch=master)](https://app.travis-ci.com/plesk/docker-php)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/plesk/docker-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/plesk/docker-php)
[![Quality Score](https://img.shields.io/scrutinizer/g/plesk/docker-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/plesk/docker-php)
[![Total Downloads](https://img.shields.io/packagist/dt/plesk/docker-php.svg?style=flat-square)](https://packagist.org/packages/plesk/docker-php)



Installation
------------

The recommended way to install Docker PHP is of course to use [Composer](http://getcomposer.org/):

```bash
composer require plesk/docker-php
```

Usage
-----

See [the documentation](http://docker-php.readthedocs.org/en/latest/).

Unit Tests
----------

Setup the test suite using [Composer](http://getcomposer.org/) if not already done:

```
$ composer install --dev
```

Run it using [PHPUnit](http://phpunit.de/):

```
$ composer test
```

### Running Tests with `docker-compose`

```
$ docker-compose run php54
$ docker-compose run php55
$ docker-compose run php56
$ docker-compose run php70
```

It is recommended to run only one service during testing, since `composer` requirements may depend on the PHP version and
we are using a host-volume during local testing.

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


Versioning
----------

Docker PHP does not follow the classic [semver versioning](http://semver.org/), but follow the Docker Remote API
versioning starting at the v1.21, the master branch will follow the next major release on the Docker Remote API.

Changes on the core of this library not related to the API, will be merged back to previous versions
on a best effort basis.

Credits
-------

This README heavily inspired by [willdurand/Negotiation](https://github.com/willdurand/Negotiation) by @willdurand. This guy is pretty awesome.

Change of jane/open-api dependency
----------------------------------

Previous version of **Docker PHP**  library had **"jane/open-api": "^1.3"**  composer dependency. This project is deprecated and archived.
Authors suggest to use https://github.com/janephp/janephp but we used a few classes only so we rewrote them in this library (src/custom). 
If some issues happen we should consider to use recommended library and rewrite this library in appropriate way which could be tricky task since code is completely different

License
-------

The MIT License (MIT). Please see [License File](LICENSE) for more information.
