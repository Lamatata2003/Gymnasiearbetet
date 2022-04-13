<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="htmlblocks.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Quiz - Gengobu</title>
</head>
<?php include("header.php")?>

<body class="bg-color">
<div class="d-flex justify-content-center">
	<h1 class="greycolor margintop">Lessons</h1>
</div>
	<div class="d-flex flex-row justify-content-center margintop">
		<div class="flexbox-item"></div>
			<div class="d-flex flex-column" id="demo">
				<div class="flexrow">
					<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Introduction
							</div>
							<div class="greycolor desctext">
								Introduction to Japanese.
							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">

								<button type="button" class="border rounded buttons" onclick="introduction()">
									Introduction
								</button>
						</div>
					</div>
					<div class="flexbox-item"></div>
					<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Grammar
							</div>
							<div class="greycolor desctext">
								Learn about some of the fundamentals of grammar.
							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									How to use です
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									The は particle
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									How to make questions
								</button>
							</form>
						</div>
					</div>
				</div>

			<div class="flexrow">	
				<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Verbs
							</div>
							<div class="greycolor desctext">
								Learn about verbs.

							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Basic verbs
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Negative conjugations
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Past tense
								</button>
							</form>
						</div>
				</div>
				<div class="flexbox-item"></div>
				<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Adjectives
							</div>
							<div class="greycolor desctext">
								Learn about adjectives.

							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Basic adjectives
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Negative conjugations
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									
								</button>
							</form>
						</div>
				</div>
			</div>
			</div>
	<div class="flexbox-item"></div>
</div>
<footer> 
<?php include("footer.php")?> 
</footer>
<style type="text/css">
	.flexrow {
		display: flex;
		flex-direction: column;
	}

	.flexbox-item {
		width: 30px;
	}

	.box {
		width: 300px;
	}

	.desctext {
		font-weight: 450;
		width: 280px;
	}
	.fontsize {
		font-size: 28px;
		font-weight: 500;
	}

	.textpadding {
		padding: 4px 16px 16px 16px;
	}

	.buttons {
		margin: 8px 0px 0px 0px;
		font-weight: 500;
		height: 32px;
		width: 100%;
	}

	@media only screen and (min-width: 600px) {
		.box {
			width: 500px;
		}

		.buttons {
			height: 38px;
		}

		.desctext {
		width: 500px;
	}
  }

  @media only screen and (min-width: 1650px) {
		.box {
			width: 800px;
			display: flex;
		}
		.buttons {
			width: 230px;
			text-align: left;
			padding-left: 10px;
			height: 50px;
		}

		.fontsize {
			font-size: 36px;
		}

		.desctext {
			font-size: 20px;
			width: 530px;
		}

		.flexrow {
		flex-direction: row !important;
	}
  }

  .marginbottom {
  	margin-bottom: 32px;
  }
</style>
</body>
</html>