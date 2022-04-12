<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Quiz - Gengobu</title>
</head>
<?php include("header.php") ?>
<body class="bg-color">
		<?php // Takes raw question data from the file

if (isset($_POST['selectQuiz'])) {
$json = file_get_contents('quizes/'.$_POST['selectQuiz'].'.json');
// Converts it into a PHP object
$data = json_decode($json);
shuffle($data);
$qs = [];
foreach ($data as $value) {
	$qs[] = new question($value[0],$value[1]);
}
$_SESSION["data"]=serialize($qs);
}


?>


		<div class="d-flex justify-content-center align-items-center">
		<form action="" method="post">
 <input type="hidden" name="question" value="0">
 <input type="hidden" name="answers" value="">
 <button type="submit" class="border rounded startbutton">Start Quiz</button>
</form>
</div>
</body>
</html>
<style type="text/css">
	.startbutton {
		width: 200px;
		height: 100px;
	}
</style>