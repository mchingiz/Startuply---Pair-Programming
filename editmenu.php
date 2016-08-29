<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<title>Update User</title>
	</head>
	<body>
	<div class="container-fluid" id="update">
	<div class="col-md-10 col-md-offset-1">
		<p>Update User</p>
		<?php
			include "db.php";
			$id=$_GET['id'];
		
			$query="SELECT * FROM menu WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
		
			$row=mysqli_fetch_assoc($sendQuery);
			$name=$row['name'];
			$link=$row['link'];
			$category=$row['category'];
		?>
		<form action="" method="post">
		
			<div class="input-group">
				<input class="form-control" type="text" name="name" value="<?=$name?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="text" name="link" value="<?=$link?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="text" name="category" value="<?=$category?>">
			</div>
			
			<input class="btn btn-success" type="submit" name="update" value="Update">
			<input class="btn btn-default" type="submit" name="back" value="Back">
		</form>
		<?php
			if(isset($_POST['update'])){
				$name=$_POST['name'];
				$link=$_POST['link'];
				$category=$_POST['category'];
				
				//echo $name." ".$surname." ".$phone;
				
				$query="UPDATE menu SET name='$name', link='$link', category='$category' WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				
				header("Location:menu.php");
			}else if(isset($_POST['back'])){
				header('Location:menu.php');
			}
		?>
		</div>
	</div>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>