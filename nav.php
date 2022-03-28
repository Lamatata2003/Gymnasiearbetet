<?php

if (!isset($_POST['question'])) {
include('start.php');
}
else if ($_POST['question'] == count(unserialize($_SESSION['data']))) {
 include('result.php');
}
else if (is_numeric($_POST['question'])) {
 include('questionhtml.php');
}
else {
 include('error.php');
}