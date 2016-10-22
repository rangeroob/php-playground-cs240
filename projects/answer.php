<!DOCTYPE html>
<html lang="en">
<head>
<title>Hi User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
    * {
    	text-align: center;
    	font-size: x-large;
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

    <h3>Hi There,<br> <?php echo $_POST["firstName"]?> <?php echo $_POST["lastName"];?> <br>from <br><?php echo $_POST["city"]; ?></h3>
    <a href="../index.php">return</a>
</body>
</html>
