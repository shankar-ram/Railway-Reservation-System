<?php
    session_start();
    $id = $_POST["id"];
    $password = $_POST["password"];
   

    $conn = new mysqli('localhost','root','','dbms');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    else{   
    $s = "select * from registration where id='$id' && password='$password'";    
    $result = mysqli_query($conn,$s);    
    $num= mysqli_num_rows($result);
    if($num==1){
        $_SESSION["id"]=$id;    
        header('location:home.php');
    }
    else{
        $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";   
        header('refresh:0; url=index.php');
    }
        
        
    }
        
?>
    