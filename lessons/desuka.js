var desuka1 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'AはBですか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'To make a formal question in Japanese, you can use the AはBです structure you learned in the last lesson and add か at the end.' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="desukatwo()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var desuka2 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'かれ は アメリカじん ですか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'This is how you would ask: "Is he american?"' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="desukathree()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var desuka3 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'どこ に いきますか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'This is how you would ask "Where are we going?"' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="desukafour()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var desuka4 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'どこ に いきますか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'This might look very different to what you just learned, but it\'s really not.' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="desukafive()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var desuka5 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'どこ に いきますか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'"どこ" = "where"' +
						'<br>' +
						'Instead of the は-particle (the subject marker), we use the に-particle.' +
						'<br>' +
						'The に-particle in this case is used to indicate a location.' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="desukasix()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var desuka6 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'どこ に いきますか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'The last part "いきますか" is the verb "To go" with か added at the end to make it a question.' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="desukaseven()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var desuka7 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'どこ に いきますか' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'Now you know some of the basics of makings questions in Japanese!' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<form action="japbasics.php" class="d-flex justify-content-center">' +
					'<button class="border rounded lessonbtn">Return to menu</button>' +
				'</form>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

	function desuka() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka1;
	}

	function desukatwo() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka2;
	}

	function desukathree() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka3;
	}

	function desukafour() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka4;
	}

	function desukafive() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka5;
	}

	function desukasix() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka6;
	}

	function desukaseven() {
		const element = document.getElementById("demo");
		element.innerHTML = desuka7;
	}