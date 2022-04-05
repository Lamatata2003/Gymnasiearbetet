<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery-3.6.0.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kana Chart - Gengobu</title>
	<script>
		function toggleHira() {
			$("#hiragana").show()
			element = document.querySelector('#katakana')
			element.style.display = 'none'
			}

		function toggleKata() {
			$("#katakana").show()
			$("#hiragana").hide()
		}

	</script>
</head>
<?php include("header.php") ?>
<body class="bg-color">
	<div id="wrapper">
	<h1 class="greycolor">Kana Chart</h1>
	<p class="greycolor">Tap on any character to hear its pronunciation.</p>
	</div>
	<div class="d-flex flex-row justify-content-center w-100">
		<div class="kanatext">
			<button class="btn greycolor float-start text-decoration-underline fontsize" onclick="toggleHira()">
          Hiragana
        	</button>
		</div>
		<div class="kanatext">
			<button class="btn greycolor float-end text-decoration-underline fontsize" onclick="toggleKata()">
			Katakana
		</button>
		</div>
	</div>
	<div class="d-flex flex-row justify-content-center">
	<div class="flexbox-item"></div>
	<div class="border border-2 flex-grow-1 chart lightergrey">
	<div class="text-center">
		<div id="hiragana">
			<table class="d-inline chartable text-center kanafont">
			<tbody class="d-inline justify-content-around">
			<tr>
				<td>
					<span class="greycolor">
						あ
					</span>
					<div>
						a
					</div>
				</td>
				<td>
					<span class="greycolor">
						い
					</span>
					<div>
						i
					</div>
				</td>
				<td>
					<span class="greycolor">
						う
					</span>
					<div>
						u
					</div>
				</td>
				<td>
					<span class="greycolor">
						え
					</span>
					<div>
						e
					</div>
				</td>
				<td>
					<span class="greycolor">
						お
					</span>
					<div>
						o
					</div>
				</td>																				
			</tr>

			<tr>
				<td>
					<span class="greycolor">
						か
					</span>
					<div>
						ka
					</div>
				</td>
				<td>
					<span class="greycolor">
						き
					</span>
					<div>
						ki
					</div>
				</td>
				<td>
					<span class="greycolor">
						く
					</span>
					<div>
						ku
					</div>
				</td>
				<td>
					<span class="greycolor">
						け
					</span>
					<div>
						ke
					</div>
				</td>
				<td>
					<span class="greycolor">
						こ
					</span>
					<div>
						ko
					</div>
				</td>																			
			</tr>

			<tr>
				<td>
					<span class="greycolor">
						さ
					</span>
					<div>
						sa
					</div>
				</td>
				<td>
					<span class="greycolor">
						し
					</span>
					<div>
						shi
					</div>
				</td>
				<td>
					<span class="greycolor">
						す
					</span>
					<div>
						su
					</div>
				</td>
				<td>
					<span class="greycolor">
						せ
					</span>
					<div>
						se
					</div>
				</td>
				<td>
					<span class="greycolor">
						そ
					</span>
					<div>
						so
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						た
					</span>
					<div>
						ta
					</div>
				</td>
				<td>
					<span class="greycolor">
						ち
					</span>
					<div>
						chi
					</div>
				</td>
				<td>
					<span class="greycolor">
						つ
					</span>
					<div>
						tsu
					</div>
				</td>
				<td>
					<span class="greycolor">
						て
					</span>
					<div>
						te
					</div>
				</td>
				<td>
					<span class="greycolor">
						と
					</span>
					<div>
						to
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						な
					</span>
					<div>
						na
					</div>
				</td>
				<td>
					<span class="greycolor">
						に
					</span>
					<div>
						ni
					</div>
				</td>
				<td>
					<span class="greycolor">
						ぬ
					</span>
					<div>
						nu
					</div>
				</td>
				<td>
					<span class="greycolor">
						ね
					</span>
					<div>
						ne
					</div>
				</td>
				<td>
					<span class="greycolor">
						の
					</span>
					<div>
						no
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						は
					</span>
					<div>
						ha
					</div>
				</td>
				<td>
					<span class="greycolor">
						ひ
					</span>
					<div>
						hi
					</div>
				</td>
				<td>
					<span class="greycolor">
						ふ
					</span>
					<div>
						fu
					</div>
				</td>
				<td>
					<span class="greycolor">
						へ
					</span>
					<div>
						he
					</div>
				</td>
				<td>
					<span class="greycolor">
						ほ
					</span>
					<div>
						ho
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ま
					</span>
					<div>
						ma
					</div>
				</td>
				<td>
					<span class="greycolor">
						み
					</span>
					<div>
						mi
					</div>
				</td>
				<td>
					<span class="greycolor">
						む
					</span>
					<div>
						mu
					</div>
				</td>
				<td>
					<span class="greycolor">
						め
					</span>
					<div>
						me
					</div>
				</td>
				<td>
					<span class="greycolor">
						も
					</span>
					<div>
						mo
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						や
					</span>
					<div>
						ya
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						ゆ
					</span>
					<div>
						yu
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						よ
					</span>
					<div>
						yo
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ら
					</span>
					<div>
						ra
					</div>
				</td>
				<td>
					<span class="greycolor">
						り
					</span>
					<div>
						ri
					</div>
				</td>
				<td>
					<span class="greycolor">
						る
					</span>
					<div>
						ru
					</div>
				</td>
				<td>
					<span class="greycolor">
						れ
					</span>
					<div>
						re
					</div>
				</td>
				<td>
					<span class="greycolor">
						ろ
					</span>
					<div>
						ro
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						わ
					</span>
					<div>
						wa
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						を
					</span>
					<div>
						wo
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						ん
					</span>
					<div>
						n
					</div>
				</td>																				
			</tr>
			</tbody>
			</table>
			</div>

			<div id="katakana">
				<table class="d-inline chartable text-center kanafont">
				<tbody class="d-inline justify-content-around">
			<tr>
				<td>
					<span class="greycolor">
						ア
					</span>
					<div>
						a
					</div>
				</td>
				<td>
					<span class="greycolor">
						イ
					</span>
					<div>
						i
					</div>
				</td>
				<td>
					<span class="greycolor">
						ウ
					</span>
					<div>
						u
					</div>
				</td>
				<td>
					<span class="greycolor">
						エ
					</span>
					<div>
						e
					</div>
				</td>
				<td>
					<span class="greycolor">
						オ
					</span>
					<div>
						o
					</div>
				</td>																				
			</tr>

			<tr>
				<td>
					<span class="greycolor">
						カ
					</span>
					<div>
						ka
					</div>
				</td>
				<td>
					<span class="greycolor">
						キ
					</span>
					<div>
						ki
					</div>
				</td>
				<td>
					<span class="greycolor">
						ク
					</span>
					<div>
						ku
					</div>
				</td>
				<td>
					<span class="greycolor">
						ケ
					</span>
					<div>
						ke
					</div>
				</td>
				<td>
					<span class="greycolor">
						コ
					</span>
					<div>
						ko
					</div>
				</td>																			
			</tr>

			<tr>
				<td>
					<span class="greycolor">
						サ
					</span>
					<div>
						sa
					</div>
				</td>
				<td>
					<span class="greycolor">
						シ
					</span>
					<div>
						shi
					</div>
				</td>
				<td>
					<span class="greycolor">
						ス
					</span>
					<div>
						su
					</div>
				</td>
				<td>
					<span class="greycolor">
						セ
					</span>
					<div>
						se
					</div>
				</td>
				<td>
					<span class="greycolor">
						ソ
					</span>
					<div>
						so
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						タ
					</span>
					<div>
						ta
					</div>
				</td>
				<td>
					<span class="greycolor">
						チ
					</span>
					<div>
						chi
					</div>
				</td>
				<td>
					<span class="greycolor">
						ツ
					</span>
					<div>
						tsu
					</div>
				</td>
				<td>
					<span class="greycolor">
						テ
					</span>
					<div>
						te
					</div>
				</td>
				<td>
					<span class="greycolor">
						ト
					</span>
					<div>
						to
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ナ
					</span>
					<div>
						na
					</div>
				</td>
				<td>
					<span class="greycolor">
						ニ
					</span>
					<div>
						ni
					</div>
				</td>
				<td>
					<span class="greycolor">
						ヌ
					</span>
					<div>
						nu
					</div>
				</td>
				<td>
					<span class="greycolor">
						ネ
					</span>
					<div>
						ne
					</div>
				</td>
				<td>
					<span class="greycolor">
						ノ
					</span>
					<div>
						no
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ハ
					</span>
					<div>
						ha
					</div>
				</td>
				<td>
					<span class="greycolor">
						ヒ
					</span>
					<div>
						hi
					</div>
				</td>
				<td>
					<span class="greycolor">
						フ
					</span>
					<div>
						fu
					</div>
				</td>
				<td>
					<span class="greycolor">
						ヘ
					</span>
					<div>
						he
					</div>
				</td>
				<td>
					<span class="greycolor">
						ホ
					</span>
					<div>
						ho
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						マ
					</span>
					<div>
						ma
					</div>
				</td>
				<td>
					<span class="greycolor">
						ミ
					</span>
					<div>
						mi
					</div>
				</td>
				<td>
					<span class="greycolor">
						ム
					</span>
					<div>
						mu
					</div>
				</td>
				<td>
					<span class="greycolor">
						メ
					</span>
					<div>
						me
					</div>
				</td>
				<td>
					<span class="greycolor">
						モ
					</span>
					<div>
						mo
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ヤ
					</span>
					<div>
						ya
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						ユ
					</span>
					<div>
						yu
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						ヨ
					</span>
					<div>
						yo
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ラ
					</span>
					<div>
						ra
					</div>
				</td>
				<td>
					<span class="greycolor">
						リ
					</span>
					<div>
						ri
					</div>
				</td>
				<td>
					<span class="greycolor">
						ル
					</span>
					<div>
						ru
					</div>
				</td>
				<td>
					<span class="greycolor">
						レ
					</span>
					<div>
						re
					</div>
				</td>
				<td>
					<span class="greycolor">
						ロ
					</span>
					<div>
						ro
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						ワ
					</span>
					<div>
						wa
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						ヲ
					</span>
					<div>
						wo
					</div>
				</td>																				
			</tr>

<tr>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						
					</span>
					<div>
						
					</div>
				</td>
				<td>
					<span class="greycolor">
						ン
					</span>
					<div>
						n
					</div>
				</td>																				
			</tr>
			</tbody>
			</table>
			</div>
			</div>
			</div>
			<div class="flexbox-item"></div>
			</div>

</body>
<footer> 
	<!-- <?php include("footer.php")?>  -->
</footer>
</html>

<style type="text/css">
	#katakana {
		display: none;
	}

	.chartable {
    min-width: 400px;
    max-width: 100%;
    text-align: center;
	}

	tbody {
		display: table-row-group;
		vertical-align: middle;
	}

	tr {
		display: flex;
		justify-content: space-around;
	}

	td {
		vertical-align: middle;
		display: table-cell;
	}

	.kanafont {
	font-size: 32px;
}
.flexbox-item {
	width: 30px;
}

.chart {
	max-width: px;
}
.fontsize {
	font-size: 24px;
}

@media only screen and (min-width: 600px) {
	.chart {
		max-width: 600px;
	}
	.fontsize {
	font-size: 32px;
	}

  }


#wrapper {
	padding: 0 15px;
	box-sizing: border-box;
}

</style>