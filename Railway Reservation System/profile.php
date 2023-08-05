<?php
    session_start();
?>
<html>
<head><title>profile</title><style>
    
    .main{
        
        width:1050px;
        height: 600px;
        padding-top: 12px;
        padding-left: 40px;
        padding-right: 65px;
        margin:20px;
        background-color:cornsilk;  
    }  
    
    
    </style>
    
    
    </head>
<body style="background-image: url(train.jpeg);background-repeat: no-repeat;background-size:cover">
    <div style="margin-left: 200px" class="main">
<h1 style="text-decoration-line: underline;text-align: center;color:black;
    font-size: 40PX">RAILWAY RESERVATION SYSTEM</h1> 

<h1 style="color:black;font-size: 25PX;margin-left: 30px;text-decoration-line: underline;margin-top: 50PX;margin-bottom: ">USER DETAILS</h1>
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

$sql="CALL getRegistration('$u_id');";
if($result=mysqli_query($conn,$sql)){
$row=mysqli_fetch_assoc($result);
$f_nm=$row['firstname'];
$l_nm=$row['lastname'];
$us_id=$row['id'];
$no=$row['number'];
$address=$row['address'];    
$date=$row['birth'];
$gender=$row['gender'];
$age=$row['age'];
}
$conn->close();
    
?>
    <table border="2" cellspacing="1" cellpadding="18" width="1000px" style="border: 2px solid black;text-align: center" bordercolor="black"  align="center"  >
    <tr style="background-color:gainsboro">
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>USER ID</th>
        <th>PHONE NUMBER</th>
        <th>ADDRESS</th>
        <TH>DOB</TH>
        <TH>GENDER</TH>
        <TH>AGE</TH>
        
    </tr>
    <tr  style="background-color: whitesmoke">
        <td><?php echo $f_nm ?></td>
        <TD><?php echo $l_nm ?></TD>
        <TD><?php echo $us_id ?></TD>
        <TD><?php echo $no ?></TD>
        <TD><?php echo $address ?></TD>
        <td><?php echo $date ?></td>
        <td><?php echo $gender ?></td>
        <td><?php echo $age ?></td>
        
    </tr>
    </table>
    </div>
    
    
    
    </body>

</html>