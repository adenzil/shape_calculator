<?php

session_start();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$validate = array('reset','square','circle','ellipse','rectangle');

if(isset($_GET['choice']) && in_array($_GET['choice'], $validate)){
	
	if ($_GET['choice'] == 'reset') {
		unset($_SESSION['area']);
		unset($_SESSION['choice']);
		unset($_SESSION['answer_values']);
	}else
		$_SESSION['choice'] = $_GET['choice'];

	echo json_encode(array('status'=>'successful'));

}else if(isset($_POST['answer_values'])){
	$_SESSION['answer_values'] = $_POST['answer_values'];
	echo json_encode(array('status'=>'successful'));
}

?>