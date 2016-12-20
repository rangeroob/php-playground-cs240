<html>
<head>
<title>List Students 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Students</h1>
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
};

// the student file is sorted last name, first name
$query = "select * from studentTab order by stuLast, stuFirst";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
// print "There are currently $num students on file<br><br>";
 
print "<table>";
print "<tr><td><b>Last Name</b></td>";
print "<td><b>$First Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>Change</b></td>";
print "<td><b>Delete</td></b></tr>";

while ($row = mysqli_fetch_assoc($result)) {
	$stuID = $row['stuID'];
	$stuFirst = $row['stuFirst'];
	$stuLast = $row['stuLast'];
	$stuAddress = $row['stuAddress'];
	$stuZip = $row['stuZip'];
	print "<tr>";
	print "<td>$stuLast</td>";
	print "<td>$stuFirst</td>";
	print "<td>$stuAddress</td>";
//	print "$stuID $stuFirst $stuLast $stuAddress $stuZip ";
	print "<td><a href=student_update4.php?action=u&id=";
	print $stuID;
//  remove the <br> from this line	
	print ">Change</a></td>";	
//  and now add a second link for a delete
//	except I don't need to go to the update form
//  so I am going directly to the update program
	
	print "<td><a href=student_action4.php?action=d&id=";
	print $stuID;
	print "> Delete </a></td>";	
	print "</tr>";
}
print "</table>";
?>
</p>
<label></label>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="student_update4.php?action=a">Add a Student</a>

<br>
<br>
<a href="../index.php">Return </a>

</body>
</html>
