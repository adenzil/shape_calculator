<?php


class circle{
	
	function __construct($parameters){
		$this->diameter = $parameters['diameter'];
	}

	public function getArea(){
		return 3.14*$this->diameter*$this->diameter;
	}
	
}

?>