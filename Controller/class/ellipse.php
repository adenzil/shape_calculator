<?php


class ellipse{
	
	function __construct($parameters){
		$this->minor_radius = $parameters['minor_radius'];
		$this->major_radius = $parameters['major_radius'];
	}

	public function getArea(){
		return 3.14*$this->minor_radius*$this->major_radius;
	}
	
}

?>