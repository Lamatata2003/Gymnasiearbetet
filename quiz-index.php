<?php
session_start();
?>	

<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
<title>Frågesport</title>
</head>
<body class="bg-color">
	<div class="d-flex justify-content-center">
<?php
require("question.php");
require("nav.php");
?>
</div>
</body>
</html>