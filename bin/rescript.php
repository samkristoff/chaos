<?php

include_once "config.php";

$pageData = '';




//Header
$pageData .= '
<html>
	<head>
	</head>
';

//Body
$pageData .= '			
<body>
	<p>I was scripted!</p>
	
	<form action="bin/rescript.php" method="post">
		Name: <input type="text" name="fname"><br />
		<input type="submit" value="Submit">
	</form>
	<br />' . htmlspecialchars($_POST["fname"]) . ' <br />
</body>
';
			 
//Close
$pageData .= '	
</html>
';
			 
file_put_contents('../index.html', $pageData, LOCK_EX);

?>