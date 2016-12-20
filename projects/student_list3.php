<html>
<head>
<title>List Students 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Students</h1>
<p><br>
  <br>
  
  
<?php

// this connects To database
$hostname="viera240.db.4076890.hostedresource.com";    
$username="viera240";   
$password="";    
$dbname="viera240";  
    

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ;

$query = "select * from studentTab";
$result = mysqli_query($conn, $query);

// this function returns how many rows (hits) were in the query
$num = mysqli_num_rows($result);
print "There are currently $num students on file<br><br>";

// and this loop proccess the records from the query
// they were written into an associative array
// and are now returned by key
// that is the $row variable seen in the code
// the results are then printed on one line
// you can pick any fields you like to print 
while($row = mysqli_fetch_assoc($result)) {
	$stuID = $row['stuID'];
	$stuFirst = $row['stuFirst'];
	$stuLast = $row['stuLast'];
	$stuAddress = $row['stuAddress'];
	$stuZip = $row['stuZip'];
	print "$stuID $stuFirst $stuLast $stuAddress $stuZip ";
	print "<a href=student_update3.php?action=u&id=";
	print $stuID;
//  remove the <br> from this line	
	print ">Change</a><br>";	

}

?>
</p>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="student_update3.php?action=a">Add a Student</a>

<br>
<br>
<a href="index.htm">Return </a>

</body>
</html>
