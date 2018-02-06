
<!DOCTYPE html>
		<html >
		<head>
			<meta charset="UTF-8">
			<title>Product Table</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
			<link rel="stylesheet" href="css/style.css">
		</head>
		<body>
		<ul>
			<li><a href='index.php'>Register</a></li>
		</ul>

<?php

$link = mysqli_connect("au-cdbr-sl-syd-01.cleardb.net", "bf5c42046bef55", "36c7da73", "ibmx_fde4b5a80874bf3");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sname=$_POST['sname'];
$rollno=$_POST['rollno'];
$dept=$_POST['branch'];
$cat=$_POST['type'];
$message=$_POST['message'];

$sql = "INSERT INTO feedback VALUES ('$rollno','$sname','$dept','$cat','$message')";
if ($link->query($sql) === TRUE) {
	$sql = "SELECT * from feedback";
	$result = mysqli_query($link,$sql);
	if ($result->num_rows > 0) {
	?>
			<table class="rwd-table">
					<tr>
						<th>Enrollment No.</th>
						<th>Name</th>
						<th>Branch</th>
						<th>Type</th>
						<th>Message</th>
					</tr>
	<?php
		while ($row = mysqli_fetch_array($result)) {
	?>	
			<tr>
			  <td><?php echo $row['rollno']; ?></td>
			  <td><?php echo $row['name']; ?></td>
			  <td><?php echo $row['branch']; ?></td>
			  <td><?php echo $row['type']; ?></td>
			  <td><?php echo $row['feedback']; ?></td>
			</tr>
	<?php
		}
    } 
	else {
		echo "Display Error: " . $sql . "<br>" . $link->error;
	}
}
else {
	echo "Insertion Error: " . $sql . "<br>" . $link->error;
}
//mysqli_close($link);
?>
</table>
</body>
</html>