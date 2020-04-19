<?php

    session_start();

    $url =  $_SERVER['REQUEST_URI'];

    switch ($url){
	case '/register':
            $filename="Register.php";
            require $filename;
            break;
        case '/login':
             $filename="Login.php";
             require $filename;
             break;
        case '/logout':
            $filename="Logout.php";
            require $filename;
            break;
	case '/lorem':
            $filename="LoremIpsum.php";
            require $filename;
            break;
	default:
	    require 'Error.php';
	    break;
   }
?>