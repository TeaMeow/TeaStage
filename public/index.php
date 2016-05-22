<?php
include '../application/bootstrap.php';

use \Controller\Example\Main as Example;



/**
 * /public/
 * 
 * The main index.
 */
 
$Davai->get('/public/', function() use ($Avane)
{
    $Example = new Example();
    
    $Avane->single('example', ['now' => $Example->getTime()]);
});
?>