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
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Period</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include "db.php";
	
					$query="SELECT * FROM packages";
					$sendQuery=mysqli_query($db_con,$query);
	
					while($row=mysqli_fetch_assoc($sendQuery)){
						echo "<tr>";
						foreach($row as $key=>$value){
							echo "<td>".$value."</td>";
						} ?>
				<td><a class="btn btn-danger" href="editsinglepackage?id=<?=$row['id']?>">Edit</a></td></tr>
				<?php	}
				?>
			</tbody>
		</table>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>