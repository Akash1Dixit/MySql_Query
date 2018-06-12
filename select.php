<?php include 'db_connection.php'   ?>

<?php  
   
   $query= "SELECT * FROM edwin ";
   $result = mysqli_query($connection , $query);

   if(!$result){

   	die("failed" . mysqli_error());
   }

 while($row=mysqli_fetch_assoc($result)){

 	?> 
 	<pre>
 		<?php

 	print_r($row);
 	?>
 </pre>
 <?php
 }  
  
 ?>