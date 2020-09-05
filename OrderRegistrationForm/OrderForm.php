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

$date = $ordernumber = $product = $customername = $employeename = $customerphonenumber = $unitprice = $quantity = $prepaidcash = $totalprice = $unpaidcash = $paymentsitustion = "";
$date_err = $ordernumber_err = $product_err = $customername_err = $employeename_err = $customerphonenumber_err = $unitprice_err = $quantity_err = $prepaidcash_err = $totalprice_err = $unpaidcash_err = $paymentsitustion_err = $error_msg = "";

if (isset($_POST["submit"])) {

	if (empty(trim($_POST["date"]))) {
		$date_err = "Please Select The Date";
	}else{
		$date = trim($_POST["date"]);
	}

	if(empty(trim($_POST["ordernumber"]))){
		$ordernumber_err = "Please Enter The Order Number";
	}else{
		$ordernumber = trim($_POST["ordernumber"]);
	}

	if(empty(trim($_POST["customername"]))){
		$customername_err = "Please Enter The Customer Name";
	}else{
		$customername = trim($_POST["customername"]);
	}

	if(empty(trim($_POST["employeename"]))){
		$employeename_err = "Please Enter The Employee Name";
	}else{
		$employeename = trim($_POST["employeename"]);
	}

	if(empty(trim($_POST["product"]))){
		$product_err = "Please Enter The Product Name";
	}else{
		$product = trim($_POST["product"]);
	}

	if(empty(trim($_POST["customerphonenumber"]))){
		$customerphonenumber_err = "Please Enter The Customer PhoneNumber";
	}else{
		$customerphonenumber = trim($_POST["customerphonenumber"]);
	}

	if(empty(trim($_POST["unitprice"]))){
		$unitprice_err = "Please Enter The Unit Price";
	}else{
		$unitprice = trim($_POST["unitprice"]);
	}

	if(empty(trim($_POST["quantity"]))){
		$quantity_err = "Please Enter The Quantity";
	}else{
		$quantity = trim($_POST["quantity"]);
	}

	if(empty(trim($_POST["prepaidcash"]))){
		$prepaidcash_err = "Please Enter The Prepaid Cash";
	}else{
		$prepaidcash = trim($_POST["prepaidcash"]);
	}

	// $totalprice = trim($_GET["totalprice"]);
	// $unpaidcash = trim($_GET["unpaidcash"]);
	// $paymentsitustion = trim($_GET["paymentsitustion"]);

	$totalprice = $unitprice * $quantity;
	$unpaidcash = $totalprice - $prepaidcash;

	if ($unpaidcash == 0) {
		$paymentsitustion = "Paid";
	}else{
		$paymentsitustion = "Unpaid";
	}


	if (empty($date_err) && empty($prepaidcash_err) && empty($quantity_err) && empty($customerphonenumber_err) && empty($product_err) && empty($employeename_err) && empty($customername_err) && empty($ordernumber_err) && empty($unitprice_err)) {
		$sql = "INSERT INTO `orderlist` VALUE('$date','$ordernumber','$product','$employeename','$customername','$customerphonenumber','$unitprice','$quantity','$totalprice','$prepaidcash','$unpaidcash','$paymentsitustion')";
	 	$result = $conn -> query($sql);
	}else{
		$error_msg = "Please check angin your Error";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="orderfrom.css">
	<script type="text/javascript">
		function Calcula() {
			var UP1 = document.getElementById("up1").value;
			var Q1 = document.getElementById("q1").value;
			var PC1 = document.getElementById("pc1").value;
			var CPN1 = document.getElementById("cpn1").value;
			var Cpn1 = CPN1.length;
			var ON1 = document.getElementById("on1").value;
			var On1 = ON1.length;

			var TP1 = UP1 * Q1;
			var U1 = TP1 - PC1;
			var P1 = "Paid";
			var Up1 = "Unpaid";

			document.getElementById("tp1").innerHTML = TP1;
			document.getElementById("u1").innerHTML = U1;

			if (U1 == 0) {
				document.getElementById("ps1").innerHTML = P1;
			}else{
				document.getElementById("ps1").innerHTML = Up1;
			}

			if (Cpn1 > 12 || Cpn1 < 11) {
				alert("The PhoneNumber is Wrong");
			}

			if (On1 > 4) {
				alert("The OrderNumber is Wrong");
			}

			var r = /^\+?[1-9][0-9]*$/;
      		if(!r.test(UP1)) {
      			alert("Enter The Number in the Unit Price");
      		}
      		if(!r.test(Q1)) {
      			alert("Enter The Number in the Quantity");
      		}
      		if(!r.test(PC1)) {
      			alert("Enter The Number in the Prepaid Cash");
      		}
		}

		function Clean() {
			// var UP1 = document.getElementById("up1").value;
			var Q1 = document.getElementById("q1").value;
			var PC1 = document.getElementById("pc1").value;
			var CPN1 = document.getElementById("cpn1").value;
			var ON1 = document.getElementById("on1").value;
			var P1 = document.getElementById("p1").value;
			var EN1 = document.getElementById("en1").value;
			var CN1 = document.getElementById("cn1").value;

			var Q2 = "";
			var PC2 = "";
			var CPN2 = "";
			var ON2 = "";
			var P2 = "";
			var EN2 = "";
			var CN2 = "";

			document.getElementById("q1").innerHTML = Q2;
			document.getElementById("pc1").innerHTML = PC2;
			document.getElementById("cpn1").innerHTML = CPN2;
			document.getElementById("on1").innerHTML = ON2;
			document.getElementById("p1").innerHTML = P2;
			document.getElementById("en1").innerHTML = EN2;
			document.getElementById("cn1").innerHTML = CN2;

		}
		// function my() {
		// 	var UP1 = document.getElementById("up1").value;
		// 	var Q1 = document.getElementById("q1").value;
		// 	var PC1 = document.getElementById("pc1").value;

		// 	var TP1 = UP1 * Q1;
		// 	var U1 = TP1 - PC1;
		// 	var P1 = "Paid";
		// 	var Up1 = "Unpaid";

		// 	document.getElementById("tp1").innerHTML = TP1;
		// 	document.getElementById("u1").innerHTML = U1;

		// 	if (U1 == 0) {
		// 		document.getElementById("ps1").innerHTML = P1;
		// 	}else{
		// 		document.getElementById("ps1").innerHTML = Up1;
		// 	}
		// }
	</script>
</head>
<body>
<form action="OrderForm.php" method="POST">
	<div id="d1">
		<div>
			<label>Date: </label>
			<div>
				<input type="Date" name="date" value="<?php echo $date; ?>">
			</div>
			<label style="display: none;"><?php echo $date_err; ?></label>
		</div>

		<div>
			<label>Order Number: </label>
			<div>
				<input type="Text" name="ordernumber" id="on1" value="<?php echo $ordernumber; ?>">
			</div>
			<label style="display: none;"><?php echo $ordernumber_err; ?></label>
		</div>

		<div>
			<label>Product: </label>
			<div>
				<input type="Text" name="product"  id="p1" value="<?php echo $product; ?>">
			</div>
			<label style="display: none;"><?php echo $product_err; ?></label>
		</div>

		<div>
			<label>Employee Name: </label>
			<div>
				<input type="Text" name="employeename" id="em1" value="<?php echo $employeename; ?>">
			</div>
			<label style="display: none;"><?php echo $employeename_err; ?></label>
		</div>

		<div>
			<label>Customer Name: </label>
			<div>
				<input type="Text" name="customername" id="cn1" value="<?php echo $customername; ?>">
			</div>
			<label style="display: none;"><?php echo $customername_err; ?></label>
		</div>

		<div>
			<label>Customer Phone Number: </label>
			<div>
				<input type="Text" name="customerphonenumber" id="cpn1" value="<?php echo $customerphonenumber; ?>">
			</div>
			<label style="display: none;"><?php echo $customerphonenumber_err; ?></label>
		</div>

		<div>
			<label>Unit Price: </label>
			<div>
				<input type="Text" name="unitprice" id="up1" value="<?php echo $unitprice; ?>">
			</div>
			<label style="display: none;"><?php echo $unitprice_err; ?></label>
		</div>

		<div>
			<label>Quantity: </label>
			<div>
				<input type="Text" name="quantity" id="q1" value="<?php echo $quantity; ?>">
			</div>
			<label style="display: none;"><?php echo $quantity_err; ?></label>
		</div>

		<div>
			<label>Prepaid Cash: </label>
			<div>
				<input type="Text" name="prepaidcash" id="pc1" value="<?php echo $prepaidcash; ?>">
			</div>
			<label style="display: none;"><?php echo $prepaidcash_err; ?></label>
		</div>

<!-- 		<div>
			<label>Total Price: </label>
			<output name="totalprice" id="tp1"></output>
		</div>

		<div>
			<label>Unpaid Cash: </label>
			<output name="unpaidcash" id="u1"></output>
		</div>

		<div>
			<label>Payment Situstion: </label>
			<output name="paymentsitustion" id="ps1"></output>
		</div> -->

		<div>
			<br>
<!-- 			<input type="button" onclick="Calcula()" value="Calculation"> -->
			<input type="button" value="Clean" onclick="Clean()">
			<input type="submit" name="submit" value="Submit" onclick="Calcula()">
		</div>
	</div>
</form>

	<table>
		
		<tr>
			<td>Date</td>
			<td>Order Number</td>
			<td>Product</td>
			<td>Employee Name</td>
			<td>Customer Name</td>
			<td>Customer Phone Number</td>
			<td>Unit Price</td>
			<td>Quantity</td>
			<td>Total Price</td>
			<td>Prepaid Cash</td>
			<td>Unpaid Cash</td>
			<td>Payment Situstion</td>
		</tr>

		<?php 
		                $sql = "SELECT * from orderlist";
		                $result = $conn->query($sql);
		                if($result->num_rows > 0){
		                    while ($row = $result->fetch_assoc()) {
		                        $date = $row['date'];
		                        $ordernumber = $row['ordernumber'];
		                        $product = $row['product'];
		                        $customername = $row['customername'];
		                        $employeename = $row['employeename'];
		                        $customerphonenumber = $row['customerphonenumber'];
		                        $unitprice = $row['unitprice'];
		                        $quantity = $row['quantity'];
		                        $totalprice = $row['totalprice'];
		                        $prepaidcash = $row['prepaidcash'];
		                        $unpaidcash = $row['unpaidcash'];
		                        $paymentsitustion = $row['paymentsitustion'];
		             ?>

		<tr>
			<td><?php echo $date; ?></td>
			<td><?php echo $ordernumber; ?></td>
			<td><?php echo $product; ?></td>
			<td><?php echo $employeename; ?></td>
			<td><?php echo $customername; ?></td>
			<td><?php echo $customerphonenumber; ?></td>
			<td><?php echo $unitprice; ?></td>
			<td><?php echo $quantity; ?></td>
			<td><?php echo $totalprice; ?></td>
			<td><?php echo $prepaidcash; ?></td>
			<td><?php echo $unpaidcash; ?></td>
			<td><?php echo $paymentsitustion; ?></td>
		</tr>
		<?php 
			}
		}
		?>
	</table>
</body>
</html>