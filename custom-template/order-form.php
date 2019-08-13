<?php
if(isset($_POST['submit'])){
	$model = $_POST['Model'];
	$voltage = $_POST['Voltage'];
	$length = $_POST['Length'];
	$finish = $_POST['Finish'];
?>
   <span class="productcode"><?php echo $model;?> - <?php echo $voltage;?> - <?php echo $length;?> - <?php echo $finish;?></span>
<?php
}
?>
