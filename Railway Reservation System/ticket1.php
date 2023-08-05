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
    }  
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
<body style="background-image: url(train.jpeg);background-repeat: no-repeat;background-size:cover">
    <div id="mysidenav" class="sidenav">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="color:white;margin-left:15px;font-size:35px">Welcome <?php echo $_SESSION["id"]; ?></div>
        <a href="home.php">Home</a>
                 
        
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<div style="margin-left: 200px" class="main">
<h1 style="text-decoration-line: underline;text-align: center;color:black;
    font-size: 40PX">RAILWAY RESERVATION SYSTEM</h1> 

<h1 style="color:black;font-size: 25PX;margin-left: 30px;text-decoration-line: underline;margin-top: 50PX;margin-bottom: ">TICKET DETAILS</h1>
    
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
$p_id=$_SESSION['p_id'];

$sql="select * from ticket where p_id='$p_id'";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
    if ($result->num_rows == 0){
        echo "message";
        
    }
$t_id=$row['t_id'];
$fare=$row['fare'];
$pa_id=$row['p_id'];
$u_id=$row['u_id'];
$date=$row['date'];    
    
$conn->close();
    
?>
    <table border="2" cellspacing="1" cellpadding="18" width="1000px" style="border: 2px solid black;text-align: center" bordercolor="black"  align="center"  >
    <tr style="background-color:gainsboro">
        <th>TICKET ID</th>
        <th>FARE</th>
        <th>PASSENGER ID</th>
        <th>USER ID</th>
        <th>DEPARTURE DATE</th>
    </tr>
    <tr  style="background-color: whitesmoke">
        <td><?php echo $t_id ?></td>
        <TD><?php echo $fare ?></TD>
        <TD><?php echo $pa_id ?></TD>
        <TD><?php echo $u_id ?></TD>
        <TD><?php echo $date ?></TD>
        
    </tr>
    </table>
    </div>
    
</body>

</html>