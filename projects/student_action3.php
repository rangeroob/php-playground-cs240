<html>
<head>
<title>Student Update 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Student Status</h1>
<p>&nbsp;</p>
<?php 

// this connects To database
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
 
// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];

// here are all the fields from my form
$stuFirst = $_REQUEST["stuFirst"];
$stuLast = $_REQUEST["stuLast"];
$stuAddress = $_REQUEST["stuAddress"];
$stuZip = $_REQUEST["stuZip"];
$stuStatus = $_REQUEST["stuStatus"];
$stuEnrollAge = $_REQUEST["stuEnrollAge"];
$stuComment = $_REQUEST["stuComment"];

// the date function is used near the end to set the Added Date or changed date
$dt = date('Y-m-d');

// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
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
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Thanks $stuFirst for entering your information</h3>";
} 
// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update studentTab
		set stuFirst = '$stuFirst',
		stuLast = '$stuLast', 
		stuAddress = '$stuAddress', 
		stuZip = '$stuZip', 
		stuStatus = '$stuStatus', 
		stuEnrollAge = '$stuEnrollAge', 
		stuComment = '$stuComment',
		stuDateChanged = '$dt'		
		where stuID = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} // end u

?>

<p><a href="student_list3.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
