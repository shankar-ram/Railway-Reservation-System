<?php
    session_start();
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $p_id = $_POST["id"];
    $date=$_POST["date"];
    $id=$_SESSION['id'];
    $_SESSION["p_id"]=$p_id;

    
    
    $conn = new mysqli('localhost','root','','dbms');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
        
    }else{
        $stmt =$conn->prepare("insert into passenger (firstname,lastname,age,id,p_id) values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$firstname,$lastname,$date,$id,$p_id);
        $sql = "SELECT p_id from passenger where p_id='$p_id'";
$result = $conn->query($sql);
        if ($result->num_rows > 0){
        $message = "Username already taken.\\nTry again.";
  echo "<script type='text/javascript'>window.alert('$message');</script>";
            header('refresh:2; url=home1.php');
        }
        else{
             $stmt->execute();    
        header('Location:ticket.php');
            
        }
        $stmt->close();
        $conn->close(); 
        
    }


?>