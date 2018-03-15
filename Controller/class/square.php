<?php


class square implements shapeInterface{
	
	function __construct($parameters){
		$this->side = $parameters['side'];
	}

	public function getArea(){
		return $this->side*$this->side;
	}
	
}

?>