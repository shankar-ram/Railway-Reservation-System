<?php
    session_start();

?>
<html>
<head><title>cancel</title>
    <style>
       
  .fancy {
  position: relative;
  background-color: #FFC;
  padding: 2rem;
  text-align: center;
  max-width: 500px;
}

.fancy::before {
  content: "";

  position : absolute;
  z-index  : -1;
  bottom   : 15px;
  right    : 5px;
  width    : 50%;
  top      : 80%;
  max-width: 500px;

  box-shadow: 0px 13px 10px black;
  transform: rotate(4deg);
}
.button {
	background-color: brown;
	border: 2px solid white;
	border-radius: 30px;
	text-decoration: none;
	padding: 10px 28px;
	color: white;
	margin-top: 10px;
	display: inline-block;
	&:hover {
		background-color: black;
		color: $blue;
		border: 2px solid blue;
}   
    </style>
    
    </head>
<body style="background-image: url(train.jpeg);background-repeat: no-repeat;background-size:cover">
    
    <h1 style="text-decoration-line: underline;text-align: center;color:black;
    font-size: 40PX">RAILWAY RESERVATION SYSTEM</h1>
    <div class="fancy" style="margin-left:500px;margin-top:150px">
    <h2 style="color:black">ENTER TICKET ID</h2>
    <form method="post" action="cancel.php">
    <input type="text" placeholder="Ticket id" name="ticket" style="font-size:15px">
    <br>
    <input type="submit" value="SUBMIT" class="button">
    </form>
    </div>
    
    </body>

</html>