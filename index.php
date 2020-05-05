<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Group 6 RoboCar Page</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<div id="blue">
  <img src="" alt="">
</div>

<article class="Logo">

        <blockquote>
            <strong></strong> <br></br><br><br></br></nr> <em> </em> & <strong></strong>
        </blockquote>
        <b></b>

    </article>

 
    <form method="get" action="">
    <div class="flex-container">
        <button type="submit" class="up-arrow3" value="UP" name="up-arrow3"></button>
    </div>
    </form>

    <form method="get" action="">
    <div class="flex-container2">
         <button type="submit" class="up-arrow2" value="UP" name="up-arrow2"></button>
    </div>
    </form>

    <form method="get" action="">
    <div class="flex-container3">
         <button type="submit" class="up-arrow1" value="UP" name="up-arrow1"></button>
    </div>
    </form>

    <form method="get" action="">
    <div class="flex-container4">
        <button type="submit" class="left-arrow3" value="LEFT" name="left-arrow3"></button>
        <button type="submit" class="left-arrow2" value="LEFT" name="left-arrow2"></button>
        <button type="submit" class="left-arrow1" value="LEFT" name="left-arrow1"></button>
        <button type="submit" class="stopbutton" value="STOP" name="stopbutton"><strong></strong></button>
        <button type="submit" class="right-arrow1" value="RIGHT" name="right-arrow1"></button>
        <button type="submit" class="right-arrow2" value="RIGHT" name="right-arrow2"></button>
        <button type="submit" class="right-arrow3" value="RIGHT" name="right-arrow3"></button>
    </div>
    </form>

    <form method="get" action="">
    <div class="flex-container5">
         <button type="submit" class="down-arrow1" value="DOWN" name="up-arrow1"></button>
    </div>
    </form>

    <form method="get" action="">
    <div class="flex-container6">
         <button type="submit" class="down-arrow2" value="DOWN" name="up-arrow2"></button>
    </div>
    </form>

     <form method="get" action="">
    <div class="flex-container7">
         <button type="submit" class="down-arrow3" value="DOWN" name="up-arrow3"></button>
    </div>
    </form>




<?php 

	$setmode = shell_exec("pigs m 5 w");
	$setmode = shell_exec("pigs m 6 w");

    
    if(isset($_GET["up-arrow1"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1000");
    	$motor_two = shell_exec("pigs SERVO 6 1500");
    echo $motor_one;
    }

    if(isset($_GET["up-arrow2"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1250");
    	$motor_two = shell_exec("pigs SERVO 6 1750");
    echo $motor_one;
    }

    if(isset($_GET["up-arrow3"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1500");
    	$motor_two = shell_exec("pigs SERVO 6 2000");
    echo $motor_one;
    }

    if(isset($_GET["left-arrow1"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1000");
    	$motor_two = shell_exec("pigs SERVO 6 1500");
    echo $motor_one;
    }

    if(isset($_GET["left-arrow2"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1250");
    	$motor_two = shell_exec("pigs SERVO 6 1750");
    echo $motor_one;
    }

    if(isset($_GET["left-arrow3"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1500");
    	$motor_two = shell_exec("pigs SERVO 6 2000");
    echo $motor_one;
    }

    if(isset($_GET["right-arrow1"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1000");
    	$motor_two = shell_exec("pigs SERVO 6 1500");
    echo $motor_one;
    }

    if(isset($_GET["right-arrow2"])) {
    	$motor_1 = shell_exec("pigs SERVO 5 1250");
    	$motor_2 = shell_exec("pigs SERVO 6 1750");
    echo $motor_one;
    }

    if(isset($_GET["right-arrow3"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1500");
    	$motor_two = shell_exec("pigs SERVO 6 2000");
    echo $motor_one;
    }

    if(isset($_GET["down-arrow1"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1000");
    	$motor_two = shell_exec("pigs SERVO 6 1500");
    echo $motor_one;
    }

    if(isset($_GET["down-arrow2"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1250");
    	$motor_two = shell_exec("pigs SERVO 6 1750");
    echo $motor_one;
    }

    if(isset($_GET["down-arrow3"])) {
    	$motor_one = shell_exec("pigs SERVO 5 1500");
    	$motor_two = shell_exec("pigs SERVO 6 2000");
    echo $motor_one;
    }

      if(isset($_GET["stopbutton"])) {
    	$motor_one = shell_exec("pigs SERVO 5 0");
    	$motor_two = shell_exec("pigs SERVO 6 0");
    echo $motor_one;
    }

?>


</body>
</html>