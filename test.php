<?php
// let's add error handling
ini_set('display_errors', 1); 
error_reporting(E_ALL);

// get the class 
require('Cmd.class.php');
use \Commandline\CMD;

// example
CMD::runall(
    array(
        array(
            'name'=>'testing',
            'flag'=>'t',
            'vars'=>array(
                '--firstname=',
                '--lastname='
            )
        )
    ),'web access not allowed');

/**
 * @param array $params
 * @return void
 * */
function testing($params) {
    $f = isset($params['firstname']) ? $params['firstname'] : '';
    $l = isset($params['lastname']) ? $params['lastname'] : '';
    
    die("\nHello ".$f." ".$l."!\n");
}
