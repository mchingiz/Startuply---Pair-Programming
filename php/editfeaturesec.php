<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Features Section - Tab 1</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
	</head>
	<body>
	<?php
		include "db.php";
		$name=$_GET['name'];
		$query="SELECT * FROM feature WHERE name='$name'";
		$sendQuery=mysqli_query($db_con,$query);
	
		$row=mysqli_fetch_assoc($sendQuery);
		
	?>
		<form action="" method="post">
			<div class="form-group">
				h3: <input type="text" name="h3" value="<?= $row['h3'] ?>">
			</div>
			<div class="form-group">
				p1: <input type="text" name="p1" value="<?= $row['p1'] ?>">
			</div>
			<div class="form-group">
				p2: <input type="text" name="p2" value="<?= $row['p2'] ?>">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" name="submit" value="Gonder">
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$h3=$_POST['h3'];
				$p1=$_POST['p1'];
				$p2=$_POST['p2'];
				echo $name;
				$query="UPDATE feature SET h3='$h3', p1='$p1', p2='$p2' WHERE name='$name'";
				$sendQuery=mysqli_query($db_con,$query);
			}
		?>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>