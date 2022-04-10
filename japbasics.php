<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
			<div class="d-flex flex-column">
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
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 1
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 2
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 3
								</button>
							</form>
						</div>
					</div>
					<div class="flexbox-item"></div>
					<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Hiragana
							</div>
							<div class="greycolor desctext">
								Learn about Hiragana.
							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 1
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 2
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 3
								</button>
							</form>
						</div>
					</div>
				</div>

			<div class="flexrow">	
				<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Katakana
							</div>
							<div class="greycolor desctext">
								Learn about Katakana.

							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 1
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 2
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 3
								</button>
							</form>
						</div>
				</div>
				<div class="flexbox-item"></div>
				<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
						<div class="flex-column">
							<div class="greycolor fontsize">
								Grammar
							</div>
							<div class="greycolor desctext">
								Learn about grammar.

							</div>
						</div>
						<div class="d-flex justify-content-center flex-column ">
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 1
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 2
								</button>
							</form>
							<form action="" method="post">
								<button type="submit" class="border rounded buttons">
									Lesson 3
								</button>
							</form>
						</div>
				</div>
			</div>
			</div>
	<div class="flexbox-item"></div>
</div>

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
		width: 300px;
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