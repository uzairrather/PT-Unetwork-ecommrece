<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass']; // i was 

    $sql = "select * from `pt-users` where user_email= '$email'"; //using 'user_email' instered of user_email
    $result = mysqli_query($conn, $sql);                           // and login was not working
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
         if(password_verify($pass, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] =  $row['sno'];
            $_SESSION['useremail'] = $email;
            echo "logged in" . $email;
         }
         header("Location: /PT-forum/index.php");
    }
    header("Location: /PT-forum/index.php");
}

?>