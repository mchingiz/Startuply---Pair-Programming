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
		
			$query="SELECT * FROM quote WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
		
			$row=mysqli_fetch_assoc($sendQuery);
			$name=$row['name'];
			$job=$row['job'];
			$workplace=$row['workplace'];
			$quote=$row['quote'];
		?>
		<form action="" method="post" enctype="multipart/form-data">
		
			<div class="input-group">
				<input class="form-control" type="text" name="name" value="<?=$name?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="text" name="job" value="<?=$job?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="text" name="workplace" value="<?=$workplace?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="text" name="quote" value="<?=$quote?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="file" name="img" value="<?=$quote?>">
			</div>
			
			<input class="btn btn-success" type="submit" name="update" value="Update">
			<input class="btn btn-default" type="submit" name="back" value="Back">
		</form>
		<?php
			if(isset($_POST['update'])){
				$name=$_POST['name'];
				$job=$_POST['job'];
				$workplace=$_POST['workplace'];
				$quote=$_POST['quote'];
				
				$fileSource=$_FILES["img"]["tmp_name"];
				$fileName=$_FILES["img"]["name"];
				$fileType=pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

				$targetFile="img/".date('dmYGis').".".$fileType;
			
				
				$query="UPDATE quote SET name='$name', job='$job', workplace='$workplace', quote='$quote', img='$targetFile' WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				
				move_uploaded_file($fileSource,$targetFile);
				
				header('Location:quote.php');
			}else if(isset($_POST['back'])){
				header('Location:quote.php');
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