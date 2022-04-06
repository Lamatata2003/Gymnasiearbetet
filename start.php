<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Quiz - Gengobu</title>
</head>
<body class="bg-color">
	<div>

		<div class="d-flex flex-column align-content-center flex-wrap">
		<?php // Takes raw question data from the file
		$json = file_get_contents('hiragana_questions.json');
		// Converts it into a PHP object
		$data = json_decode($json);
		shuffle($data);
		$qs = [];
		foreach ($data as $value) {
			$qs[] = new question($value[0],$value[1]);
			$qs1[] = new question($value[0],$value[1]);
		}
		$_SESSION["data"]=serialize($qs);
		$_SESSION["answers"]=[];

		$json = file_get_contents('katakana_questions1.json');
		// Converts it into a PHP object
		$datakata1 = json_decode($json);
		shuffle($datakata1);
		$qskata1 = [];
		foreach ($datakata1 as $value) {
			$qskata1[] = new question($value[0],$value[1]);
		}
		$_SESSION["data"]=serialize($qskata1);
		$_SESSION["answers"]=[];
		?>
		<div class="">
			<form action="" method="post">
			<!--<input type="text" name="name" value="" placeholder="名前">-->
			 <input type="hidden" name="question" value="0">
		 	 <input type="hidden" name="answers" value="">
<!-- 			<button type="submit" class="btn btn-secondary">Start quiz</button> -->
</form>
			<h1 class="greycolor d-flex margintop justify-content-center">Test your knowledge</h1>
		<p class="greycolor d-flex justify-content-center"></p>
		
		</div>

	<div class="boxed greycolor">
		<div>
			<h2>Hiragana</h2>
			<p>Test your knowledge of Hiragana. Hiragana is what we recommend you to learn first before you dive in to other parts of the language.</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li>
					<form action="" method="post">
			 			<input type="hidden" name="question" value="0">
		 	 			<input type="hidden" name="answers" value="">
						<button class="button"><span>Hiragana 1 </span></button>
					</form>
				</li>
				<li>
					<form action="" method="post">
				 		<input type="hidden" name="question" value="0">
			 	 		<input type="hidden" name="answers" value="">
						<button class="button"><span>Hiragana 2</span></button>
					</form>
				</li>
				<li><button class="button"><span>Hiragana 3</span></button></li>
			</ul>
		</div>

	</div>

	<div class="boxed greycolor">
		<div>
			<h2>Katakana</h2>
			<p>Test your knowledge of Katakana. Similar to Hiragana, Katakana is also a necessity when it comes learning Japanese. You should have a general grasp of Katakana before you dive in to other parts of the language.</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Katakana 1</span></button></li>
				<li><button class="button"><span>Katakana 2</span></button></li>
				<li><button class="button"><span>Katakana 3</span></button></li>
			</ul>
		</div>

	</div>










		<div class="boxed greycolor">
		<div>
			<h2>Vocabulary</h2>
			<p></p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Greetings</span></button></li>
				<li><button class="button"><span>Food</span></button></li>
				<li><button class="button"><span>Colors</span></button></li>
			</ul>
		</div>

	</div>

	<div class="boxed greycolor" id="bottom">
		<div>
			<h2>Stage 3</h2>
			<p></p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span> </span></button></li>
				<li><button class="button"><span>Katakana 4 </span></button></li>
				<li><button class="button"><span>Hiragana 4 </span></button></li>
			</ul>
		</div>

	</div>

			
		</div>
	</div>
</div>

<style type="text/css">
	.boxed {
  border: 2px solid black ;
  margin: 20px 70px 20px 70px;
  width: 70%;
  border-radius: 25px;
  padding: 20px;
  padding-left: 28px;
  height: 220px;
  display: flex;
}
#bottom {
	margin-bottom: 64px;
}
.japatext {
	padding-left: 78px;
	margin: 20px;
	margin-bottom: 0px;

}
.button {
    padding-right:40px;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    display: block;
    border: 1px solid black;
    color: ;
    background-color: ;
    border-radius: 10px;
    width: 140px;

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -10px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 8px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

li {
list-style: none;

}

</style>
</body>
</html>

