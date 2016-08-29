<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Are you sure to delete?</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
   </head>
	<body>
	<h2>Are you sure?</h2>
		<form actio="" method="post">
			<input class="btn btn-danger" type="submit" name="yes" value="yes">
			<input class="btn btn-default" type="submit" name="no" value="no">
		</form>
		<?php
			if(isset($_POST['yes'])){
				include "db.php";
				$id=$_GET['id'];

				$query="DELETE FROM menu WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				header('Location:menu.php');
			}else if(isset($_POST['no'])){
				header('Location:menu.php');
			}
		?>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>