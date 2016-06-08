# Honeylex

A cqrs plus es (cms) app boilerplate for php based on the integration of the [Honeybee][Honeybee] lib with the [silex][Documentation] framework.

## Development

### Setup

#### Prerequisites

In order to get the honeylex up and running you'll need to make sure you, that your machine meets the following requirements:

* [Composer][Composer]
* php >= 5.6.1
* elasticsearch 2.x
* couchdb 1.6.x

#### Install:

* Run: ```git clone git@github.com:shrink0r/honeylex.git```
* Create a directory: ```/usr/local/honeylex.local/```
* In the latter directory create a file named ```rabbitmq.json``` with the following contents: ```{ "user":"username", "password":"secret", "host": "localhost", "port": 5672 }```
* Run: ```composer install```
* Run: ```bin/console hlx:migrate:up```
* Run: ```composer run```, this will start a local webserver that hosts the app [here](http://localhost:8888/)

### Registered silex service providers

The bootstrapped Silex app is configured with the following service providers:

* [AssetServiceProvider][AssetServiceProvider]
* [FormServiceProvider][FormServiceProvider]
* [MonologServiceProvider][MonologServiceProvider]
* [ServiceControllerServiceProvider][ServiceControllerServiceProvider]
* [TranslationServiceProvider][TranslationServiceProvider]
* [TwigServiceProvider][TwigServiceProvider]
* [UrlGeneratorServiceProvider][UrlGeneratorServiceProvider]
* [ValidatorServiceProvider][ValidatorServiceProvider]
* [WebProfilerServiceProvider][WebProfilerServiceProvider]

Read the [Providers][Providers] documentation for more details about Silex Service Providers.

[AssetServiceProvider]: http://silex.sensiolabs.org/doc/providers/asset.html
[Composer]: http://getcomposer.org/
[Documentation]: http://silex.sensiolabs.org/documentation
[FormServiceProvider]: http://silex.sensiolabs.org/doc/providers/form.html
[ServiceControllerServiceProvider]: http://silex.sensiolabs.org/doc/providers/service_controller.html
[TranslationServiceProvider]: http://silex.sensiolabs.org/doc/providers/translation.html
[TwigServiceProvider]: http://silex.sensiolabs.org/doc/providers/twig.html
[UrlGeneratorServiceProvider]: http://silex.sensiolabs.org/doc/providers/url_generator.html
[ValidatorServiceProvider]: http://silex.sensiolabs.org/doc/providers/validator.html
[WebProfilerServiceProvider]: http://github.com/silexphp/Silex-WebProfiler
[MonologServiceProvider]: http://silex.sensiolabs.org/doc/providers/monolog.html
[Providers]: http://silex.sensiolabs.org/doc/providers.html
[Honeybee]: http://github.com/honeybee/honeybee