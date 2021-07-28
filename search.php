<?php 
	include 'dboperations.php';
	$users = getAllUsers();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Page</title>
</head>
<body>
	<h1>User List</h1>

	<formform action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
		<input type="text" name="username" id="username">
		<input type="submit" name="search" id="search" value="Search">
		
	</form>

	<?php

		echo "<table>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Username</th>";
		echo "</tr>";
		for($i = 0; $i<count($users); $i++) {
			echo "<tr>";
			echo "<td>" . $users[$i]["id"] . "</td>";
			echo "<td>" . $users[$i]["username"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>

</body>
</html>