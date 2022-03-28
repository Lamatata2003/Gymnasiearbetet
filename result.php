<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Quiz</title>
</head>
<body>
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
echo "<h1 class=\"text-center text-white\">You scored: $correctAnswers / 6</h1>";

?>
<form action="" method="post">
	<input type="hidden" name="question" value="0">
 	 <input type="hidden" name="answers" value="">
 	 <button type="submit" class="btn btn-secondary">Restart Quiz</button>
</form>
</div>
</body>
</html>