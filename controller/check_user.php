<?php
    session_start();
    //Check if user looged in
    if(empty($_SESSION['USER_ID'])){
        //No Authentication, redirect to login screen
        $url    =   PN_BASE_URL.'controller/';
        header('Location: ' . $url);
        exit();
    }
