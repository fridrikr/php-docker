# rabbitmq-php
A docker image connects to a rabbitmq and executes a php file
on all new messages from it. 
Connecting to rabbitmq via php is hard and cumbersome.
https://medium.com/@sergey.kolodyazhnyy/consuming-amqp-messages-in-php-6650c06936fa

https://github.com/corvus-ch/rabbitmq-cli-consumer

## Preconditions
A running rabbitmq instance that you can connect to. If you don't have one you can start one with docker.

A queue named 'data-queue' that you can post to. (if you choose to run rabbitmq locally from a Docker container, you can browse to it on localhost:15672 and login using guest/guest as username and password)

## Run a local Docker container for rabbitmq
```docker run -p 15672:15672 -p 5671:5671 -p 5672:5672 -p 15671:15671 -p 25672:25672 -d --hostname my-rabbit --name some-rabbit rabbitmq:3-management```


## Build & Run
```docker build -t rabbitmq-receive-php .```

```docker run -it  rabbitmq-receive-php  --verbose --url amqp://guest:guest@192.168.1.38:5672 --queue-name=data-queue --executable '/usr/src/app/index.php'```


## Postconditions
A running docker container the listens to the message queue. 
