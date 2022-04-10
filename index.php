<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/evilduolingo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Home - Gengobu</title>

</head>
<?php include("header.php")?>
<body class="bg-color">
	<div class="d-flex flex-row">
		<div class="flexbox-item"></div>
			<div class="position greycolor d-flex flex-column">
				<h2>Welcome to Gengobu!</h2>
				<p>This is a great place to start your language learning journey.</p>
			</div>
            <div class="flexbox-item"></div>
			
    </div>
    <div class="d-flex justify-content-center flex-column ">
    <form action="" method="post">
		<input type="hidden" name="question">
		<input type="hidden" name="answers" value="">
		<button type="submit" class="border rounded buttons">
			Learn
		</button>
	</form>
</div>
</body>
 <footer> <?php include("footer.php")?> </footer>
</html>
<style type="text/css">
	.flexbox-item {
		width: 30px;
	}

	.position {
		margin-top:10px;
		justify-content: center;
	}

</style>