<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="lessons/introduction.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Home - Gengobu</title>

</head>
<?php include("header.php")?>
<body class="bg-color">
	<div id="demo">
		<div class="d-flex flex-row position">
			<div class="flexbox-item"></div>
				<div class="greycolor d-flex flex-column">
					<h1>Welcome to Gengobu!</h1>
					<p>This is a great place to start your language learning journey!</p>
				</div>
	            <div class="flexbox-item"></div>
				
	    </div>
	    <div class="d-flex justify-content-center position">
	    	<div class="flex-column">
		    	<div class="flexbox-item"></div>
			    	<div class="border border-2 rounded box textpadding flex-column greycolor lightergrey">
				    	<h2>Introduction</h2>
				    	<p>This is the core basics of the language and we recommend you go through this short introduction before starting anything else</p>
					    <form action="" method="post" class="d-flex align-items-end">
							<button type="submit" class="border rounded buttons introductionmargin" onclick="introduction()">
								Introduction
							</button>
						</form>
					</div>
					<div class="border border-2 rounded box textpadding flex-column greycolor lightergrey">
				    	<h2>Learn</h2>
				    	<p>Start learning the different parts of the language now with our lessons!</p>
					    <form action="japbasics.php" method="post">
							<button type="submit" class="border rounded buttons learnmargin">
								Start taking lessons
							</button>
						</form>
					</div>
					<div class="border border-2 rounded box textpadding flex-column greycolor lightergrey">
				    	<h2>Kanachart</h2>
				    	<p>Start practicing the meaning of every symbol in both Katakana and Hiragana</p>
					    <form action="kanachart.php" method="post">
							<button type="submit" class="border rounded buttons kanachartmargin">
								Start memorizing the charts
							</button>
						</form>
					</div>
					<div class="border border-2 rounded box textpadding flex-column greycolor lightergrey">
				    	<h2>Test</h2>
				    	<p>Already think that you have what it got? try by testing your knowledge now!</p>
					    <form action="quiz-index.php" method="post">
							<button type="submit" class="border rounded buttons testmargin">
								Start testing your skills!
							</button>
						</form>
					</div>
				<div class="flexbox-item"></div>
			</div>
		</div>
	</div>
</body>
 <footer> <?php include("footer.php")?> </footer>
</html>
<style type="text/css">
	.flexbox-item {
		width: 30px;
	}

	.position {
		margin-top:16px;
		justify-content: center;
	}
	.textpadding {
		padding: 4px 16px 16px 16px;
	}
	.box {
		width: 600px;
		height: 185px;
		margin-bottom: 45px;
	}
	.buttons {
		font-weight: 500;
		height: 32px;
		width: 100%;
		display: flex;
		justify-content: center;
	}
	.introductionmargin {
		margin-top: 21px;
	}
	.learnmargin {
		margin-top: 60px;
	}
	.kanachartmargin {
		margin-top: 61px;
	}
	.testmargin {
		margin-top: 61px;
	}

	@media only screen and (max-width: 600px) {
		.box {
		width: 320px;
		height: 200px;
		margin-bottom: 45px;

	}
		.introductionmargin {
			margin-top: -3px;

		}
}

</style>