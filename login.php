<?php
include_once "inc/header.php";
?>

    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = md5($password);
            echo selectQuery("username,password","users","username='$username'");
        }
    ?>

<div class="mid-form">
    <h1>Login Form</h1>
    <div>
        <h3><?php if(isset($_SESSION['err_msg'])){
            echo $_SESSION['err_msg']."<br>"; unset($_SESSION['err_msg']);
            //echo $_SESSION['u']."<br>";
            //echo $_SESSION['p'];
        }?></h3>
    </div>
    <form method="POST" enctype="multipart/form-data" action="logincheck.php">
        
        <input type="text" name="username" placeholder="Username" style=""><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="login">
        <input type="reset" name="reset" value="Clear Form">
        
        
    </form>
</div>

<?php
    include_once "inc/footer.html";
?>