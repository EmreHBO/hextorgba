<?php
include 'Calculator.php';

$calculator = new Calculator();

if(isset($_POST['submit'])){
    $hex = $_POST['hex'];
    $alpha = $_POST['alpha'];
    $output = $calculator->hextorgba($hex, $alpha);
}
