<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Add item to menu</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
   <link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
	</head>
	<body>
		<form action="" method="post">
		
			<div class="input-group">
				Name: <input class="form-control" type="text" name="name">
			</div>
			
			<div class="input-group">
				Link :<input class="form-control" type="text" name="link">
			</div>
			
			<div class="input-group">
				Category: <input class="form-control" type="text" name="category">
			</div>
			
			<input class="btn btn-success" type="submit" name="add" value="Add">
			<input class="btn btn-default" type="submit" name="back" value="Back">
		</form>
		<?php
			include "db.php";
			if(isset($_POST['add'])){
				$name=$_POST['name'];
				$link=$_POST['link'];
				$category=$_POST['category'];
				
				echo $name." ".$link." ".$category;
				
				$query="INSERT INTO menu (name,link,category) VALUES ('$name','$link','$category')";
				$sendQuery=mysqli_query($db_con,$query);
				
				header("Location:menu.php");
			}else if(isset($_POST['back'])){
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