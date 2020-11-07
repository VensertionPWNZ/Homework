<?php
require_once('function.php');
$a = $_POST['string_1'];
$b = $_POST['string_2'];
$c = $_POST['string_3'];

if ($_POST["nameFUNC"] == "one") {
    echo request1($a,$b,$c);
}
if ($_POST["nameFUNC"] == "two") {
    echo request2($a,$b,$c);
}
if ($_POST["nameFUNC"] == "three") {
    echo request3($a,$b,$c);
}
