<?php include 'db_connection.php' ?>
<?php include 'functions.php'  ?>

<?php 
       UpdateAllData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UPDATE</title>
</head>
<body>
        <form action="update.php" method="post">
          Username <br><input type="text" name="username" placeholder="Username"><br>
          <br>
          Password <br><input type="password" name="password" placeholder="password"><br>
          <br>
          <input type="submit" name="update_btn" value="Update">

          <select name="id" value="">

          	<?php 
                   ShowAllData();
          	?>
            
             
          </select>
        </form>
</body>
</html>