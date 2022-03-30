<?php
session_start();
?>	

<!doctype html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
<meta charset="utf-8">
<title>Quiz - Gengobu</title>
</head>
<?php include("header.php") ?>
<body class="bg-color">
	<div class="d-flex justify-content-center">
<?php
require("question.php");
require("nav.php");
?>
</div>
</body>
<footer> <?php include("footer.php")?> </footer>
</html>