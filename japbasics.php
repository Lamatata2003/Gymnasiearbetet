<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lessons - Gengobu</title>
</head>
<?php include("header.php") ?>
<body class="bg-color">
	<div class="japatext d-flex flex-column">
		<h1 class="greycolor">Lessons</h1>
		<p class="greycolor">This is where most of the learning progress will be made, to later be able to do the tests.</p>
		
		</div>

<div class="d-flex">
	<div class="boxed greycolor">
		<div>
			<h2>Introduction</h2>
			<p>If you don't have any prior knowledge in japanese, this is the place to start.</p>
		</div>
		<div style="vertical-align: middle;" id="bajs" >
			<ul>
				<li><button class="button"><span>Lesson 1 </span></button></li>
				<li><button class="button"><span>Lesson 2 </span></button></li>
				<li><button class="button"><span>Lesson 3 </span></button></li>
			</ul>
		</div>

	</div>

	<div class="boxed greycolor">
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

</div>


<div class="d-flex">
		<div class="boxed greycolor">
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

	<div class="boxed greycolor">
		<div>
			<h2>Grammar/Sentence structure</h2>
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
</div>
<style type="text/css">
	.boxed {
  border: 2px solid black ;
  margin: 70px;
  width: 40%;
  border-radius: 25px;
  padding: 20px;
  padding-left: 28px;
  height: 220px;
  display: flex;
}

@media only screen and (max-width: 800px) {
	.boxed {
		height: 400px;
	}

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
<footer> <?php include("footer.php")?> </footer>
</html>