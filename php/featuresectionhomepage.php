<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Feature Section</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
   	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
	</head>
	<a href="editfeaturesec.php?name=sec1tab1">Section 1 Tab 1</a>
	<a href="editfeaturesec.php?name=sec1tab2">Section 1 Tab 2</a>
	<a href="editfeaturesec.php?name=sec2">Section 2</a>
	<a href="editfeaturesec.php?name=sec3">Section 3</a>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>