<?php
    session_start();

    $t_id=$_POST['ticket'];
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * from ticket WHERE t_id='$t_id'";
$result = $conn->query($sql1);
$row=mysqli_fetch_array($result);
    if ($result->num_rows > 0){
// sql to delete a record
$sql = "DELETE FROM ticket WHERE t_id='$t_id'";
        $conn->query($sql);
    $message = "Ticket cancelled";
  echo "<script type='text/javascript'>window.alert('$message');</script>";
            header('refresh:0; url=home.php');
} else {
   $message = "WRONG TICKET ID";
  echo "<script type='text/javascript'>window.alert('$message');</script>";
     header('refresh:0; url=cancellation.php');
}

$conn->close();


        
    
?>
