<?php
    session_start();

    $_SESSION = array();

    //wen we start a session it is created a cookie.to handel it
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-86400,'/');
    }

    session_destroy();

    //redirect the user to th Login page
    header('Location: login.php');
?>