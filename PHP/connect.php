<?php
    try{
		#	$con = new PDO('mysql:host=127.0.0.1:3306;dbname=booksdatabase','root','');
        $conn= mysqli_connect("localhost","test","test","booksdatabase");
      
        
        
   	} catch (PDOException $e) {
   		echo "Database connection error " . $e->getMessage();
        
   	}
?>