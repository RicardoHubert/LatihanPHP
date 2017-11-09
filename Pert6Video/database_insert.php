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
	$menu_name = "Edit me";
	$position = 4;
	$visible = 1;

	$query = "INSERT INTO subjects (";
	$query .= "menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= "'{$menu_name}', {$position}, {$visible}";
	$query .= ")";
	$result = mysqli_query($connection, $query);
	if (!$result){
		echo "Success!";
	} else {
		die("Database query failed." . mysqli_error($connection));
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