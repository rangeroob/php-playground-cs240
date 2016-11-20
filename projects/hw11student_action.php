<html>
<head>
<title>Student Update</title>
<http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Student Status</h1>
<p> </p>
<?php

// this connects To database
$hostname="viera240.db.4076890.hostedresource.com";    
$username="viera240";   
$password="Nscc240!";    
$dbname="viera240"; 

$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {   
    die("Connection failed: " . $conn->connect_error);} 


// here are all the fields from my form - like we did earlier in the class
$stuFirst = $_REQUEST["stuFirst"];
$stuLast = $_REQUEST["stuLast"];
$stuAddress = $_REQUEST["stuAddress"];
$stuZip = $_REQUEST["stuZip"];
$stuStatus = $_REQUEST["stuStatus"];
$stuEnrollAge = $_REQUEST["stuEnrollAge"];
$stuComment = $_REQUEST["stuComment"];

// the date function is used near the end to set the Added Date for the record
// check out the data function docmentation to see how it is formatted
$dt = date('Y-m-d');

// now I setup a query to insert
// I must have the EXACT number of fields and in the EXACT order
// null is used in the first first to establish the auto key
$query = "insert into studentTab values (
    null,
    '$stuFirst',
    '$stuLast',
    '$stuAddress',
    '$stuZip',
    '$stuStatus',
    '$stuEnrollAge',
    '$stuComment',
    '$dt',
    null
)";

//this runs the query created above
mysqli_query($conn, $query) or
    die(mysql_error());

//this prints response back to the user with their first and last name
print "Thanks $stuFirst $stuLast for entering your information";

?>

<a href="../index.php">return</a>


<p>  </p>
</body>
</html>
