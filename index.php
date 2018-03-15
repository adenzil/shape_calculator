<!DOCTYPE html>
<html>
<head>
	<title>Shape calculator</title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<?php
	session_start();

	// Factory to dynamically create class to calcuclate area.
	require_once 'Controller/shapeFactory.php';

	require_once 'View/header.html';

	// All types of shapes accepted and their values.
	function shapes(){
		return array('rectangle'=>array('width','length'),'circle'=>array('diameter'),'square'=>array('side'),'ellipse'=>array('major_radius','minor_radius'));
	}
?>
<div class="container" id="mainBody">
	<div class="row">
		<?php 
			
			require_once 'View/left_description.html';

			// If user had already chosen shape and/or values, redirect him to correct page.
			if(empty($_SESSION['choice']) && empty($_SESSION['answer_values']))
				require_once 'View/page/page1.html'; 
			else if(isset($_SESSION['choice']) && empty($_SESSION['answer_values']))
				require_once 'View/page/page2.html'; 
			else{
				// create object of chosen shape and values from session
				$shape = shapeFactory::newShape($_SESSION['choice'],$_SESSION['answer_values']);
				$_SESSION['area'] = $shape->getArea();
				require_once 'View/page/page3.html';
			}

		?>

	</div>
</div>

</body>
</html>