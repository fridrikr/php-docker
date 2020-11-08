# simple-php-app
A Docker image that copies source code from the src/ directory and starts apache.
## Preconditions
The source code for the app that we want to expose with apache is in a src folder next to the Dockerfile.

## Build & Run
```docker build -t simple-php-app .```

```docker run -d -p 8080:80 simple-php-app```

## Postconditions
The php app is accessible on localhost:8080