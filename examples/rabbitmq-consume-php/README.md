# rabbitmq-php
A Docker image connects to a RabbitMQ and executes a php file
on all new messages from it. 
After reading a bit on the topic it seems that consuming a RabbitMQ in php is not that easy and also a bit unreliable. Therefor I opted to consume the MQ using a excutable written in Go that has the capability to execute php scripts when it consumes a message.

https://medium.com/@sergey.kolodyazhnyy/consuming-amqp-messages-in-php-6650c06936fa
https://github.com/corvus-ch/rabbitmq-cli-consumer

## Preconditions
A running RabbitMQ instance that you can connect to. If you don't have one you can start one with Docker.

A queue named 'data-queue' that you can post to. (if you choose to run RabbitMQ locally from a Docker container, you can browse to it on localhost:15672 and login using guest/guest as username and password)

## Run a local Docker container for RabbitMQ
```docker run -p 15672:15672 -p 5671:5671 -p 5672:5672 -p 15671:15671 -p 25672:25672 -d --hostname my-rabbit --name some-rabbit rabbitmq:3-management```


## Build & Run
```docker build -t rabbitmq-receive-php .```

```docker run -it  rabbitmq-receive-php  --verbose --url amqp://guest:guest@192.168.1.38:5672 --queue-name=data-queue --executable '/usr/src/app/index.php'```


## Postconditions
A running Docker container the listens to the message queue and runs a php script for each message it consumes.
