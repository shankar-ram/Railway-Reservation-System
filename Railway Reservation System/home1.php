<?php

session_start();

?>


<html>
<head><title>Available trains</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="styles.css" rel="stylesheet">
     <script defer src="script.js"></script>
    <style>
            .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.2s;
  padding-top: 60px;
}
        
        
   .sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  cursor: pointer;
  text-align: left;
  outline: none;
}

        
        .sidenav a:hover {
  color: #f1f1f1;
}
        
        .dropdown-btn:hover{
            color:#f1f1f1;
        }
        
        
        .sidenav .closebtn .dropdown-btn{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
      
        .active {
  color: white;
}
        
        
        .dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
        
        
        
        .fa-caret-down {
  float: right;
  padding-right: 8px;
}
        
        
        
        .search{
            position: relative;
            margin-top: 120px;
            background-color:#adebeb;
            width: 600px;
            padding-left: 15px;
            padding-bottom: 15px;
            padding-top: 40px;
            font-size: 30px;
            border-radius: 3px;
            opacity:.5;
        }
        
        
        
        
        .autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}	
        
        .autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  top: 100%;
  font-size:15px;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 3px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
        
        #submit{
            outline: none;
            border: none;
        }
        #submit:hover{
            background-color:green;
        }
    
    </style>
    <script>
     var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
        }
        
        function openNav(){
            document.getElementById("mysidenav").style.width="200px";
            
          
        }
        function closeNav(){
            document.getElementById("mysidenav").style.width="0";
        }
    </script>
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
$date=$_POST['date'];   
$source=$_POST['source'];
$destination=$_POST['destination'];
$_SESSION['date']=$date;
    
$sql = "SELECT t.tr_nm,t.tr_id,t.dep_time,a.a_seats,a.fare from train t,train_status a where t.tr_id=a.tr_id and t.fst_id in( select st_id from station where st_name='$source') and t.tst_id in(select st_id from station where st_name='$destination')";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
    if ($result->num_rows == 0){
        $message = "NO TRAINS AVAILABLE";
  echo "<script type='text/javascript'>alert('$message');</script>";   
        header('refresh:0; url=home.php');
    }
else{
$tr_id=$row['tr_id'];
$tr_nm=$row['tr_nm'];
$a_seats=$row['a_seats'];
$fare=$row['fare'];
$dep=$row['dep_time'];
$_SESSION['fare']=$fare;

$conn->close();
?>
 <body style="background-image: url(train.jpeg);background-repeat: no-repeat;background-size:cover">
<div id="mysidenav" class="sidenav">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="color:white;margin-left:15px;font-size:35px">Welcome <?php echo $_SESSION["id"]; ?></div>
        <a href="home.php">Home</a>
        
                 
        
    </div>
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<div style="margin-left: 200px;background-color:cornsilk" class="main" >
<h1 style="text-decoration-line: underline;text-align: center;color:black;
    font-size: 40PX">RAILWAY RESERVATION SYSTEM</h1> 

<h1 style="color:black;font-size: 25PX;margin-left: 30px;text-decoration-line: underline;margin-top: 50PX;margin-bottom: ">ALL AVAILABLE TRAINS</h1>   
<table border="2" cellspacing="1" cellpadding="18" width="1000px" style="border: 2px solid black;text-align: center" bordercolor="black"  align="center"  >
    <tr style="background-color:gainsboro">
        <th>TRAIN</th>
        <th>TRAIN NO</th>
        <th>SEATS</th>
        <th>FARE</th>
        <th>DEPARTURE</th>
        <th>ACTION</th>
    </tr>
    <tr  style="background-color: whitesmoke">
        <td><?php echo $tr_nm ?></td>
        <TD><?php echo $tr_id ?></TD>
        <TD><?php echo $a_seats ?></TD>
        <TD><?php echo $fare ?></TD>
        <TD><?php echo $dep ?></TD>
        <td><button data-modal-target="#modal">BOOK NOW</button></td>
    </tr>
    </table>
    
<div class="modal" id="modal">
    <div class="modal-header">
      <div class="title"> ENTER PASSENGER DETAILS</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <form method="post" action="passenger.php">
          <input type="text" placeholder="Firstname" name="firstname" required>
        <input type="text" placeholder="Lastname" name="lastname">
        <input type="text" placeholder="ID" name="id" required>
        <input type="text" placeholder="Phone number" name="number" required>
          <input type="date"  name="date" required>
          <input type="submit" value="SUBMIT"  >
        </form>
    </div>
  </div>
  <div id="overlay"></div>
    
<?php } ?>
    
   




<!--
echo '<table>
    <tr>
        <th>TR_ID</th>
        <th>TR_Name</th>
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <td>'.$row['tr_id'].'</td>
            <td>'.$row['tr_nm'].'</td>
        </tr>';

}

echo '
</table>';
-->

 </body>

</html>
