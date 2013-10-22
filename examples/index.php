<?php

  // Load the Framework  
  require '../flight/Flight.php';  
try
{   
    // set a default route
    Flight::route('/', function(){
        echo 'hello world!';
    });
    
    // set a default route
    Flight::route('/@name', function($name){
        echo 'hello: '.$name;
    });
    
    // start the Framework
    Flight::start();

}
catch (\Exception $e)
{
   die($e->getMessage());
}