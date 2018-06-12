
<?php  include 'db_connection.php' ?>
<?php 
       function InsertAllData(){
       	global $connection;

       	if(isset($_POST['submit_btn'])){

	$username=$_POST['username'];
	$password=$_POST['password'];
   
   

   $username=mysqli_real_escape_string($connection,$username);
   $password=mysqli_real_escape_string($connection,$password);
   /*

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt);   */
    

      $query = "INSERT INTO edwin(username,password)  ";
      $query .= " VALUES('$username',$password) ";

      $result= mysqli_query($connection,$query);

      if(!$result){

      	die("failed" . mysql_error());
      }
      else{
      	echo "successfully insertd data into a database";
      }
}

       }

?>



<?php
  function ShowAllData(){
  	global $connection;

   $query= "SELECT * FROM edwin ";
   $result = mysqli_query($connection , $query);

   if(!$result){

   	die("failed" . mysqli_error());
   }

    while($row =mysqli_fetch_assoc($result)){

              	 $id=$row['id'];

              	   echo "<option value='$id'> $id</option>";


              }


}
?>

<?php 
      function UpdateAllData(){
      	global $connection;

      if(isset($_POST['update_btn'])){

      	$username=$_POST['username'];
      	$password=$_POST['password'];
      	$id=$_POST['id'];

      	$query = "UPDATE edwin SET ";
      	$query .= "username = '$username' ,  ";
      	$query  .= "password = '$password'  ";
      	$query   .= "WHERE id = $id  ";

      	$result = mysqli_query($connection, $query);

      	  if(!$result){
      	  	die("failed" . mysqli_error($connection));
      	  }
      	  else {
      	  	echo "successfully update";
      	  }
      }
     

      }

?>

<?php 
      function DeleteAllData(){
      	global $connection;

      if(isset($_POST['delete_btn'])){

      	$username=$_POST['username'];
      	$password=$_POST['password'];
      	$id=$_POST['id'];

      	$query = "DELETE FROM edwin ";
      	$query   .= "WHERE id = $id  ";

      	$result = mysqli_query($connection, $query);

      	  if(!$result){
      	  	die("failed" . mysqli_error($connection));
      	  }
      	  else {
      	  	echo "successfully delete";
      	  }
      }
     

      }

?>




