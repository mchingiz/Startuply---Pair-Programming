<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	</head>
	<body>
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Link</th>
				<th>Category</th>
				<th colspan="3">Operations</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include "db.php";
			
				$query=("SELECT * FROM menu");
				$sendQuery=mysqli_query($db_con,$query);
			
				while($row=mysqli_fetch_assoc($sendQuery)){
					echo "<tr>";
					foreach($row as $key => $value){
						echo "<td>".$value."</td>";
					}
					$id=$row['id']; ?>
					<td>
						<a class='btn btn-success' href='editmenu.php?id=<?= $id ?>'>Edit</a>
					</td>
					<td>
						<a class='btn btn-danger' href='deletemenu.php?id=<?= $id ?>'>Delete</a>
					</td>
					<?php echo "</tr>";
				}
				
			?>
			</tbody>
		</table>
		<a class="btn btn-default" href="menuadd.php">Add new item</a>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>