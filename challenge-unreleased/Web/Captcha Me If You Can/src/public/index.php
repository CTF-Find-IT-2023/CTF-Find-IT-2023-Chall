<?php 
	session_start();

	// create a global variable named counter if it doesn't exist
	if(!isset($_SESSION["counter"])){
		$_SESSION["counter"] = 0;
	}

	// echo "<p>Correct answer: ".$_SESSION["Captcha"]."</p>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Captcha Me If You Can</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Captcha Me If You Can</h1>	
	<div class="kotak">		
 
		<p>I'm Frank Raviolli Jr., the man who can't be captcha'd. Well... kind of...</p>	
		<?php
			// show the counter
			// echo "<p>Passed: ".$_SESSION["counter"]." times</p>";
		?>
		<form action="periksa_captcha.php" method="post">
			<table align="center">						
				<tr>
					<td>Captcha</td>				
					<td><img src="captcha.php"/> </td>
				</tr>
				<td>Answer </td>
				<td><input name="nilaiCaptcha" value=""/></td>
				<tr>
					<td><input type ="submit" value="Cek Captcha"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>