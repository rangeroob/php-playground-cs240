
<?php

//Connect To Database
$hostname="viera240.db.4076890.hostedresource.com";    
$username="viera240";   
$password="Nscc240!";    
$dbname="viera240";    

$conn = new mysqli($hostname, $username, $password, $dbname );
//Check Connection
if ($conn->connect_error)  {   
     die("Connection failed: " . $conn->connect_error);
} 

?> 
