<?php include 'db_connection.php' ?>
<?php include 'functions.php'  ?>

<?php 
       DeleteAllData();
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DELETE</title>
</head>
<body>
        <form action="delete.php" method="post">
          Username <br><input type="text" name="username" placeholder="Username"><br>
          <br>
          Password <br><input type="password" name="password" placeholder="password"><br>
          <br>
          <input type="submit" name="delete_btn" value="Delete">

          <select name="id" value="">

            <?php 
                   ShowAllData();
            ?>
            
             
          </select>
        </form>
</body>
</html>