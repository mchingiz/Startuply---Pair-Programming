<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
	</head>
	<body>
		<?php
			include "db.php";
			$id=$_GET['id'];
	
			$query="SELECT * FROM packages WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
	
			$row=mysqli_fetch_assoc($sendQuery);
	
			
		?>
		<form action="" method="post">
			<div class="form-group">
				Name: <input type="text" name="name" value="<?= $row['name'] ?>">
			</div>
			<div class="form-group">
				Price: <input type="number" name="price" value="<?= $row['price'] ?>">
			</div>
			<div class="form-group">
				Period: <input type="text" name="period" value="<?= $row['period'] ?>">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Gonder">
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$price=$_POST['price'];
				$period=$_POST['period'];
				
				$query="UPDATE packages SET name='$name', price=$price, period='$period' WHERE id=$id";
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