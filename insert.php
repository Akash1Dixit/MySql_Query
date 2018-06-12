<?php  include 'db_connection.php'   ?>
<?php  include 'functions.php'   ?>

<?php 
         InsertAllData();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INSERT</title>
</head>
<body>
        <form action="insert.php" method="post">
        	Username <br><input type="text" name="username" placeholder="Username"><br>
        	<br>
        	Password <br><input type="password" name="password" placeholder="password"><br>
        	<br>
        	<input type="submit" name="submit_btn">
        </form>
</body>
</html>