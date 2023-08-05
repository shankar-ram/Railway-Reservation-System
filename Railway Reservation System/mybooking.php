<?php
    session_start();
?>
<html>
<head><title>ticket details</title>
    <style>
    
    .main{
        
        width:1050px;
        height: 600px;
        padding-top: 12px;
        padding-left: 40px;
        padding-right: 65px;
        margin:20px;
        background-color:cornsilk;  
        opacity: 100px;
        
    }  
    
    
    
    
    </style>
    
    
    </head>
<?php
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
$u_id=$_SESSION['id'];

$sql="select * from ticket where u_id='$u_id'";
$result = $conn->query($sql);
$rsNews=mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($result->num_rows == 0){
        $message = "No tickets Booked";
  echo "<script type='text/javascript'>window.alert('$message');</script>";
            header('refresh:0; url=home.php');   
    }
$conn->close();   
?>
    <body style="background-image: url(train.jpeg);background-repeat: no-repeat;background-size:cover">
<div style="margin-left: 200px" class="main">
<h1 style="text-decoration-line: underline;text-align: center;color:black;
    font-size: 40PX">RAILWAY RESERVATION SYSTEM</h1> 

<h1 style="color:black;font-size: 25PX;margin-left: 30px;text-decoration-line: underline;margin-top: 50PX;margin-bottom: ">TICKET DETAILS</h1>
    
    <table border="2" cellspacing="1" cellpadding="18" width="1000px" style="border: 2px solid black;text-align: center" bordercolor="black"  align="center"  >
    <tr style="background-color:gainsboro">
        <th>TICKET ID</th>
        <th>FARE</th>
        <th>PASSENGER ID</th>
        <th>USER ID</th>
        <th>DEPARTURE DATE</th>
    </tr>
    <?php do{ ?>
    <tr  style="background-color: whitesmoke">
        <td><?php echo $rsNews['t_id']; ?></td>
        <TD><?php echo $rsNews['fare']; ?></TD>
        <TD><?php echo $rsNews['p_id']; ?></TD>
        <TD><?php echo $rsNews['u_id']; ?></TD>
        <TD><?php echo $rsNews['date']; ?></TD>
        
    </tr>
    <?php }while($rsNews=mysqli_fetch_array($result, MYSQLI_ASSOC)) ?>
    </table>
    </div>


    
</body>

</html>