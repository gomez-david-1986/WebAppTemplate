<?php
//  phpinfo();


//PRODUCTION CODE TO SEND PAGES THAT ARE NOT USSING HTTPS TO THE SECURE SITE
//$page = $_GET['page'];
//
//if ($_SERVER['HTTPS'] != "on") {
//    $redirect = "https://" . $_SERVER['HTTP_HOST'] . "/Login.php";
//    header("Location:$redirect");
//}

header("Location:login.php");


?>