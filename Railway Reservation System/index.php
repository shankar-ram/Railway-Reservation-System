<html>
<head>
    <style>
           body, html {
               height: 100%;
               width: 137%;
               margin: 0;
               font-family: Arial, Helvetica, sans-serif;
               box-sizing:inherit;
               zoom:100%;   
               
                 background-image: url("train.jpeg");
                 height: 100%;
                 width: 100%;
                 background-position:center;
                 background-size: cover;
                background-repeat: no-repeat;
        }
            
        #font{
            font-size: 75px;
            color:#B4BAC6;
            position: relative;
            top: 5px;  
        }
       #back{
            position:relative;
            top:70px;
           width: 250px;
           height: 300px;
            background-color:white;
            border-radius: 5px;
            opacity:.8;
        }
        form{
            position: relative;
            top:50px;
        }
      
        input[type=text], input[type=password] {
            border: none;
            padding: 5px;
            background: #ddd;
            width: 200px;
        }
        
        input[type=text]:focus, input[type=password]:focus {
            background-color: #C0C9F3;
            outline: none;
        }
         .btn{
            width:200px;
            top:70px;
            background-color:#C5BCD7 ;
            border:none;
            opacity: .75;
            outline: none;
        }
         .btn:hover{
            opacity: 1;
        }
         #signup
        {
            width:200px;
          
            background-color:#C5BCD7 ;
            border:none;
            opacity: .75;
            outline: none;
        }
        #signup:hover{
             opacity: 1;
        }
     
    </style>
    </head>
    <body>
        <center>
                <div id="font">
                    <b>INDIAN RAILWAYS</b>               
                </div>
                <div id="back">
                                      
                   <form method="post" action="validation.php">
                       <label style="position:absolute;top:-25px"> Email or Username<br></label>
                       <input type="text"  placeholder="Username or email" name="id" required>
                       <br>
                       <br>
                       <label style="position:absolute;top: 33px;margin-left:-99px">Password</label>
                       <br>
                       <input type="password" placeholder="Password" name="password" required>
                       <br><br>
                       <input class="btn" type="submit" value="Login">
                        <br>
                       or<br>
                       <a href="register.php"><input id="signup" type="button" value="Sign Up"></a>
                       <!--<a href="#"><h5>Forgot Password?</h5></a>-->    
                   </form>
               
            </div>
        </center>
      
    </body>
</html>