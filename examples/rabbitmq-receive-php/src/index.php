#!/usr/bin/env php
<?php
// This contains first argument
$message = $argv[1];
// Decode to get original value
$original = base64_decode($message);
echo $original;
// Start processing
// if (do_heavy_lifting($original)) {
//     // All well, then return 0
     exit(0);
// }

// Let rabbitmq-cli-consumer know someting went wrong, message will be requeued.
//exit(1);
