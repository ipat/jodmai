<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';


$server = new Hoa\Websocket\Server(
    new Hoa\Socket\Server('tcp://' . env('HOME_IP', '127.0.0.1'))
);

//Manages the message event to get send data for each client using the broadcast method
$server->on('message', function ( Hoa\Core\Event\Bucket $bucket ) {
    $data = $bucket->getData();
    echo 'message: ', $data['message'], "\n";
    $bucket->getSource()->broadcast($data['message']);
    return;
});
//Execute the server
$server->run();
