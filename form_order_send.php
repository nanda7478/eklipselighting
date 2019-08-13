<?php
	
	$to = $_POST['w'];
	$subject = "Product Order Number";
		
	$headers = "From: sales@eklipselighting.com \r\nReply-To: sales@eklipselighting.com\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1";

	ob_start();
?>
<html>
	<head>
		<style type="text/css">
			a,span
			{
				color: #F6921E;
				text-decoration: none;
			}
		
		</style>
	</head>
	<body>
		Dear Customer,<br><br>
<p>
First of all, thank you for taking the time to browse our website.
In your recent visit on our website, you took the time to create a product configuration. It is our pleasure to forward you that product code.
</p><p>
With this product code, you can order your specific product, request a quote or ask any questions you might have on the product and its accessories. 
</p><p>
Without further delays, please see below your customized product:<br><br>
<span>[<?=$_GET['product'] ?>]</span><br><br>
Should you wish more information, we invite you to use the contact information below.<br>
<br>
Email: <a href="mailto:sales@eklipselighting.com">sales@eklipselighting.com</a><br>
Phone: 1 (877) 590-0099 <br>
<br>
Thank you,
<br>
Warm Regards,<br>
<br>
<img src="http://eklipselighting.com/wp-content/uploads/2018/12/Eklipse_logo.png" /><br><br>
2090 rue Moreau, Suite 100<br>
Montréal, Québec, H1W 2M3 CANADA<br>
T. 514.590.0099 | F. 514.590.0098<br>
E. <a href="mailto:sales@eklipselighting.com">sales@eklipselighting.com</a> | W. <a href="http://eklipselighting.com">http://www.eklipselighting.com</a><br>
 
	</body>
</html>

<?php 
	$message=ob_get_clean();
	
	$mail_sent = @mail($to, $subject, $message, $headers );
	echo "<br>";
	echo $mail_sent ? "<b style='text-transform:uppercase;'>email successfully sent.</b>" : "<b style='text-transform:uppercase;'>Mail failed.</b>";
	echo "<br><a href='' onclick='$.fancybox.close()'>Close this window (X)</a>";
	
	//include ('record.php');
?>