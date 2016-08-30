<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Header Section</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
      <link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
   </head>
	<body>
		<h1>Edit Header Section</h1>
		<?php
			include "db.php";
			
			$query="SELECT * FROM header";
			$sendQuery=mysqli_query($db_con,$query);
			$h1=mysqli_fetch_assoc($sendQuery);
			$h3=mysqli_fetch_assoc($sendQuery);
		?>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="h1" value="<?= $h1['text'] ?>">
				<p>Wrap the text you want to be in blue with span and /span tags. Example:span launch /span</p>
			</div>
				<div class="form-group">
				<input type="text" name="h3" value="<?= $h3['text'] ?>">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" name="submit">
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$h1text=$_POST['h1'];	
				$h3text=$_POST['h3'];

				$query1="UPDATE header SET text='$h1text' WHERE id=1";
				$sendQuery=mysqli_query($db_con,$query1);

				$query2="UPDATE header SET text='$h3text' WHERE id=2";
				$sendQuery=mysqli_query($db_con,$query2);
			}
	
		?>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>