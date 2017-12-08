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

MAKEFILE is still a work in progress 

```bash
# using . env.template for .env as an template

$ make dotenv DOTENV=.env.template

# OR 

$ make .env
```

## Build Image##

CD into your project folder

```bash
$ make build

# OR

$ docker build -f Dockerfile . -t wordpress-theme-dev:1.0 .
```


## Develop ##

CD into your project folder

```bash
$ make dev

# OR

$ docker-compose up
$ docker exec -it wordpressbootstrapthemestarter_wordpress_1 /bin/bash
$ cd /var/working
$ npm install
$ grunt
```