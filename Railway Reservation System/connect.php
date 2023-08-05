<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $id = $_POST["id"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $date=$_POST["date"];
    $gender = $_POST["gender"];
    
    
    $conn = new mysqli('localhost','root','','dbms');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
        
    }else{
        $stmt =$conn->prepare("insert into registration(firstname,lastname,id,password,number,address,birth,gender) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssisss",$firstname,$lastname,$id,$password,$number,$address,$date,$gender);
        $sql = "SELECT id from registration where id='$id'";
$result = $conn->query($sql);
        if ($result->num_rows > 0){
        $message = "Username already taken.\\nTry again.";
  echo "<script type='text/javascript'>window.alert('$message');</script>";
            header('refresh:0; url=register.php');
        }
        else{
             $stmt->execute();    
        header('Location:index.php');
            
        }
        $stmt->close();
        $conn->close(); 
        
    }
    
?>