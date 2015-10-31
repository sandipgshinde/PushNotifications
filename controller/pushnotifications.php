<?php
require_once("../config/constants.php");
require_once("../vendor/autoload.php");
use Devristo\Phpws\Server\WebSocketServer;

$loop = \React\EventLoop\Factory::create();

// Create a logger which writes everything to the STDOUT
$logger = new \Zend\Log\Logger();
$writer = new Zend\Log\Writer\Stream("php://output");
$logger->addWriter($writer);

// Create a WebSocket server using SSL
$server = new WebSocketServer("tcp://".PN_SOCKET_IP_ADDRESS.":".PN_SOCKET_PORT."", $loop, $logger);

//Arra with notification text, random text
$randonNotification =   array(
    'Expenses as material breeding insisted building to in.',
    'Continual so distrusts pronounce by unwilling listening.',
    'Thing do taste on we manor.',
    'Him had wound use Thing do taste on we manor.found hoped.',
    'Of distrusts immediate enjoyment curiosity do.',
    'On recommend tolerably my belonging or am.',
    'Mutual has cannot beauty indeed now sussex merely you.',
    'Remember outweigh do he desirous no cheerful.'
);

//After Specified time interval, send a notifications to connected users
$loop->addPeriodicTimer(PN_TIME_INTERVAL, function() use($server, $randonNotification){
    //Pick up random element from an array
    $rand_keys  =   array_rand($randonNotification, 1);
    $string     =   $randonNotification[$rand_keys];
    
    //Loop thrugh all connected users and send randomly selected array value
    foreach($server->getConnections() as $client){
        $client->sendString($string);
    }
});


// Bind the server
$server->bind();

// Start the event loop
$loop->run();