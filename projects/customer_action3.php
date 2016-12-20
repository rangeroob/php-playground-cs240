<html>
<head>
<title>Customer Update 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php 

// starting with the old form
// converting it to php

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
} 

// read the action code from the list script to determine if it is an add or update
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];
// if an add, set all my input fields to null
// note for new, default the status to full-time
$custFirst = $_REQUEST["custFirst"];
$custLast = $_REQUEST["custLast"];
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZup"];
$custEmail = $_REQUEST["custEmail"];
$custPhone = $_REQUEST["custPhone"];

// the date function is used near the end to set the Added Date for the record
// check out the data function docmentation to see how it is formatted
$dt = date('Y-m-d');

if ($action == 'a') {
	$query = "insert into custTab values (
    null,
    '$custFirst',
    '$custLast',
    '$custAddress',
    '$custCity',
    '$custState',
    '$custZip',
    '$custEmail',
    '$custPhone',
    '$dt',
    null
)";
mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Thanks $custFirst for entering your information</h3>";
} 
// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update custTab
	set custFirst = '$custFirst',
		custLast = '$custLast', 
		custAddress = '$custAddress',  
		custCity = '$custCity',
		custState = '$custState',
		custZip = '$custZip',
		custEmail = '$custEmail',
		custPhone = '$custPhone',
		custDateChanged = '$dt'		
		where custNO = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
}
?>
<p><a href="customer_list3.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
