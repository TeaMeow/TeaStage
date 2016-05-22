<?php
namespace Controller\Example;
use Model\Example\Main as Model;




/**
 * The example controller.
 */
 
class Main
{
    /**
     * CONSTRUCT
     */
     
    function __construct()
    {
        $this->model = new Model();
    }
    
    
    
    
    /**
     * Get the current time.
     * 
     * @return int   Time in unix timestamp.
     */
     
    function getTime()
    {
        return date('Y-m-d H:i:s', $this->model->getTime());
    }
}
?>