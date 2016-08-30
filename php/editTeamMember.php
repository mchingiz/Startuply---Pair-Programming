<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Are you sure to delete?</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
   </head>
	<body>
		<?php
			include "db.php";
			$id=$_GET['id'];
	
			$query="SELECT * FROM team WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
	
			$row=mysqli_fetch_assoc($sendQuery);
		?>
		
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="name" value="<?= $row['name'] ?>">
			</div>
			<div class="form-group">
				<input type="text" name="job" value="<?= $row['job'] ?>">
			</div>
			<div class="form-group">
				<input type="text" name="description" value="<?= $row['description'] ?>">
			</div>
			<div class="form-group">
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Gonder">
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$job=$_POST['job'];
				$description=$_POST['description'];
				
				$fileSource=$_FILES['image']['tmp_name'];
				$fileType=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
				
				$targetFile="../img/".date('dmYGis').".".$fileType;
				$filePath="img/".date('dmYGis').".".$fileType; //For calling the image from index.php
				
				$query="UPDATE team SET name='$name', job='$job', description='$description', image='$filePath' WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				
				move_uploaded_file($fileSource,$targetFile);
			}
		?>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>