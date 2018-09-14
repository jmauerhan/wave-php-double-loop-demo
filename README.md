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

If you are unable to complete these steps before the tutorial, please message me on 
Twitter [@jessicamauerhan](https://twitter.com/JessicaMauerhan) - and we will debug, 
or we will get it working day of. 

## Run Project
- First, follow the steps in the Setup section if you haven't already.
- `docker-compose exec api vendor/bin/phinx migrate` will setup the database

### Recommended
- [Postman App](https://www.getpostman.com/)
- Chrome with the [JSON Viewer extension](https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh)
- Tell PHP Storm you're using PHP 7.2 ![PHP Storm 7.2](https://i.imgur.com/WD99azD.png)

#### Extra Resources / Info
- [JSON API](http://jsonapi.org/) - Our API will be implementing JSON API
- [UUID Generator](https://www.uuidgenerator.net/) - You may want this during testing
