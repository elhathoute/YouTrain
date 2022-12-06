<?php 
include('../classes/classes.php');

if(isset($_POST['signin'])){
    setcookie("email_cookie",$_POST['loginemail'], time() + (60*60*24), "/");

if(user::signin($_POST['loginemail'],$_POST['loginpass'])){
    if(isset($_POST['RMcheckbox'])){
        setcookie("email_cookie",$_POST['loginemail'], time() + (60*60*24), "/");
        setcookie("password_cookie",$_POST['loginpass'], time() + (60*60*24), "/");
}
    header('location:header.php');
}else{
    $_SESSION['message'] = "Your data dosn't match with our records";
    header('location:signin.php');
}

}
if(isset($_POST['register'])){

    $user = new user($_POST['username'],$_POST['email'],$_POST['password'],$_POST['rpassword']);
    if($user->checkdata()){
        $user->insertuser();
        setcookie("email_cookie",$_POST['email'], time() + (60*60*24), "/");
    setcookie("password_cookie","", time(), "/");
    }else{
        $_SESSION['message'] = $user->errormsg;
    }
    
    header('location:signin.php');
    }





?>