<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View User Tabulation</title>
</head>
<body>
<?php
	foreach ($results as $obj) {
		echo "<h4>".$obj->id." ".$obj->username." ".$obj->password."</h4>";
	}	
?>
</body>
</html>