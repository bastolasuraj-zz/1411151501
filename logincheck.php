<?php

session_start();
include_once "inc/header.php";

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        if($username!=""){
            if($password!=""){
                $pass = md5($password);
                $sql = "SELECT username,password FROM users WHERE username='$username' && password='$pass'";
                $query = mysqli_query($dbconnect,$sql);
                //$fetch = mysqli_fetch_assoc($query);
                
                if($query){
                    $_SESSION['login']="Login Successful";
                    //$_SESSION['u']=$fetch['username'];
                    //$_SESSION['p']=$fetch['password'];
                    header('location:index.php');
                }else {
                    $_SESSION['err_msg']="Invalid User Credntials";
                    header('location:login.php');
                }
            }else {
                $_SESSION['err_msg']="Password field Should not be blank";
                header('location:login.php');
            }
        }else {
            $_SESSION['err_msg']="Username field shouldnot be blank...";
            header('location:login.php');
        }
        
    }
?>