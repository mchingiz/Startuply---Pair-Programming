<?php 
session_start();
if($_SESSION["login"]){ ?>
<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <style>
        body{width:900px; margin:0 auto;}
    </style>
    <body>
        <h1 class="text-center">Admin Panel</h1>
         
        <a class="btn btn-default" href="adminfeature.php">Edit Features List</a>
        <a class="btn btn-default" href="adminfeatureslider.php">Edit Features Slider</a>
        <a class="btn btn-default" href="quote.php">Edit Quotes</a>
        <a class="btn btn-default" href="menu.php">Edit Menu</a>
        <a class="btn btn-default" href="subsList.php">View Subscription List</a>
        <a class="btn btn-default" href="editcontact.php">Change Contact Details</a>
        
        <form action="logout.php" method="post">
            <input type="submit" value="Logout" class="btn btn-danger" name="logout">
        </form>
    </body>
</html>
<?php
}
else{ header("Location:admin.php");}
?>
