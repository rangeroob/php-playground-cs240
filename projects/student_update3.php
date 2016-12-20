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
} 

$action = $_REQUEST["action"];
if ($action == 'a') {
	$stuFirst = null;
	$stuLast = null;
	$stuAddress = null;
	$stuZip = null;
	$stuEnrollAge = null;
	$stuComment = null;
	$stuStatus = "f";
 } else {
	$id = $_REQUEST["id"];
	 	$query = "select * from studentTab where stuID = $id";
		$result = mysqli_query($conn, $query)
			or die(mysqli_error());
		$row = mysqli_fetch_assoc($result);
		$stuFirst = $row['stuFirst'];  
		$stuLast = $row['stuLast'];  
		$stuAddress = $row['stuAddress'];  
		$stuZip = $row['stuZip'];
		$stuEnrollAge = $row['stuEnrollAge'];
		$stuComment = $row['stuComment'];
		$stuStatus = $row['stuStatus'];
} // end if

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<title>Student Entry 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<h1>Please Enter Student Information</h1>
<form action="student_action3.php" method="get" name="form1" onSubmit="MM_validateForm('fname','','R','lname','','R','address','','R','city','','R','state','','R','zip','','RisNum','email','','RisEmail','phone','','RisNum');return document.MM_returnValue">
  <table width="59%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="28%"><font size="4">First Name</font></td>
      <td width="72%"><input name="stuFirst" type="text" id="stuFirst" value="<?php echo $stuFirst;?>" size="20" maxlength="20"></td>
    </tr>
    <tr> 
      <td><font size="4">Last Name</font></td>
      <td><input name="stuLast" type="text" id="stuLast" value="<?php echo $stuLast;?>" size="25" maxlength="25"></td>
    </tr>
    <tr> 
      <td><font size="4">Address</font></td>
      <td><input name="stuAddress" type="text" id="stuAddress" value="<?php echo $stuAddress;?>" size="35" maxlength="35"></td>
    </tr>
    <tr> 
      <td><font size="4">Zip</font></td>
      <td><input name="stuZip" type="text" id="stuZip" value="<?php echo $stuZip;?>" size="8" maxlength="5"></td>
    </tr>
    <tr>
      <td><font size="4">Status</font></td>
      <td><p>
        <label>
          <input name="stuStatus" type="radio" <?php if ($stuStatus == "f") {echo ' checked=checked ';} ?> value="f" >
          Full-Time</label>
        <br>
        <label>
          <input type="radio" name="stuStatus" <?php if ($stuStatus != "f") {echo ' checked=checked ';} ?> value="p" >
          Part-Time</label>
        <br>
      </p></td>
    </tr>
    <tr> 
      <td><font size="4">Age at Enrollment </font></td>
      <td><input name="stuEnrollAge" type="text" id="stuEnrollAge" value="<?php echo $stuEnrollAge;?>" size="5" maxlength="2"></td>
    </tr>
    <tr> 
      <td><font size="4">Comment</font></td>
      <td><textarea name="stuComment" id="stuComment" cols="45" rows="3"><?php echo $stuComment;?></textarea></td>
    </tr>
    <tr> 
      <td>
      <script type="text/javascript">
 
		$('form input[type=submit]')
		.before('<div>Are you a human? <input type="checkbox" name="captcha" /></div>');
 
		</script>
      </td>
    </tr>    
    <tr> 
      <td>
      <!-- this bit of code passes the action and the id to the update program -->
      <!-- I use php to assign the proper values to each parm -->
     
      &nbsp;<input name="action" type="hidden" id="action" value="<?php echo $action;?>" />
      <input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
      <td><input type="submit" name="Submit" value="Submit">        </td>
    </tr>
  </table>
</form>
<p><a href="student_list3.php">Return </a></p>
</body>
</html>
