<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<!-- <?php include "header.php";?> -->
<body class="bg-color">
	<div>
	<h1 class="text-light text-center">Kanji quiz</h1>

	<div class="d-flex flex-column align-content-center flex-wrap">
<?php // Takes raw question data from the file
$json = file_get_contents('questions.json');
// Converts it into a PHP object
$data = json_decode($json);
shuffle($data);
$qs = [];
foreach ($data as $value) {
	$qs[] = new question($value[0],$value[2],$value[1]);
}
$_SESSION["data"]=serialize($qs);
$_SESSION["answers"]=[];
?>
<div class="">
	<form action="" method="post">
	<!--<input type="text" name="name" value="" placeholder="名前">-->
	 <input type="hidden" name="question" value="0">
 	 <input type="hidden" name="answers" value="">
	<button type="submit" class="btn btn-secondary">Start quiz</button>
</form>
</div>
</div>
</div>
</body>
</html>


