<html>
<head>
<title>List Customers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Customers</h1>
<p><br>
  <br>
  
  
<?php

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

$query = "select * from custTab";
$result = mysqli_query($conn, $query);

// this function returns how many rows (hits) were in the query
$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";

print "<table>";
print "<tr><td><b>Last Name</b></td>";
print "<td><b>$First Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>Change</b></td>";
print "<td><b>Delete</td></b></tr>";
// and this loop proccess the records from the query
// they were written into an associative array
// and are now returned by key
// that is the $row variable seen in the code
// the results are then printed on one line
// you can pick any fields you like to print 
while($row = mysqli_fetch_assoc($result)) {
	$custNo = $row['custNo'];
    $custFirst = $row['custFirst'];
    $custLast = $row['custLast'];
    $custAddress = $row['custAddress'];
    $custZip = $row['custZip'];
// this is the same basic print line as before	
	print "$custNo $custFirst $custLast $custAddress $custZip ";
// except now we add some extra linkes to create a dynamic link to the update program
// first we are calling the update program
// note that a 'u' is passed as a parm, so the update program knows this is an update, not an add
// also the student number is passed as a separate parm  
	print "<a href=customer_update3.php?action=u&id=";
// here is the customer number
	print $custNo;
// this is the link for the user	
	print ">Change</a><br>";	
// or you could do it in a single line (commented out below)
//	print "<a href=student_update2.php?action=u&id=" . $stuID . ">Change</a><br>";	
	
}

?>
</p>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="customer_update3.php?action=a">Add a Customer</a>

<br>
<br>
<a href="../index.php">Return </a>

</body>
</html>
