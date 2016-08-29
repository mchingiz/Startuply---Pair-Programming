<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<table class="table table-striped">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>mail</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include "db.php";
				 $sql="SELECT * FROM `row`";
	 $query=mysqli_query($db_con,$sql);
		
	 while ($row=mysqli_fetch_assoc($query)) {
	 	?>
	 	<tr>
	 	<?php
	foreach ($row as $key => $value) {
		echo "<td>";
		echo $value;
		echo "</td>";
		
	}
	
	 }
		
		?>
		</tbody>	
		</tr>

	</table>
</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>