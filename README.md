A collection of docker images that all are in one way or another related to php.

# Purpose
To collect Dockerfiles that show best practices and learn about working with php in Docker.

# Preconditions
docker installed on your machine.

# Decisions
As base image I have opted to use FROM php:7.2-apache. IF size will become an issue I might consider building my own custom php image, taking a similar approach as here: https://medium.com/@jeromegamez/build-your-own-php-docker-image-3c55c9e29b59

# images
[simple-php-app](examples/simple-php/README.md)

[mysql-php](examples/mysql-php/README.md)
