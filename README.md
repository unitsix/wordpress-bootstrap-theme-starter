# wordpress-bootstrap-theme-starter

Starting place for develoing a Bootstrap based Wordpress theme. Contains Dockerfile with NodeJS and Grunt for linting.

## Prerequisites ##

- Docker
- Docker Compose

### Optional ###

- Make

## Environment variables ##

Not yet used

Make sure you have set your environment variables properly or create a file `.env`. The file `.env.template` contains the environment variables that are used by the application.

## Make Usage ##

Starting place for develoing a Bootstrap based Wordpress theme. Contains Dockerfile with NodeJS and Grunt for linting.

## Develop

CD into your project folder

```bash
$ docker-compose up
$ docker exec -it wordpressbootstrapthemestarter_npm_1 /bin/bash
$ npm install #only required on first run
$ grunt
```

## Wordpress

On first run or if containers are reset/removed, you will need to step throough the install wizard at localhost:8080 and set the theme to 'Bootstrap 4'