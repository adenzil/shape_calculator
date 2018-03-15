<?php

// To automatically load classes if required.
spl_autoload_register(function ($class_name) {
    include 'Controller/class/'.$class_name . '.php';
});


class shapeFactory{


	function __constructor(){

	}

	public static function newShape ($shape,$parameters) {
        
        if($shape == '') {
            throw new Exception('Invalid shape Type.');
        } else {
 
            if(class_exists($shape)) {
                return new $shape($parameters);
            } else {
                throw new Exception('shape type not found.');
            }
        }
    }

}


?>