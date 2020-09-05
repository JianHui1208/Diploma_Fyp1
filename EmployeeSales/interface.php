<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projectaccount";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="welcome.html">
		<div>
			<label>Employee ID</label><br>
			<h1><b><?php echo htmlspecialchars($_POST["username"]); ?></b> welcome</h1>
		</div>
		<div>
			<label>Sales</label>
		</div>
		<div>
			<label>Sample A</label>
			<input type="number" name="splA" id="splA" max="500" min="0">
		</div>
		<div>
			<label>Sample B</label>
			<input type="number" name="splB" id="splB" max="500" min="0">
		</div>
		<div>
			<label>Sample C</label>
			<input type="number" name="splC" id="splC" max="500" min="0">
		</div>
		<div>
			<script type="text/javascript">
				var cdt = new Date();
				var day = cdt.getDate();
				var month = cdt.getMonth()+1;
				var year = cdt.getFullYear();
				var hour = cdt.getHours();
				var min = cdt.getMinutes();
				var sec = cdt.getSeconds();
				var datetime = "Now: " + day +"/"+ month +"/"+ year +" @ "+ hour +":"+ min +":"+ sec;
				document.write(datetime);
			</script>
		</div>
		<div>
			<input type="submit" name="submit" onclick="Click()">
		</div>
	</form>
</body>
</html>