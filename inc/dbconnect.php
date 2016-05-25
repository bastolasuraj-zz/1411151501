<?php

    if($_SERVER['REMOTE_ADDR']=="127.0.0.1"){
        define("HOST","localhost");
        define("USER","root");
        define("PASS","");
        define("DATA","javaphpcs");
        $dbconnect=@mysqli_connect(HOST,USER,PASS,DATA);
    }else{
        define("HOST","10.2.0.150");
        define("USER","sathyasai_sathya");
        define("PASS","@#sathya#@");
        define("DATA","sathyasai_result");
        $dbconnect=@mysqli_connect(HOST,USER,PASS,DATA);
    }
    
    
    
    
?>
