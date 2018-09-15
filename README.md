# Wave PHP - Double Loop Tutorial 
This tutorial will walk through practicing the Double Loop Workflow to create a small application.

## Requirements
- [Docker Desktop](https://www.docker.com/products/docker-desktop) 
- PHP 7.2
- [Composer](https://getcomposer.org/download/)

## Setup - Do this before the conference!
- `composer install` 
- `docker-compose up -d`
- edit `hosts` file 
```
127.0.0.1   local.chirper.com
127.0.0.1   api.chirper.com
127.0.0.1   db.chirper.com
``` 
*Note:* If you're using docker-machine instead of Docker Desktop (Docker for Mac / Windows), 
use the correct IP address

- Browse to http://api.chirper.com:3001 and confirm there is a PHP info page
- Browse to http://local.chirper.com:8080 and confirm there is a HTML/JS page with a form: (non-functional)

![API PHP Info Page](https://i.imgur.com/Kwe1c8L.png)
![Chirper App](https://i.imgur.com/XynDDBt.png)

If you are unable to complete these steps before the tutorial, please message me on 
Twitter [@jessicamauerhan](https://twitter.com/JessicaMauerhan) - and we will debug, 
or we will get it working day of. 

## Run Project
- First, follow the steps in the Setup section if you haven't already.
- `docker-compose exec api vendor/bin/phinx migrate` will setup the database

### Recommended
- [Postman App](https://www.getpostman.com/)
- Chrome with the [JSON Viewer extension](https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh)
- Tell PHP Storm you're using PHP 7.2 

![PHP Storm 7.2](https://i.imgur.com/WD99azD.png)

#### Extra Resources / Info
- [JSON API](http://jsonapi.org/) - Our API will be implementing JSON API
- [UUID Generator](https://www.uuidgenerator.net/) - You may want this during testing
- [Vue](https://cli.vuejs.org/) - FYI: The frontend app is built using vuetify via vue-cli. You do not need any Vue knowledge, we will not be editing the frontend, just testing the end-to-end user experience. 

#### Documentation for Dependencies
One of the things we focus on in this workflow is decoupling dependencies. Any of these can be replaced at any time by another tool. This demo is not meant to be specific to any of these third party libraries, we simply use them to solve a common problem such as routing or validation, unrelated to the business logic code.

- [Silex](https://silex.symfony.com/) - microframework / router
- [Phinx docs](http://docs.phinx.org/en/latest/) - db migrations
- [Valitron Validator](https://github.com/vlucas/valitron) - http request validation
- [Ramsey/Collection](https://github.com/ramsey/collection) - typed collections of objects

#### Docs for Testing Tools
- [PHP Unit Docs](https://phpunit.readthedocs.io/en/7.3/) 
- [Behat](http://behat.org/en/latest/)
- [Behat Mink Extensions](https://github.com/Behat/MinkExtension/blob/master/doc/index.rst) - Mink is a browser driver
- [Guzzle Documentation](http://docs.guzzlephp.org/en/stable/) - PHP HTTP Client - used in some of our tests
- [Faker](https://github.com/fzaninotto/Faker)
