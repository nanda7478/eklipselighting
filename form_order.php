<div class="form_inner_content" style="width: 500px; padding: 0 10px 20px 10px;">
<div class="header_heading">	
<div class="icon i_specs_order"></div>
<h1>Your ordering code</h1>
</div>

<?php
if($_POST['Model_name'] == "Lifeline"){
$voltageerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
} else {
$finish = $_POST['Finish'];
}	
?>
<?php if($voltageerror || $finish = "") { ?>
<div class="error">
	<ul>
		<li><?php echo $voltageerror;?></li>
		<li><?php echo $finisherror;?></li>
	</ul>
</div>
<?php } else { ?>
<?php

	$model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$length = $_POST['Length'];
	$finish = $_POST['Finish'];
?>
 <div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $finish;?></div>
 <a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=43/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
 <?php } } ?>


 <?php 
if($_POST['Model_name'] == "Flow")
{
?>
<?php
$voltageerror = "";
$finisherror = "";
$wattagerror = "";
$lighterror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$anglerror = "";
$applicationerror = "";
$filmerror = "";
$colorerror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}	

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
}	

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
}	

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
}	

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}	

if(!isset($_POST['Angle'])) 
{ 
  $anglerror =  "MISSING INFORMATION: Angle";
}else {
$angle = $_POST['Angle'];
}	

if(!isset($_POST['Application'])) 
{ 
  $applicationerror =  "MISSING INFORMATION: Application";
}else {
$application = $_POST['Application'];
}	

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
}	

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}
?>
<?php if($voltageerror || $finisherror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $anglerror || $applicationerror || $filmerror || $colorerror = "") { ?>
  <div class="error">
	<ul>
		<li><?php echo $voltageerror;?></li>
		<li><?php echo $finisherror;?></li>
		<li><?php echo $wattagerror;?></li>
		<li><?php echo $lighterror;?></li>
		<li><?php echo $endcaperror;?></li>
		<li><?php echo $wiringerror;?></li>
		<li><?php echo $opticserror;?></li>
		<li><?php echo $anglerror;?></li>
		<li><?php echo $applicationerror;?></li>
		<li><?php echo $filmerror;?></li>
		<li><?php echo $colorerror;?></li>
	</ul>
</div>
<?php } else { ?>
 <?php
    $model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$wattage = $_POST['WattageFoot'];
	$light = $_POST['LightEngine'];
	$length = $_POST['Length'];
	$endcap = $_POST['EndCap'];
	$wiring = $_POST['Wiring'];
	$optics = $_POST['Optics'];
	$angle = $_POST['Angle'];
	$application = $_POST['Application'];
	$film = $_POST['Film'];
	$color = $_POST['Color'];
	$finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>
<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=7/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>
 

<?php
if($_POST['Model_name'] == "Flow Cove"){

$voltageerror = "";
$finisherror = "";
$wattagerror = "";
$lighterror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$anglerror = "";
$applicationerror = "";
$filmerror = "";
$colorerror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}	

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
}	

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
}	

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
}	

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}	

if(!isset($_POST['Angle'])) 
{ 
  $anglerror =  "MISSING INFORMATION: Angle";
}else {
$angle = $_POST['Angle'];
}	

if(!isset($_POST['Application'])) 
{ 
  $applicationerror =  "MISSING INFORMATION: Application";
}else {
$application = $_POST['Application'];
}	

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
}	

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}
?>

<?php if($voltageerror || $finisherror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $anglerror || $applicationerror || $filmerror || $colorerror = "") { ?>
  <div class="error">
	<ul>
		<li><?php echo $voltageerror;?></li>
		<li><?php echo $finisherror;?></li>
		<li><?php echo $wattagerror;?></li>
		<li><?php echo $lighterror;?></li>
		<li><?php echo $endcaperror;?></li>
		<li><?php echo $wiringerror;?></li>
		<li><?php echo $opticserror;?></li>
		<li><?php echo $anglerror;?></li>
		<li><?php echo $applicationerror;?></li>
		<li><?php echo $filmerror;?></li>
		<li><?php echo $colorerror;?></li>
	</ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$wattage = $_POST['WattageFoot'];
	$light = $_POST['LightEngine'];
	$length = $_POST['Length'];
	$endcap = $_POST['EndCap'];
	$wiring = $_POST['Wiring'];
	$optics = $_POST['Optics'];
	$angle = $_POST['Angle'];
	$application = $_POST['Application'];
	$film = $_POST['Film'];
	$color = $_POST['Color'];
	$finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>
<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=31/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Horizon")
{
$voltageerror = "";
$finisherror = "";
$wattagerror = "";
$lighterror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}	

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
}	

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
}	

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
}	

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}	

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
}	

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}
?>

<?php if($voltageerror || $finisherror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror = "") { ?>
  <div class="error">
	<ul>
		<li><?php echo $voltageerror;?></li>
		<li><?php echo $finisherror;?></li>
		<li><?php echo $wattagerror;?></li>
		<li><?php echo $lighterror;?></li>
		<li><?php echo $endcaperror;?></li>
		<li><?php echo $wiringerror;?></li>
		<li><?php echo $opticserror;?></li>
		<li><?php echo $filmerror;?></li>
		<li><?php echo $colorerror;?></li>
	</ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$wattage = $_POST['WattageFoot'];
	$light = $_POST['LightEngine'];
	$length = $_POST['Length'];
	$endcap = $_POST['EndCap'];
	$wiring = $_POST['Wiring'];
	$optics = $_POST['Optics'];
	$film = $_POST['Film'];
	$color = $_POST['Color'];
	$finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=2/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Horizon Mini"){
  $voltageerror = "";
  $wattagerror = "";
  $lighterror = "";
  $endcaperror = "";
  $wiringerror = "";
  $opticserror = "";
  $filmerror = "";
  $colorerror = "";
  $finisherror = "";

  if(!isset($_POST['Voltage'])){
  	$voltageerror = "MISSING INFORMATION: Voltage";
  } else {
  	$voltage = $_POST['Voltage'];
  }
  if(!isset($_POST['WattageFoot'])){
  	$wattagerror = "MISSING INFORMATION: Wattage / Foot";
  } else {
  	$wattage = $_POST['WattageFoot'];
  }
  if(!isset($_POST['LightEngine'])){
  	$lighterror = "MISSING INFORMATION: Light Engine";
  } else {
  	$light = $_POST['LightEngine'];
  }
  if(!isset($_POST['EndCap'])){
  	$endcaperror = "MISSING INFORMATION: End Cap";
  } else {
  	$endcap = $_POST['EndCap'];
  }
  if(!isset($_POST['Wiring'])){
  	$wiringerror = "MISSING INFORMATION: Wiring";
  } else {
  	$wiring = $_POST['Wiring'];
  }
  if(!isset($_POST['Optics'])){
  	$opticserror = "MISSING INFORMATION: Optics";
  } else {
  	$optics = $_POST['Optics'];
  }
  if(!isset($_POST['Film'])){
  	$filmerror = "MISSING INFORMATION: Film";
  } else {
  	$film = $_POST['Film'];
  }
  if(!isset($_POST['Color'])){
  	$colorerror = "MISSING INFORMATION: Color";
  } else {
  	$color = $_POST['Color'];
  }
  if(!isset($_POST['Finish'])){
  	$finisherror = "MISSING INFORMATION: Finish";
  } else {
  	$finish = $_POST['Finish'];
  }

  if($voltageerror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { 
  ?>
  <div class="error">
  	<ul>
  		<li><?php echo $voltageerror;?></li>
  		<li><?php echo $wattagerror;?></li>
  		<li><?php echo $lighterror;?></li>
  		<li><?php echo $endcaperror;?></li>
  		<li><?php echo $wiringerror;?></li>
  		<li><?php echo $opticserror;?></li>
  		<li><?php echo $filmerror;?></li>
  		<li><?php echo $colorerror;?></li>
  		<li><?php echo $finisherror;?></li>
  	</ul>
  </div>
<?php } else { ?>
<?php
  $model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$wattage = $_POST['WattageFoot'];
	$light = $_POST['LightEngine'];
	$length = $_POST['Length'];
	$endcap = $_POST['EndCap'];
	$wiring = $_POST['Wiring'];
	$optics = $_POST['Optics'];
	$film = $_POST['Film'];
	$color = $_POST['Color'];
	$finish = $_POST['Finish'];
?>
 <div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

 <a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=9/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>

<?php
 }
}
?>

<?php
 if($_POST['Model_name'] == "Horizon V"){

 	$voltageerror = "";
 	$wattagerror = "";
 	$lighterror = "";
 	$endcaperror = "";
 	$wiringerror = "";
 	$opticserror = "";
 	$diffusererror = "";
 	$colorerror = "";
 	$finisherror = "";

 	if(!isset($_POST['Voltage'])){
 		$voltageerror = "MISSING INFORMATION: Voltage";
 	} else {
 		$voltage = $_POST['Voltage'];
 	}
 	if(!isset($_POST['WattageFoot'])){
 		$wattagerror = "MISSING INFORMATION: Wattage / Foot";
 	} else {
 		$wattage = $_POST['WattageFoot'];
 	}
 	if(!isset($_POST['LightEngine'])){
 		$lighterror = "MISSING INFORMATION: Light Engine";
 	} else {
 		$light = $_POST['LightEngine'];
 	}
 	if(!isset($_POST['EndCap'])){
 		$endcaperror = "MISSING INFORMATION: End Cap";
 	} else{
 		$endcap = $_POST['EndCap'];
 	}
 	if(!isset($_POST['Wiring'])){
 		$wiringerror = "MISSING INFORMATION: Wiring";
 	} else {
 		$wiring = $_POST['Wiring'];
 	}
 	if(!isset($_POST['Optics'])){
 		$opticserror = "MISSING INFORMATION: Optics";
 	} else {
 		$optics = $_POST['Optics'];
 	}
 	if(!isset($_POST['Diffuser'])){
 		$diffusererror = "MISSING INFORMATION: Diffuser";
 	} else {
 		$diffuser = $_POST['Diffuser'];
 	}
 	if(!isset($_POST['Color'])){
 		$colorerror = "MISSING INFORMATION: Color";
 	} else {
 		$color = $_POST['Color'];
 	}
 	if(!isset($_POST['Finish'])){
 		$finisherror = "MISSING INFORMATION: Finish";
 	} else {
 		$finish = $_POST['Finish'];
 	}
 	if($voltageerror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $diffusererror || $colorerror || $finisherror = "") {
 	?>
 	<div class="error">
  	<ul>
  		<li><?php echo $voltageerror;?></li>
  		<li><?php echo $wattagerror;?></li>
  		<li><?php echo $lighterror;?></li>
  		<li><?php echo $endcaperror;?></li>
  		<li><?php echo $wiringerror;?></li>
  		<li><?php echo $opticserror;?></li>
  		<li><?php echo $diffusererror;?></li>
  		<li><?php echo $colorerror;?></li>
  		<li><?php echo $finisherror;?></li>
  	</ul>
  </div>
<?php } else { ?>
<?php
  $model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$wattage = $_POST['WattageFoot'];
	$light = $_POST['LightEngine'];
	$length = $_POST['Length'];
	$endcap = $_POST['EndCap'];
	$wiring = $_POST['Wiring'];
	$optics = $_POST['Optics'];
	$diffuser = $_POST['Diffuser'];
	$color = $_POST['Color'];
	$finish = $_POST['Finish'];
?>
 <div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $diffuser;?> - <?php echo $color;?> - <?php echo $finish;?></div>

 <a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=32/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $diffuser;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $diffuser;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
 <?php
  }	
 }
 ?>

<?php
if($_POST['Model_name'] == "StreamLine")
{
$voltageerror = "";
$finisherror = "";
$wattagerror = "";
$lighterror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$anglerror = "";
$applicationerror = "";
$stemerror = "";
$filmerror = "";
$colorerror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
} 

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Angle'])) 
{ 
  $anglerror =  "MISSING INFORMATION: Angle";
}else {
$angle = $_POST['Angle'];
} 

if(!isset($_POST['Application'])) 
{ 
  $applicationerror =  "MISSING INFORMATION: Application";
}else {
$application = $_POST['Application'];
} 

if(!isset($_POST['Stem'])) 
{ 
  $stemerror =  "MISSING INFORMATION: Stem";
}else {
$stem = $_POST['Stem'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $anglerror || $applicationerror || $stemerror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $anglerror;?></li>
    <li><?php echo $stemerror;?></li>
    <li><?php echo $applicationerror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $angle = $_POST['Angle'];
  $application = $_POST['Application'];
  $stem = $_POST['Stem'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $stem;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=12/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $stem;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $stem;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Flow Flex")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$segmentrror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$anglerror = "";
$applicationerror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
} 

if(!isset($_POST['Segment'])) 
{ 
  $segmenterror =  "MISSING INFORMATION: Segment";
}else {
$segment = $_POST['Segment'];
} 

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Angle'])) 
{ 
  $anglerror =  "MISSING INFORMATION: Angle";
}else {
$angle = $_POST['Angle'];
} 

if(!isset($_POST['Application'])) 
{ 
  $applicationerror =  "MISSING INFORMATION: Application";
}else {
$application = $_POST['Application'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $segmenterror || $endcaperror || $wiringerror || $opticserror || $anglerror || $applicationerror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $segmenterror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $anglerror;?></li>
    <li><?php echo $applicationerror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $segment = $_POST['Segment'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $angle = $_POST['Angle'];
  $application = $_POST['Application'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=19/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $angle;?> - <?php echo $application;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Nixe Flex")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$radiuserror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
} 

if(!isset($_POST['MinimumRadiusCurve'])) 
{ 
  $radiuserror =  "MISSING INFORMATION: Minimum Radius Curve";
}else {
$radius = $_POST['MinimumRadiusCurve'];
} 

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $radiuserror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $radiuserror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $radius = $_POST['MinimumRadiusCurve'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $radius;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=47/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $radius;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $radius;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Horizon Flex")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$segmentrror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
} 

if(!isset($_POST['Segment'])) 
{ 
  $segmenterror =  "MISSING INFORMATION: Segment";
}else {
$segment = $_POST['Segment'];
} 

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $segmenterror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $segmenterror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $segment = $_POST['Segment'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=22/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Horizon Mini Flex")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$segmentrror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
} 

if(!isset($_POST['Segment'])) 
{ 
  $segmenterror =  "MISSING INFORMATION: Segment";
}else {
$segment = $_POST['Segment'];
} 

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $segmenterror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $segmenterror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $segment = $_POST['Segment'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=34/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Horizon Wet")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
}

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=24/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Horizon Mini Wet")
{
$voltageerror = "";
$wattagerror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $length = $_POST['Length'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=28/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Horizon Contour")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$segmentrror = "";
$wiringerror = "";
$opticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
} 

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
} 

if(!isset($_POST['Segment'])) 
{ 
  $segmenterror =  "MISSING INFORMATION: Segment";
}else {
$segment = $_POST['Segment'];
}  

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
} 

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Film";
}else {
$film = $_POST['Film'];
} 

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $lighterror || $segmenterror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $lighterror;?></li>
    <li><?php echo $segmenterror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filmerror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $length = $_POST['Length'];
  $segment = $_POST['Segment'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=37/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $length;?> - <?php echo $segment;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Edge")
{
$voltageerror = "";
$wattagerror = "";
$endcaperror = "";
$wiringerror = "";
$opticserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
} 

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
} 

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $endcaperror || $wiringerror || $opticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $finisherror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $endcaperror;?></li>
    <li><?php echo $wiringerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $colorerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $length = $_POST['Length'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $optics = $_POST['Optics'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=38/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Orion 4")
{
$voltageerror = "";
$wattagerror = "";
$opticserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $opticserror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $optics = $_POST['Optics'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=4/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Orion 4+")
{
$voltageerror = "";
$wattagerror = "";
$opticserror = "";
$filtererror = "";
$accessorieserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Filter'])) 
{ 
  $filtererror =  "MISSING INFORMATION: Filter";
}else {
$filter = $_POST['Filter'];
}

if(!isset($_POST['Accessories'])) 
{ 
  $accessorieserror =  "MISSING INFORMATION: Accessories";
}else {
$accessories = $_POST['Accessories'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattagerror || $opticserror || $filtererror || $accessorieserror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $wattagerror;?></li>
    <li><?php echo $opticserror;?></li>
    <li><?php echo $filtererror;?></li>
    <li><?php echo $accessorieserror;?></li>
    <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $optics = $_POST['Optics'];
  $filter = $_POST['Filter'];
  $accessories = $_POST['Accessories'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $$filter;?> - <?php echo $accessories;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=14/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $$filter;?> - <?php echo $accessories;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $$filter;?> - <?php echo $accessories;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Latitude Rail")
{
$voltageerror = "";
$accessorieserror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['AccessoriesType'])) 
{ 
  $accessorieserror =  "MISSING INFORMATION: Accessories Type";
}else {
$accessories = $_POST['AccessoriesType'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $accessorieserror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $accessorieserror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $length = $_POST['Length'];
  $accessories = $_POST['AccessoriesType'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $accessories;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=40/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $accessories;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $accessories;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Light Manager")
{
$voltageerror = "";
$powererror = "";
$AGPlugTypeerror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['Power'])) 
{ 
  $powererror =  "MISSING INFORMATION: Power";
}else {
$power = $_POST['Power'];
}

if(!isset($_POST['AGPlugType'])) 
{ 
  $AGPlugTypeerror =  "MISSING INFORMATION: AG Plug Type";
}else {
$AGPlugType = $_POST['AGPlugType'];
}
?>

<?php if($voltageerror || $powererror || $AGPlugTypeerror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $powererror;?></li>
     <li><?php echo $AGPlugTypeerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $power = $_POST['Power'];
  $AGPlugType = $_POST['AGPlugType'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $power;?> - <?php echo $AGPlugType;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=17/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $power;?> - <?php echo $AGPlugType;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $power;?> - <?php echo $AGPlugType;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "PSB")
{
$voltageerror = "";
$powererror = "";
$AGPlugTypeerror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['Power'])) 
{ 
  $powererror =  "MISSING INFORMATION: Power";
}else {
$power = $_POST['Power'];
}

if(!isset($_POST['AGPlugType'])) 
{ 
  $AGPlugTypeerror =  "MISSING INFORMATION: AG Plug Type";
}else {
$AGPlugType = $_POST['AGPlugType'];
}
?>

<?php if($voltageerror || $powererror || $AGPlugTypeerror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $powererror;?></li>
     <li><?php echo $AGPlugTypeerror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $power = $_POST['Power'];
  $AGPlugType = $_POST['AGPlugType'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $power;?> - <?php echo $AGPlugType;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=15/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $power;?> - <?php echo $AGPlugType;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $power;?> - <?php echo $AGPlugType;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Pixis Lifeline")
{
$voltageerror = "";
$wattageheaderror = "";
$opticserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageHead'])) 
{ 
  $wattageheaderror =  "MISSING INFORMATION: Wattage / Head";
}else {
$wattage = $_POST['WattageHead'];
}

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}
?>

<?php if($voltageerror || $wattageheaderror || $opticserror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $wattageheaderror;?></li>
     <li><?php echo $opticserror;?></li>
     <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageHead'];
  $optics = $_POST['Optics'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];
?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=42/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Mili")
{
$voltageerror = "";
$wattagerror = "";
$finisherror = "";
$resolutionerror = "";
$colorerror = "";
$mountingerror = "";
$wireexiterror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

if(!isset($_POST['Resolution'])) 
{ 
  $resolutionerror =  "MISSING INFORMATION: Resolution";
}else {
$resolution = $_POST['Resolution'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Mounting'])) 
{ 
  $mountingerror =  "MISSING INFORMATION: Mounting";
}else {
$mounting = $_POST['Mounting'];
}

if(!isset($_POST['Wireexit'])) 
{ 
  $wireexiterror =  "MISSING INFORMATION: Wireexit";
}else {
$wireexit = $_POST['Wireexit'];
}

?>

<?php if($voltageerror || $wattagerror || $finisherror || $resolutionerror || $colorerror || $mountingerror || $wireexiterror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $wattagerror;?></li>
     <li><?php echo $finisherror;?></li>
     <li><?php echo $resolutionerror;?></li>
     <li><?php echo $colorerror;?></li>
     <li><?php echo $mountingerror;?></li>
     <li><?php echo $wireexiterror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $length = $_POST['Length'];
  $finish = $_POST['Finish'];
  $resolution = $_POST['Resolution'];
  $color = $_POST['Color'];
  $mounting = $_POST['Mounting'];
  $wireexit = $_POST['Wireexit'];

?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $finish;?> - <?php echo $resolution;?> - <?php echo $color;?> - <?php echo $mounting;?> - <?php echo $wireexit;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=44/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $finish;?> - <?php echo $resolution;?> - <?php echo $color;?> - <?php echo $mounting;?> - <?php echo $wireexit;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $finish;?> - <?php echo $resolution;?> - <?php echo $color;?> - <?php echo $mounting;?> - <?php echo $wireexit;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Pixis Custom")
{
$voltageerror = "";
$WattageHeaderror = "";
$Headserror = "";
$Stemerror = "";
$opticserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageHead'])) 
{ 
  $WattageHeaderror =  "MISSING INFORMATION: Wattage / Head";
}else {
$WattageHead = $_POST['WattageHead'];
}

if(!isset($_POST['Heads'])) 
{ 
  $Headserror =  "MISSING INFORMATION: Heads";
}else {
$heads = $_POST['Heads'];
}

if(!isset($_POST['OverallStemHeight'])) 
{ 
  $Stemerror =  "MISSING INFORMATION: OverallStemHeight";
}else {
$stem = $_POST['OverallStemHeight'];
}

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

?>

<?php if($voltageerror || $WattageHeaderror || $Headserror || $Stemerror || $opticserror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $WattageHeaderror;?></li>
     <li><?php echo $Headserror;?></li>
     <li><?php echo $Stemerror;?></li>
     <li><?php echo $opticserror;?></li>
     <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $WattageHead = $_POST['WattageHead'];
  $heads = $_POST['Heads'];
  $stem = $_POST['OverallStemHeight'];
  $optics = $_POST['Optics'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];

?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $heads;?> - <?php echo $stem;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=41/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $heads;?> - <?php echo $stem;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $heads;?> - <?php echo $stem;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>

<?php
if($_POST['Model_name'] == "Pixis Plug And Play")
{
$voltageerror = "";
$WattageHeaderror = "";
$opticserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageHead'])) 
{ 
  $WattageHeaderror =  "MISSING INFORMATION: Wattage / Head";
}else {
$WattageHead = $_POST['WattageHead'];
}

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

?>

<?php if($voltageerror || $WattageHeaderror || $opticserror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $WattageHeaderror;?></li>
     <li><?php echo $opticserror;?></li>
     <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $WattageHead = $_POST['WattageHead'];
  $optics = $_POST['Optics'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];

?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=48/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Pixis Stem")
{
$voltageerror = "";
$WattageHeaderror = "";
$StemHeadrror = "";
$opticserror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageHead'])) 
{ 
  $WattageHeaderror =  "MISSING INFORMATION: Wattage / Head";
}else {
$WattageHead = $_POST['WattageHead'];
}

if(!isset($_POST['StemHead'])) 
{ 
  $StemHeadrror =  "MISSING INFORMATION: Stem Head";
}else {
$StemHead = $_POST['StemHead'];
}

if(!isset($_POST['Optics'])) 
{ 
  $opticserror =  "MISSING INFORMATION: Optics";
}else {
$optics = $_POST['Optics'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

?>

<?php if($voltageerror || $WattageHeaderror || $StemHeadrror || $opticserror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $WattageHeaderror;?></li>
     <li><?php echo $StemHeadrror;?></li>
     <li><?php echo $opticserror;?></li>
     <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $WattageHead = $_POST['WattageHead'];
  $Length = $_POST['Length'];
  $StemHead = $_POST['StemHead'];
  $optics = $_POST['Optics'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];

?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $Length;?> - <?php echo $StemHead;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=49/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $Length;?> - <?php echo $StemHead;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $WattageHead;?> - <?php echo $Length;?> - <?php echo $StemHead;?> - <?php echo $optics;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Nixe")
{
$voltageerror = "";
$wattagerror = "";
$lighterror = "";
$endcaperror = "";
$wiringerror = "";
$LinearOpticserror = "";
$filmerror = "";
$colorerror = "";
$finisherror = "";
if(!isset($_POST['Voltage']))
{
  $voltageerror =  "MISSING INFORMATION: Voltage";
} else {
$voltage = $_POST['Voltage'];
}

if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}

if(!isset($_POST['LightEngine'])) 
{ 
  $lighterror =  "MISSING INFORMATION: Light Engine";
}else {
$light = $_POST['LightEngine'];
}

if(!isset($_POST['EndCap'])) 
{ 
  $endcaperror =  "MISSING INFORMATION: End Cap";
}else {
$endcap = $_POST['EndCap'];
}

if(!isset($_POST['Wiring'])) 
{ 
  $wiringerror =  "MISSING INFORMATION: Wiring";
}else {
$wiring = $_POST['Wiring'];
}

if(!isset($_POST['LinearOptics'])) 
{ 
  $LinearOpticserror =  "MISSING INFORMATION: Linear Optics";
}else {
$LinearOptics = $_POST['LinearOptics'];
}

if(!isset($_POST['Film'])) 
{ 
  $filmerror =  "MISSING INFORMATION: Linear Film";
}else {
$film = $_POST['Film'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

?>

<?php if($voltageerror || $wattagerror || $lighterror || $endcaperror || $wiringerror || $LinearOpticserror || $filmerror || $colorerror || $finisherror = "") { ?>
  <div class="error">
  <ul>
    <li><?php echo $voltageerror;?></li>
    <li><?php echo $wattagerror;?></li>
     <li><?php echo $lighterror;?></li>
     <li><?php echo $endcaperror;?></li>
     <li><?php echo $wiringerror;?></li>
     <li><?php echo $LinearOpticserror;?></li>
     <li><?php echo $filmerror;?></li>
     <li><?php echo $colorerror;?></li>
     <li><?php echo $finisherror;?></li>
  </ul>
</div>
<?php } else { ?>
 <?php
  $model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $light = $_POST['LightEngine'];
  $Length = $_POST['Length'];
  $endcap = $_POST['EndCap'];
  $wiring = $_POST['Wiring'];
  $LinearOptics = $_POST['LinearOptics'];
  $film = $_POST['Film'];
  $color = $_POST['Color'];
  $finish = $_POST['Finish'];

?>
<div class="code-generatior"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $Length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $LinearOptics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=49/<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $Length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $LinearOptics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $light;?> - <?php echo $Length;?> - <?php echo $endcap;?> - <?php echo $wiring;?> - <?php echo $LinearOptics;?> - <?php echo $film;?> - <?php echo $color;?> - <?php echo $finish;?>')" type="button"><div id="result"></div></form>
<?php } } ?>


<?php
if($_POST['Model_name'] == "Adena")
{
/*$voltageerror = "";
$wattagerror = "";
$finisherror = "";
$resolutionrror = "";
$colorerror = "";
$wireexiterror = "";*/
$formcolumnerror = "";
if(!isset($_POST['form_column']))
{
  $formcolumnerror =  "MISSING INFORMATION";
} else {
$form_column = $_POST['form_column'];
}

/*if(!isset($_POST['WattageFoot'])) 
{ 
  $wattagerror =  "MISSING INFORMATION: Wattage / Foot";
}else {
$wattage = $_POST['WattageFoot'];
}
if(!isset($_POST['Finish'])) 
{ 
  $finisherror =  "MISSING INFORMATION: Finish";
}else {
$finish = $_POST['Finish'];
}

if(!isset($_POST['Resolution'])) 
{ 
  $resolutionrror =  "MISSING INFORMATION: Resolution";
}else {
$resolution = $_POST['Resolution'];
}

if(!isset($_POST['Color'])) 
{ 
  $colorerror =  "MISSING INFORMATION: Color";
}else {
$color = $_POST['Color'];
}

if(!isset($_POST['Wireexit'])) 
{ 
  $wireexiterror =  "MISSING INFORMATION: Wireexit";
}else {
$wireexit = $_POST['Wireexit'];
}*/


?>

<?php if(isset($_POST['form_column'])) { ?>
 

 <?php
  /*$model = $_POST['Model'];
  $voltage = $_POST['Voltage'];
  $wattage = $_POST['WattageFoot'];
  $length = $_POST['Length'];
  $StemHeight = $_POST['StemHeight'];
  $finish = $_POST['Finish'];
  $resolution = $_POST['Resolution'];
  $color = $_POST['Color'];
  $wireexit = $_POST['Wireexit'];*/
  $form_column = $_POST['form_column'];

?>
<div class="code-generatior"><!-- <?php echo $model;?> - <?php echo $voltage;?> - <?php echo $wattage;?> - <?php echo $length;?> - <?php echo $StemHeight;?> - <?php echo $finish;?> - <?php echo $resolution;?> - <?php echo $color;?> - <?php echo $wireexit;?>  --><?php $num_of_items = count($form_column);
                      $num_count = 0; 
                      foreach($form_column as $col) { ?>
                      <?php echo $col;?> 
                      <?php $num_count = $num_count + 1;
                       if ($num_count < $num_of_items) {
                         echo " - ";
                       } ?> <?php } ?></div>

<a class="addtobasket" href="http://eklipselighting.com/request-a-quote/?id=46/<?php $num_of_items = count($form_column);
                      $num_count = 0; 
                      foreach($form_column as $col) { ?>
                      <?php echo $col;?> 
                      <?php $num_count = $num_count + 1;
                       if ($num_count < $num_of_items) {
                         echo " - ";
                       } ?> <?php } ?>">+<span>Add this product<br> to your quote</span></a>

   <h2>Email this quote :</h2>
   <form name="f1">
   Your email : 
   <input name="word" type="text">
   <input value="Send" onclick="JavaScript:xmlhttpPost('http://eklipselighting.com/wp-content/themes/eklipselighting/form_order_send.php?product=<?php $num_of_items = count($form_column);
      $num_count = 0; foreach($form_column as $col) { ?> <?php echo $col;?> <?php $num_count = $num_count + 1;
                       if ($num_count < $num_of_items) {
                         echo " - ";
                       } ?> <?php } ?>')" type="button"><div id="result"></div></form>
<?php } else { ?>

  <div class="error">
  <ul>
    <li><?php echo 'MISSING INFORMATION';?></li>
  </ul>
</div>
<?php } } ?>


</div>