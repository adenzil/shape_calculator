<?php


class circle implements shapeInterface{
	
	function __construct($parameters){
		$this->diameter = $parameters['diameter'];
	}

	public function getArea(){
		return 3.14*$this->diameter*$this->diameter;
	}
	
}

?>