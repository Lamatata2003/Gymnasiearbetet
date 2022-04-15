var desu1 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'AはBです is the most basic sentence structure in Japanese.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="desutwo()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var desu2 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'A direct translation would be something like: "As for A, it is B."' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="desuthree()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var desu3 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'That sounds a bit unnatural, so to make things easier you can think of it like a simple "I am/you are/this is" sentence.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="desufour()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var desu4 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'a' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="desu5()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

	function desu() {
		const element = document.getElementById("demo");
		element.innerHTML = desu1;
	}

	function desutwo() {
		const element = document.getElementById("demo");
		element.innerHTML = desu2;
	}
	function desuthree() {
		const element = document.getElementById("demo");
		element.innerHTML = desu3;
	}

	function desufour() {
		const element = document.getElementById("demo");
		element.innerHTML = desu4;
	}