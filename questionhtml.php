<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script src="javascript.js"></script>
    <script type="text/javascript" src="jquery-3.6.0.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz - Gengobu</title>
</head>
<body>
<?php
// if (isset($_POST['pager'])) {
//     if ($_POST['pager']=="Previous") {
//         $_POST['question']=$_POST['question']-2;
//     }
// }

$qo = unserialize($_SESSION['data'])[$_POST['question']];
$qs = $qo->getRandomOrder();

$_SESSION["answers"][$_POST['question']-1] = $_POST["answers"]; 

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="d-flex">
        <div class="quiz padding">
            <h1 class="text-light margintop"><?php echo $qo->getQuestion()?> </h1>
                <div class="radiobtn d-grid gap-2">
                    <?php 
                    // var_dump($_SESSION['answers']);
                    for ($i = 0; $i < count($qs); $i++) {
                        echo "<input class=\"\" type=\"radio\" name=\"answers\" value=\"$qs[$i]\" id=\"$qs[$i]\"";
                        if (isset($_SESSION['answers'][$_POST['question']]) && $_SESSION['answers'][$_POST['question']]==$qs[$i]) {
                            // var_dump($qs[$i]);
                            echo "checked";
                        }
                        echo "</input>
                        <label class=\"text-light border border-2 border-white rounded quizbuttons btnshadow\" for=\"$qs[$i]\">$qs[$i]</label>";

                        }


                        ?>
                </div>
            <input class="btn btn-secondary mt-2" id="next" type="submit" name="pager" value="Next" disabled="disabled">
<!--             <input class="btn btn-secondary" id="prev" type="submit" name="pager" value="Previous" disabled="disabled"> -->

                <script type="text/javascript">

                $("input[type=radio]").one("click", function() { $("#next").prop("disabled", false); });

                 $("input[type=radio]").one("click", function() { $("#prev").prop("disabled", false); });
                 if($('input[type=radio]').is(':checked')) { $("#next").prop("disabled", false); }

                </script>

                <input type="hidden" name="question" value="<?php echo $_POST['question']+1?>">
        </div>
    </div>
</form>
</body>
</html>

