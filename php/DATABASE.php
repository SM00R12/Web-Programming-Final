<!DOCTYPE html></!DOCTYPE html>
<html>
<head>
	<title>Table with database example</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th {
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2
		}
</style>
</head>
<body>

<h1>
	Displaying Table
</h1>

<table>
	<tr>
		<th>Name</th>
		<th>Author</th>
		<th>ID</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "BookStore");
	if ($conn-> connect_error) {
		die("Connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT Name, Author, ID, Quantity, Price from Books";
	$result  = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["Name"] ."</td><td>". $row["Author"] ."</td><td>". $row["ID"] ."</td><td>". $row["Quantity"] ."</td><td>". $row["Price"] ."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}
	?>
</table>

<br>
<br>
<h1>
	Selecting By ID
</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Author</th>
		<th>ID</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "BookStore");
	if ($conn-> connect_error) {
		die("Connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT Name, Author, ID, Quantity, Price from Books where ID = 1234";
	$result  = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["Name"] ."</td><td>". $row["Author"] ."</td><td>". $row["ID"] ."</td><td>". $row["Quantity"] ."</td><td>". $row["Price"] ."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}
	?>
</table>

<h1>
	Add Quantity
</h1>

<table>
	<tr>
		<th>Name</th>
		<th>Author</th>
		<th>ID</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "BookStore");
	if ($conn-> connect_error) {
		die("Connection failed:". $conn-> connect_error);
	}

	$query = "UPDATE Books SET Quantity = Quantity + 1 where ID = 1234";
	$query_run = mysqli_query($conn,$query);

	$sql = "SELECT Name, Author, ID, Quantity, Price from Books where ID = 1234";
	$result  = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["Name"] ."</td><td>". $row["Author"] ."</td><td>". $row["ID"] ."</td><td>". $row["Quantity"] ."</td><td>". $row["Price"] ."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}
	?>
</table>

<h1>
	Subtract (2) Quantity
</h1>

<table>
	<tr>
		<th>Name</th>
		<th>Author</th>
		<th>ID</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "BookStore");
	if ($conn-> connect_error) {
		die("Connection failed:". $conn-> connect_error);
	}

	$query = "UPDATE Books SET Quantity = Quantity - 2 where ID = 1234";
	$query_run = mysqli_query($conn,$query);

	$sql = "SELECT Name, Author, ID, Quantity, Price from Books where ID = 1234";
	$result  = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["Name"] ."</td><td>". $row["Author"] ."</td><td>". $row["ID"] ."</td><td>". $row["Quantity"] ."</td><td>". $row["Price"] ."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}
	?>
</table>

</body>
</html>