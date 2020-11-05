A collection of docker images that all are in one way or another related to php.

## Purpose
To collect Dockerfiles that show best practices and learn about working with php in Docker.

## Preconditions
docker installed on your machine.

## Decisions
As base image I have opted to use FROM php:7.2-apache. IF size will become an issue I might consider building my own custom php image, taking a similar approach as here: https://medium.com/@jeromegamez/build-your-own-php-docker-image-3c55c9e29b59

## images
### simple-php-app
A docker image that copies source code from the src/ directory and starts apache.
#### Preconditions
The source code for the app that we want to expose with apache is in a src folder next to the Dockerfile.

```docker build -t simple-php-app .```

```docker run -d -p 8080:80 simple-php-app```

#### Postconditions
The php app is accessible on localhost:8080

### mysql
A docker image that connects to a running instance of a mysql database.
#### Preconditions
A running mysql instance that you can connect to. If you don't have one you can start one with docker.
##### Running mysql in docker
```docker run --name=mysql1 -e MYSQL_ROOT_HOST=% -p 3306:3306 -d mysql/mysql-server```

This will start a docker container running mysql. To finish the setup you need to reset the onetime password generated for the root user. 
To view the one time password: 
```docker logs mysql1 2>&1 | grep GENERATED```

Next, login to the container:
```docker exec -it [container ID] /bin/bash```
Open a mysql terminal (entering the):
```mysql -u root -p```
Run the following command to change the password (replacing PASSWORD with a password of your choice):
```UPDATE mysql.user SET Password=PASSWORD('NEW_PASSWORD') WHERE User='root'```

#### Example
```docker build -t mysql-php-app .```
```docker run -e host=[IP_ADDRESS_OF_MACHINE] -e port=3306 -e username=root -e password=[PASSWORD] -d -p 8081:80 mysql-php-app```

Where:
*IP_ADDRESS_OF_MACHINE* is the IP address of your machine (the host machine running Docker).
*PASSWORD* is the password for the root user to log in to the database.
### rabbitmq
### summary
### Todos
Solve "Could not connect to the database mysql :could not find driver"
Add example of how to use environmental variables with Docker.
Break up readme into seperate files
