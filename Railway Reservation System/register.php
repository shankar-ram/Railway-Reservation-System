<html>
<head><title>SIGN UP</title></head>
<Style>
    body{
        zoom:100%;
    }
    div{
        font-style: oblique;
        font-size: 17px;
        text-align:left;
        width:300px;
        padding-top: 12px;
        padding-left: 40px;
        padding-right: 65px;
        padding-bottom: 40px;
        margin:20px;
        background-color:cornsilk;
    }   
    .pad{
        padding: 5px;
    }
</Style>
<body style="background-image: url(train.jpeg);background-repeat: no-repeat;background-size:cover ">
  
    
<h1 style="text-align: center;font-style:oblique;font-size: 40px;text-decoration-line: underline;margin-top: 40px">RAILWAY RESERVATION SYSTEM</h1>


<div style="margin-left: 550px;opacity:.75" ><h2 style="text-align: center;font-size: 30px">SIGN UP</h2> 
    <form action="connect.php" method="post"><input class="pad" style="margin-left: 50px;font-size: 18px" type="text" placeholder="FIRSTNAME" name="firstname" required><br><br> <input class="pad" style="margin-left: 50px;font-size: 18px" type="text" placeholder="LASTNAME" name="lastname" required><br><br> <input class="pad" style="margin-left: 50px;font-size: 18px" type="text" placeholder="USERNAME" name="id"  required><br><br> <input class="pad" style="margin-left: 50px;font-size: 18px" type="password" placeholder="PASSWORD" name="password"  required><br><br> <input class="pad" style="margin-left: 50px;font-size: 18px" type="text" placeholder="MOBILE NUMBER" name="number"  required><br><br> <input class="pad" style="margin-left: 50px;font-size: 18px;margin-bottom: 10px" type="text" placeholder="ADDRESS" name="address"  required><br><label style="margin-left: 48px;">Date of Birth</label><br>  
    <input type="date" style="margin-left:48px" name="date"> 
        <br>
<label style="margin-left:50px">Gender</label>
<br>
<input style="margin-left: 50px;margin-top: 10px" type="radio" name="gender" value="m">Male
<input type="radio" name="gender" value="f">Female
<input type="radio" name="gender" value="o">Other
<input type="submit" style="margin-left: 105px;font-size: 15px;width: 100px;margin-top: 20px;background-color: orange;border-radius:10px;height: 30px">
</form>
</div>
</body>

</html>