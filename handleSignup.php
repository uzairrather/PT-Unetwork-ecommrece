<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] = "POST"){
    include 'dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];



  //check wheather the email exists
    $exitSql = "select * from `pt-users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $exitSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email allready in use";
    }
    
    else{
        if($pass= $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql ="INSERT INTO `pt-users` ( `user_email`, `user_pass`, `tstamp`)VALUES( '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
               header("Location:/PT-forum/index.php?signupsuccess=true");
               exit();
            }
        }
        else{
            $showError = "Password do not match";
        }
    }
    header("Location: /PT-forum/index.php?signupsuccess=false&error=$showError");

}
?>