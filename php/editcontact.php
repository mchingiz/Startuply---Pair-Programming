<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
</head>
<body>
	<div class="container">
		<div class="col-md-offset-3">
			<form action="uploadcontact.php" method="POST" >
				<input type="text" name="mail" placeholder="mail">
				<input type="text" name="place" placeholder="place">
				<input type="text" name="phone" placeholder="phone">
				<input type="submit" name="confirm" value="confirm">
			</form>
		</div>
	</div>		
</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>