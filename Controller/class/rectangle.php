<?php


class rectangle{
	
	function __construct($parameters){
		$this->length = $parameters['length'];
		$this->width = $parameters['width'];
	}

	public function getArea(){
		return $this->length*$this->width;
	}
	
}

?>