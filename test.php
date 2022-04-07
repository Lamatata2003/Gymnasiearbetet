<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script src="javascript.js"></script>
    <script type="text/javascript" src="jquery-3.6.0.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php include("header.php")?>
<body class="bg-color">
	<div class="d-flex justify-content-center">
	<h1 class="greycolor margintop">Test your knowledge</h1>
	</div>
	<div class="d-flex flex-row justify-content-center margintop">
		<div class="flexbox-item"></div>
			<div class="flex-column ">
				<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
					<div class="flex-column">
						<div class="greycolor fontsize">
							Hiragana
						</div>
						<div class="greycolor desctext">
							Test your knowledge of Hiragana. Hiragana is a necessity and is the first thing you should learn in Japanese.
						</div>
					</div>
					<div class="d-flex justify-content-center flex-column rightbuttons">
						<button class="border rounded buttons">
							Hiragana 1
						</button>
						<button class="border rounded buttons">
							Hiragana 2
						</button>
						<button class="border rounded buttons">
							Hiragana 3
						</button>
					</div>
			</div>

			<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
					<div class="flex-column">
						<div class="greycolor fontsize">
							Katakana
						</div>
						<div class="greycolor desctext">
							Test your knowledge of Katakana.
						</div>
					</div>
					<div class="d-flex justify-content-center flex-column rightbuttons">
						<button class="border rounded buttons">
							Katakana 1
						</button>
						<button class="border rounded buttons">
							Katakana 2
						</button>
						<button class="border rounded buttons">
							Katakana 3
						</button>
					</div>
			</div>

			<div class="border border-2 rounded box textpadding lightergrey flex-row justify-content-between marginbottom">
					<div class="flex-column">
						<div class="greycolor fontsize">
							Grammar
						</div>
						<div class="greycolor desctext">

						</div>
					</div>
					<div class="d-flex justify-content-center flex-column rightbuttons">
						<button class="border rounded buttons">
							Grammar 1
						</button>
						<button class="border rounded buttons">
							Grammar 2
						</button>
						<button class="border rounded buttons">
							Grammar 3
						</button>
					</div>
			</div>
		</div>
	<div class="flexbox-item"></div>
</div>

</body>
</html>
<style type="text/css">
	.flexbox-item {
		width: 30px;
	}

	.box {
		width: 300px;
	}

	.desctext {
		font-weight: 500;
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
	}

	@media only screen and (min-width: 600px) {
		.box {
			width: 500px;
		}

		.buttons {
			height: 38px;
		}

  }

  @media only screen and (min-width: 900px) {
		.box {
			width: 800px;
			display: flex;
		}
		.buttons {
			width: 400px;
			text-align: left;
			padding-left: 10px;
			height: 50px;
		}

		.fontsize {
			font-size: 36px;
		}

		.desctext {
			font-size: 20px;
		}


  }

  .marginbottom {
  	margin-bottom: 32px;
  }
</style>