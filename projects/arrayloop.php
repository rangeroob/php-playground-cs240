<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Arrays and Loops</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.28" />
</head>

<body>
	<h1>Favorite Bands</h1>
	<br>
	Bands That I like
	<br>
	<br>
	<?php
	$bands = array("<a href='https://en.wikipedia.org/wiki/America_%28band%29'>America</a>",
	"<a href='https://en.wikipedia.org/wiki/Deep_Purple'>Deep Purple</a>",
	"<a href='https://en.wikipedia.org/wiki/Pink_Floyd'>Pink Floyd</a>",
	"<a href='https://en.wikipedia.org/wiki/Black_Sabbath'>Black Sabbath</a>");

	foreach ($bands as $value) {
		echo "I like: $value <br>";
	}
	?>
</body>

</html>
