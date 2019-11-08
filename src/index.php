<?php

try {

    $mng = new MongoDB\Driver\Manager("mongodb://mongodb:27017");
    $query = new MongoDB\Driver\Query([]); 
     
    $rows = $mng->executeQuery("init.init", $query);
    
    foreach ($rows as $row) {
    
        echo "$row->name $row->lastname\n";
    }

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}