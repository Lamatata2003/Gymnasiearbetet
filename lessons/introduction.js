var lesson = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'Japanese consists of a total of three different types of script, two of them being phonetic.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text2 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'The phonetic alphabets are Hiragana and Katakana. Each alphabet has 46 basic characters.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next2()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text3 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
			'<div class="greycolor lessonkana">' +
					'あ　い　う　え　お' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'These are Hiragana. They are the most common out of the three scripts. Hiragana is recognizable by their smooth and curved strokes.' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="next3()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var text4 = '<div class="d-flex justify-content-center flex-column">' +
	'<div class="topbox"></div>' +
	'<div class="d-flex flex-row justify-content-center">' +
		'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
			'<div class="d-flex justify-content-center flex-column">' +
				'<div class="greycolor lessonkana">' +
					'ア　イ　ウ　エ　オ' +
			'</div>' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext">' +
						'These are Katakana. They aren\'t as common as Hiragana, and their strokes are straighter compared to Hiragana.' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="d-flex justify-content-center margintop">' +
				'<button class="border rounded lessonbtn" onclick="next4()">Next</button>' +
			'</div>' +
		'</div>' +
	'</div>' +
	'<form action="japbasics.php" class="d-flex justify-content-center">' +
		'<button class="btn margintop returnbtn">Return to menu</button>' +
	'</form>' +
'</div>'

var text5 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'Each Hiragana and Katakana only has a single pronunciation.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next5()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text6 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'Remembering Hiragana and Katakana is easier than you might think. Some of the characters look similar and share the same pronunciation.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next6()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text7 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'Every word in Japanese can be written in either Hiragana or Katakana, although a lot of words are more commonly written using the third script: Kanji (Chinese letters).' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next7()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text8 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'Hiragana is used to write Japanese words, as well as particles.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next8()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text9 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'Katakana is used to write borrowed words from other languages, or to write foreign names.' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
					'<button class="border rounded lessonbtn" onclick="next9()">Next</button>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'

var text10 = '<div class="d-flex justify-content-center flex-column">' +
		'<div class="topbox"></div>' +
		'<div class="d-flex flex-row justify-content-center">' +
			'<div class="border border-2 lessonbox d-flex flex-column justify-content-center lightergrey p-4">' +
				'<div class="d-flex justify-content-center">' +
					'<div class="greycolor lessontext lessonText">' +
						'Now you know the basics of the Japanese alphabets!' +
					'</div>' +
				'</div>' +
				'<div class="d-flex justify-content-center margintop">' +
				'<form action="japbasics.php" class="d-flex justify-content-center">' +
					'<button class="border rounded lessonbtn">Return to menu</button>' +
					'</form>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<form action="japbasics.php" class="d-flex justify-content-center">' +
			'<button class="btn margintop returnbtn">Return to menu</button>' +
		'</form>' +
	'</div>'
	function introduction() {
		const element = document.getElementById("demo");
		element.innerHTML = lesson;
	}
	function next() {
		const element = document.getElementById("demo");
		element.innerHTML = text2;
	}
	function next2() {
		const element = document.getElementById("demo");
		element.innerHTML = text3;
	}
	function next3() {
		const element = document.getElementById("demo");
		element.innerHTML = text4;
	}
	function next4() {
		const element = document.getElementById("demo");
		element.innerHTML = text5;
	}
	function next5() {
		const element = document.getElementById("demo");
		element.innerHTML = text6;
	}
	function next6() {
		const element = document.getElementById("demo");
		element.innerHTML = text7;
	}
	function next7() {
		const element = document.getElementById("demo");
		element.innerHTML = text8;
	}
	function next8() {
		const element = document.getElementById("demo");
		element.innerHTML = text9;
	}
	function next9() {
		const element = document.getElementById("demo");
		element.innerHTML = text10;
	}

