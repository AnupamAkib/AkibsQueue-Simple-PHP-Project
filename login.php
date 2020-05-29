<?php include "header.php" ?>
<title>Akib's QUEUE | Login</title>
<?php
if(isset($_SESSION['is_login'])){
    unset($_SESSION['is_login']);
}

if(isset($_POST['login'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if($user=="anupam" && $pass=="1243"){
        $_SESSION['is_login']=true;
        echo "<script> window.location.href='index.php'</script>";
    }
    else{
        echo "<center><div class='error' align='center'>Sorry, Wrong Username or Password</div></center>";
        unset($_POST['login']);
    }
}
 ?>

<center>
    <h1>Login to get Access</h1>
    <div class='login_form'>
        <form method="POST">
            <input type="text" placeholder="Enter Username" class="logintxt" name="username" required><br>
            <input type="password" placeholder="Enter Password" class="logintxt" name="password" required><br>
            <input type="submit" class="loginbtn" name="login" value="LOGIN"><br>
        </form>
    </div>
</center>


