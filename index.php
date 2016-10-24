<?php
include('vendor/autoload.php');

$platypus = new \Platypus\Platypus;

// Playground
$platypus->add('\Resources\API\Investigators\Investigator');
$platypus->add('\Resources\API\Investigators\Investigators');

// Website
$platypus->add('\Resources\Overview\Encoding');
$platypus->add('\Resources\Overview\Home');
$platypus->add('\Resources\Overview\Performance');
$platypus->add('\Resources\Overview\URIs');
$platypus->add('\Resources\Overview\Usage');
$platypus->add('\Resources\Annotations\Lists');
$platypus->add('\Resources\Annotations\Resources');
$platypus->add('\Resources\Playground\Playground');

echo $platypus->go();
