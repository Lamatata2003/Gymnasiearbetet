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
		<h1 class="text-light text-center">Hiragana quiz</h1>

		<div class="d-flex flex-column align-content-center flex-wrap">
		<?php // Takes raw question data from the file
		$json = file_get_contents('hiragana_questions.json');
		// Converts it into a PHP object
		$data = json_decode($json);
		shuffle($data);
		$qs = [];
		foreach ($data as $value) {
			$qs[] = new question($value[0],$value[1]);
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

			<h1 class="greycolor">Japanese basics</h1>
		<p class="greycolor">To get to the next step, please read and choose one of these following categories below.</p>
		
		</div>

	<div class="boxed greycolor" style="display: flex; width:40%">
		<div>
			<h2>Difficulty low</h2>
			<p>The Basics of the language Lorem ipsum dolor sit amet, consectetur adipisicing</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Hiragana 1 </span></button></li>
				<li><button class="button"><span>Katakana 1</span></button></li>
				<li><button class="button"><span>Vocabulary 1</span></button></li>
			</ul>
		</div>

	</div>

	<div class="boxed greycolor" style="display: flex; width:40%">
		<div>
			<h2>Hiragana</h2>
			<p>The Basics of the language Lorem ipsum dolor sit amet, consectetur adipisicing</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Lesson 1 </span></button></li>
				<li><button class="button"><span>Lesson 2 </span></button></li>
				<li><button class="button"><span>Lesson 3 </span></button></li>
			</ul>
		</div>

	</div>





		<div class="boxed greycolor" style="display: flex; width:40%">
		<div>
			<h2>Katakana</h2>
			<p>The Basics of the language Lorem ipsum dolor sit amet, consectetur adipisicing</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Lesson 1 </span></button></li>
				<li><button class="button"><span>Lesson 2 </span></button></li>
				<li><button class="button"><span>Lesson 3 </span></button></li>
			</ul>
		</div>

	</div>

	<div class="boxed greycolor" style="display: flex; width:40%">
		<div>
			<h2>Kanji</h2>
			<p>The Basics of the language Lorem ipsum dolor sit amet, consectetur adipisicing</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Lesson 1 </span></button></li>
				<li><button class="button"><span>Lesson 2 </span></button></li>
				<li><button class="button"><span>Lesson 3 </span></button></li>
			</ul>
		</div>

	</div>

			</form>
		</div>
	</div>
</div>

<style type="text/css">
	.boxed {
  border: 2px solid black ;
  margin: 70px;
  width: 100%;
  border-radius: 25px;
  padding: 20px;
  padding-left: 28px;
  height: 220px;

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
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 15px;
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

