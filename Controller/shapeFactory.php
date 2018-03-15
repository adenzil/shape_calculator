<?php

spl_autoload_register(function ($class_name) {
    include 'Controller/class/'.$class_name . '.php';
});

	error_reporting(E_ERROR);



class shapeFactory{


	function __constructor(){

	}


	public static function newShape ($shape,$parameters) {
        
        if($shape == '') {
            throw new Exception('Invalid shape Type.');
        } else {
 
            // Assuming Class files are already loaded using autoload concept
            if(class_exists($shape)) {
                return new $shape($parameters);
            } else {
                throw new Exception('shape type not found.');
            }
        }
    }

}


?>