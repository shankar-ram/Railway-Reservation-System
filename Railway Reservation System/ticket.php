<?php
    session_start();
    
    $t_id=rand(0,100000);
    $fare=$_SESSION['fare'];
    $p_id=$_SESSION['p_id'];
    $u_id=$_SESSION['id'];
    $date=$_SESSION['date'];
    
    $conn = new mysqli('localhost','root','','dbms');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
        
    }else{
        $stmt =$conn->prepare("insert into ticket (t_id,fare,p_id,u_id,date) values(?,?,?,?,?)");
        $stmt->bind_param("sisss",$t_id,$fare,$p_id,$u_id,$date);
        
        $stmt->execute();
        header("location:ticket1.php");
        
        
    }
        
         $stmt->close();
        $conn->close(); 


?>