<?php
    session_start();
    if(session_destroy()){
        $_SESSION['succ_msg']="Logout Successful";
        header('location:login.php');
    }else{
        $_SESSION['err_msg']="Error Logging Out";
    }
    
?>