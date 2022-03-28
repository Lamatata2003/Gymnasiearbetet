<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="javascript.js"></script>
<script type="text/javascript" src="jquery-3.6.0.js"></script>

<?php
if (isset($_POST['pager'])) {
    if ($_POST['pager']=="Previous") {
        $_POST['question']=$_POST['question']-2;
    }
}

$qo = unserialize($_SESSION['data'])[$_POST['question']];
$qs = $qo->getRandomOrder();

$_SESSION["answers"][$_POST['question']-1] = $_POST["answers"]; 

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="d-flex paddingmedia">
        <div class="e border1 padding <?php echo $qo->getType()?>">
            <h1 class="text-light margintop"><?php echo $qo->getQuestion()?> </h1>
            <!-- <div class="buttons"> -->
                <div class="radiobtn">
                    <?php 
                    // var_dump($_SESSION['answers']);
                    for ($i = 0; $i < count($qs); $i++) {
                        echo "<input class=\"\" type=\"radio\" name=\"answers\" value=\"$qs[$i]\" id=\"$qs[$i]\"";
                        if (isset($_SESSION['answers'][$_POST['question']]) && $_SESSION['answers'][$_POST['question']]==$qs[$i]) {
                            var_dump($qs[$i]);
                            echo "checked";
                        }
                        echo "</input>
                        <label class=\"text-light bg-secondary border border-white rounded\" for=\"$qs[$i]\">$qs[$i]</label>";

                        }
                        ?>
                </div>
            <input id="next" type="submit" name="pager" value="Next" disabled="disabled">
            <input id="prev" type="submit" name="pager" value="Previous" disabled="disabled">

                <script type="text/javascript">

                $("input[type=radio]").one("click", function() { $("#next").prop("disabled", false); });

                 $("input[type=radio]").one("click", function() { $("#prev").prop("disabled", false); });
                 if($('input[type=radio]').is(':checked')) { $("#next").prop("disabled", false); }

                </script>

                <input type="hidden" name="question" value="<?php echo $_POST['question']+1?>">
            </div>
        </div>
    </div>
</form>