var codeBlock = '<div class="content">' +
					''
                    '<button onclick="test2()">This is a heading</button>' +
                '</div>';
	function hiragana() {
		const element = document.getElementById("demo");
		element.innerHTML = codeBlock;
	}
	function test2() {
		const element = document.getElementById("demo");
		element.innerHTML = "test";
	}