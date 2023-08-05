<?php 
session_start();


?>
<head>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
        body{
            background-image: url(train.jpeg);
            background-size: cover;
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
</head>
<body>
    <div id="mysidenav" class="sidenav">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="color:white;margin-left:15px;font-size:35px">Welcome <?php echo $_SESSION["id"]; ?></div>
        <a href="home.php">Home</a>
        <a href="mybooking.php">My Bookings</a>
        <a href="cancellation.php">Cancel Ticket</a>
         <button class="dropdown-btn">My Account
        <i class="fa fa-caret-down"></i>
        </button>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>          
        
    </div>
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <center>
    <div class="search">
            
            <form autocomplete="off" action="home1.php" method="post">
                <label style="margin-left: -65px"> Journey Date</label>  
            <input type="date" name="date" style="margin-left: 50px" min='2019-11-09' id="datefield" required>
            <br>
            <br>
                <label>From</label>
            <div class="autocomplete" style="width: 200px;margin-left:90px ">
                <input id="myInput" type="text" name="source" placeholder="Source" style="border: none;outline: none; padding-left: 10px;height: 45px;width: 200px;font-size: 20" required>
            </div><br>
                <br>
                <label >To</label>  
            <div class="autocomplete" style="width: 200px;margin-left:125px "  >
              <input id="myInput1" type="text" name="destination" placeholder="Destination" style="border: none;outline: none; padding-left: 10px;height: 45px;width: 200px;font-size: 20" required>       
            </div>
            <br>
            <br> 
                <button id="submit" style="width: 200px;height: 40px">Search</button>
            </form>
        
    </div>
    </center>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("datefield").setAttribute("min", today);
        
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
    <script src="js/home1.js"></script>
    <script src="js/home2.js"></script>
    </body>    
    
</html>