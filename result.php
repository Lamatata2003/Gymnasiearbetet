<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Quiz</title>
</head>
<?php include("header.php") ?>
<body class="bg-color">
	<div class="d-flex flex-column align-content-center flex-wrap">
<h1 class="text-center text-white">やった!</h1>
<?php 
$questionObject = unserialize($_SESSION['data']);

$correctAnswers = 0;

for ($i=0; $i <= 4; $i++) { 

	if ($questionObject[$i]->isCorrect($_SESSION['answers'][$i])) {
		$correctAnswers++;
		
	}
}
echo "<h1 class=\"text-center text-white\">You scored: $correctAnswers / 5</h1>";

?>
<form action="" method="post">
	<input type="hidden" name="question" value="0">
 	 <input type="hidden" name="answers" value="">
 	 <button type="submit" class="btn btn-secondary">Restart Quiz</button>
</form>
</div>
</body>
</html>