#!/usr/bin/env php
<?php
// This contains first argument
fwrite(STDOUT, 'starting work');
$message = $argv[1];
// Decode to get original value
$original = base64_decode($message);
fwrite(STDOUT, $original);

// Start processing
// if (do_heavy_lifting($original)) {
//     // All well, then return 0
     exit(0);
// }

// Let rabbitmq-cli-consumer know someting went wrong, message will be requeued.
//exit(1);
