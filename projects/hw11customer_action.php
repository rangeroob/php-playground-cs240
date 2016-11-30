<html>
<head>
<title>Customer Update</title>
<http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Customer Status</h1>
<p> </p>
<?php

// this connects To database
$hostname="viera240.db.4076890.hostedresource.com";    
$username="viera240";   
$password="";    
$dbname="viera240"; 

$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {   
    die("Connection failed: " . $conn->connect_error);} 


// here are all the fields from my form - like we did earlier in the class
$custFirst = $_REQUEST["custFirst"];
$custLast = $_REQUEST["custLast"];
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZup"];
$custPhone = $_REQUEST["custPhone"];

// the date function is used near the end to set the Added Date for the record
// check out the data function docmentation to see how it is formatted
$dt = date('Y-m-d');

// now I setup a query to insert
// I must have the EXACT number of fields and in the EXACT order
// null is used in the first first to establish the auto key
$query = "insert into studentTab values (
    null,
    '$custFirst',
    '$custLast',
    '$custAddress',
    '$custCity',
    '$custState',
    '$custZip',
    '$custPhone',
    '$dt',
    null
)";

//this runs the query created above
mysqli_query($conn, $query) or
    die(mysql_error());

//this prints response back to the user with their first and last name
print "Thanks $custFirst $custLast for entering your information";

?>

<a href="../index.php">return</a>


<p>  </p>
</body>
</html>
