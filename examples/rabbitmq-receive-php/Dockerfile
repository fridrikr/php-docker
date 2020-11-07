FROM php:7.4-cli

RUN curl -OL https://github.com/corvus-ch/rabbitmq-cli-consumer/releases/download/2.3.3/rabbitmq-cli-consumer_2.3.3_linux_amd64.tar.gz
RUN tar -xzvf rabbitmq-cli-consumer_2.3.3_linux_amd64.tar.gz
COPY src/ /usr/src/app
RUN chmod -R 777 /usr/src/app
ENTRYPOINT ["./rabbitmq-cli-consumer"]