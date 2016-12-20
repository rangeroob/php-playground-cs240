<html>
<body>

<h1>List Customers</h1>
<?php

// this connects to the database, as before
$hostname="viera240.db.4076890.hostedresource.com";    
$username="viera240";   
$password="Nscc240!";    
$dbname="viera240"; 

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {   
     die("Connection failed: " . $conn->connect_error);
} 

// here is a query that will select all of the students on the table   
$query = "select * from custTab";

// this function processes the query in php
$result = mysqli_query($conn, $query);

// this function returns how many rows (hits) were in the query
$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";

// and this loop process the records from the query
// they were written into an associative array
// and are now returned by key
// that is the $row variable seen in the code
// the results are then printed on one line
// you can pick any fields you like to print
while ($row = mysqli_fetch_array($result)) {
    $custNo = $row['custNo'];
    $custFirst = $row['custFirst'];
    $custLast = $row['custLast'];
    $custAddress = $row['custAddress'];
    $custZip = $row['custZip'];
    print "$custNo $custFirst $custLast $custAddress $custZip<br>";
}

?>

<br>
<a href="../index.php">return</a>
</body>
</html>
