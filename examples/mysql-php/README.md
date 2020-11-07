
# mysql
A docker image that connects to a running instance of a mysql database.
## Preconditions
A running mysql instance that you can connect and you have a username and password for it. If you don't have one you can start one with docker.

## Run a local Docker container for mysql
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

#### Build & Run
```docker build -t mysql-php-app .```
```docker run -e host=[IP_ADDRESS_OF_MACHINE] -e port=3306 -e username=root -e password=[PASSWORD] -d -p 8081:80 mysql-php-app```

Where:
*IP_ADDRESS_OF_MACHINE* is the IP address of your machine (the host machine running Docker).
*PASSWORD* is the password for the root user to log in to the database.

## Postconditions
The php app that is able to read from a mysql database is accessible on localhost:8081