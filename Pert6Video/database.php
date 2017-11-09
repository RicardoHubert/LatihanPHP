<?php
$dbhost = "localhost";
$dbuser = "widget_cms";
$dbpass = "secretpassword";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
	die("Database connection failed: " .
	mysqli_connect_error() .
	"(" .mysqli_connect_errno() . ")"
	);
}

?>
<?php
	$query = "SELECT * ";
	$query = " FROM subjects ";
	$query = "WHERE visible = 1 ";
	$query = "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	if (!$result){
		die("Database query failed.");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

	<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
			<ul>
			<?php
			while($subject = mysqli_fetch_assoc($result)){
				?>
				<li><?php echo $subject["menu_name"]; ?></li>
			<?php
			}
		?>
	</ul>
		<?php
		mysqli_free_result($result);
		?>
	</body>
</html>

	<?php
	mysqli_close($connection);
?>