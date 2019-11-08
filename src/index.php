<?php

echo"<h1>Welcome to php-docker!</h1>";

try {

    $mng = new MongoDB\Driver\Manager("mongodb://mongodb:27017");
    var_dump($mng);

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}