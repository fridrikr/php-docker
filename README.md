# Purpose
To collect Dockerfiles that show best practices and learn about working with php in Docker.

# Preconditions
Docker installed on your machine.

# Technical Decisions
## Base images
As base image I have opted to use FROM php:7.4-apache and php:7.4-cli. IF size will become an issue I might consider building my own custom php image, taking a similar approach as here: https://medium.com/@jeromegamez/build-your-own-php-docker-image-3c55c9e29b59

# images
[simple-php-app](examples/simple-php/README.md)
[rabbitmq-consume-php](examples/rabbitmq-consume-php/README.md)
[mysql-php](examples/mysql-php/README.md)
