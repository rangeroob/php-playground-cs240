<html>

<head>

<title>Your Name</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
* {
	text-align: center;
	font-size: xx-large;
}

input {
	font-size: medium;
}
body { 
	background-image: url("download1.jpeg");
}

</style>
</head>

<body>

<h1>Whats Your Name </h1>

<form name="form1" method="post" action="answer.php">
  Please<br>Enter your first name: 
  <br>
    <input name="firstName" type="text" id="firstName" size="12" maxlength="12">

    <br>
    Enter your last name: 
    <br>
    <label>
    <input name="lastName" type="text" id="lastName" size="15" maxlength="15">
    </label>
    <br>
    Enter your city: 
    <br>
    <input name="city" type="text" id="city" size="20" maxlength="20">
    <br>
    <br>
  </p>

  <p>

    <input type="submit" name="Submit" value="Submit">

  </p>

</form>

<p><a href="../index.php">Return</a></p>

</body>

</html>
