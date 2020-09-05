<?php 
session_start();
require_once "data_M.php"; 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Company Sales Graph</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="../HomePages/style.css">
<script>
	window.onload = function () {
	var chart = new CanvasJS.Chart("ResponsiveCharts", {
		animationEnabled: true,
		theme: "light2",
		title: {
			text: "Daily Orders"
		},
		axisY: {
			title: "Quantity of Order"
		},
		data: [{
			type: "column",
			dataPoints: <?php echo json_encode($ResponsiveCharts, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	var chart = new CanvasJS.Chart("ColumnChart", {
		animationEnabled: true,
		theme: "light2",
		title:{
			text: "Country Order Distribution"
		},
		axisY: {
			title: "Quantity of Order"
		},
		data: [{
			type: "column",
			yValueFormatString: "#,##0",
			dataPoints: <?php echo json_encode($ColumnChart, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	var chart = new CanvasJS.Chart("ColumnChart1", {
		animationEnabled: true,
		theme: "light2",
		title:{
			text: "Number of user orders of different VIP levels"
		},
		axisY: {
			title: "Quantity of Order"
		},
		data: [{
			type: "column",
			yValueFormatString: "#,##0",
			dataPoints: <?php echo json_encode($ColumnChart1, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	var chart = new CanvasJS.Chart("PieCharts1", {
		animationEnabled: true,
		title: {
			text: "Contribution to orders of users of all ages"
		},
		subtitles: [{
			text: "January 2020"
		}],
		data: [{
			type: "pie",
			showInLegend: "true",
			legendText: "{label}",
			indexLabelFontSize: 12,
			indexLabel: "{label} - #percent%",
			yValueFormatString: "#,##0",
			dataPoints: <?php echo json_encode($PieCharts1, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	var chart = new CanvasJS.Chart("PieCharts2", {
		animationEnabled: true,
		title: {
			text: "Distribution of orders by gender"
		},
		subtitles: [{
			text: "January 2020"
		}],
		data: [{
			type: "pie",
			showInLegend: "true",
			legendText: "{label}",
			indexLabelFontSize: 12,
			indexLabel: "{label} - #percent%",
			yValueFormatString: "#,##0",
			dataPoints: <?php echo json_encode($PieCharts2, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	var chart = new CanvasJS.Chart("PieCharts3", {
		animationEnabled: true,
		title: {
			text: "Number of orders contributed by different products"
		},
		subtitles: [{
			text: "January 2020"
		}],
		data: [{
			type: "pie",
			showInLegend: "true",
			legendText: "{label}",
			indexLabelFontSize: 12,
			indexLabel: "{label} - #percent%",
			yValueFormatString: "#,##0",
			dataPoints: <?php echo json_encode($PieCharts3, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	var chart = new CanvasJS.Chart("BarCharts", {
		animationEnabled: true,
		title:{
			text: "Contributed orders from Different Channels"
		},
		axisY: {
			title: "",
			includeZero: true,
			prefix: "",
			suffix:  ""
		},
		data: [{
			type: "bar",
			yValueFormatString: "#,##0",
			indexLabel: "{y}",
			indexLabelPlacement: "inside",
			indexLabelFontWeight: "bolder",
			indexLabelFontColor: "white",
			dataPoints: <?php echo json_encode($BarCharts, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	}
</script>
</head>
<body style="text-align:center;">
<div class="navbar">
            <a href="../HomePages/Home.php" class="a1">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 0 1 0 .708L3.457 5.75l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
				<path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 0 1 .5-.5h6.5a2.5 2.5 0 0 1 2.5 2.5v5.5a.5.5 0 0 1-1 0v-5.5a1.5 1.5 0 0 0-1.5-1.5h-6.5a.5.5 0 0 1-.5-.5z"/>
			</svg>
			 Back</a>
        <div class="dropdown">
            <button class="dropbtn">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
				<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
			</svg>	
			 Branch Company 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class="header">
                    <h2>Branch Company Situation</h2>
                </div>   
                <div class="row">
                    <div class="column">
                            <h3>Malaysia</h3>
                            <a href="../graph/grahp_M.php">Sales Order Analysis</a>
                            <div class="dropdown_Department">
                                <button class="dropbtn_Department">Department</button>
                                <div class="dropdown_content_Department">
                                    <a href="../Flowchart/flowchart_M_F.php">Financial Department</a>
                                    <a href="../Flowchart/flowchart_M_HR.php">Human Resourse Departments</a>
                                    <a href="../Flowchart/flowchart_M_IT.php">Information and Technology Department</a>
                                    <a href="../Flowchart/flowchart_M_M.php">Maintenance Department</a>
                                    <a href="../Flowchart/flowchart_M_Ma.php">Marketing Department</a>
                                </div>
                            </div>
                    </div>
                    <div class="column">
                            <h3>Taiwan</h3>
                            <a href="../graph/grahp_Tai.php">Sales Order Analysis</a>
                            <div class="dropdown_Department">
                                <button class="dropbtn_Department">Department</button>
                                <div class="dropdown_content_Department">
                                    <a href="../Flowchart/flowchart_Tai_F.php">Financial Department</a>
                                    <a href="../Flowchart/flowchart_Tai_HR.php">Human Resourse Departments</a>
                                    <a href="../Flowchart/flowchart_Tai_IT.php">Information and Technology Department</a>
                                    <a href="../Flowchart/flowchart_Tai_M.php">Maintenance Department</a>
                                    <a href="../Flowchart/flowchart_Tai_Ma.php">Marketing Department</a>
                                </div>
                            </div>
                    </div>
                    <div class="column">
                            <h3>China</h3>
                            <a href="../graph/grahp_C.php">Sales Order Analysis</a>
                            <div class="dropdown_Department">
                                <button class="dropbtn_Department">Department</button>
                                <div class="dropdown_content_Department">
                                    <a href="../Flowchart/flowchart_C_F.php">Financial Department</a>
                                    <a href="../Flowchart/flowchart_C_HR.php">Human Resourse Departments</a>
                                    <a href="../Flowchart/flowchart_C_IT.php">Information and Technology Department</a>
                                    <a href="../Flowchart/flowchart_C_M.php">Maintenance Department</a>
                                    <a href="../Flowchart/flowchart_C_Ma.php">Marketing Department</a>
                                </div>
                            </div>
                    </div>
                    <div class="column">
                            <h3>Thailand</h3>
                            <a href="../graph/grahp_Tha.php">Sales Order Analysis</a>
                            <div class="dropdown_Department">
                                <button class="dropbtn_Department">Department</button>
                                <div class="dropdown_content_Department">
                                    <a href="../Flowchart/flowchart_Tha_F.php">Financial Department</a>
                                    <a href="../Flowchart/flowchart_Tha_HR.php">Human Resourse Departments</a>
                                    <a href="../Flowchart/flowchart_Tha_IT.php">Information and Technology Department</a>
                                    <a href="../Flowchart/flowchart_Tha_M.php">Maintenance Department</a>
                                    <a href="../Flowchart/flowchart_Tha_Ma.php">Marketing Department</a>
                                </div>
                            </div>
                    </div>
                    <div class="column">
                            <h3>Singapore</h3>
                            <a href="../graph/grahp_S.php">Sales Order Analysis</a>
                            <div class="dropdown_Department">
                                <button class="dropbtn_Department">Department</button>
                                <div class="dropdown_content_Department">
                                    <a href="../Flowchart/flowchart_S_F.php">Financial Department</a>
                                    <a href="../Flowchart/flowchart_S_HR.php">Human Resourse Departments</a>
                                    <a href="../Flowchart/flowchart_S_IT.php">Information and Technology Department</a>
                                    <a href="../Flowchart/flowchart_S_M.php">Maintenance Department</a>
                                    <a href="../Flowchart/flowchart_S_Ma.php">Marketing Department</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-right links">
            <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
			?>
				<a href="../AccountSystem1/welcome.php" class="a1">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
					<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
				</svg>
				Home</a>
			<?php
                }else{
			?>
				<a href="../AccountSystem1/login.php" class="a1">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
				</svg>
				Login</a>
			<?php
                }
            ?>
        </div>
</div>
<h1>Malaysia Sales Order Analysis</h1>
<table>
  <tr>
    <td rowspan="2" id="tCC"><div id="ColumnChart"></td>
    <td>
		<h3>Orders This Month<br><br><?php echo $totalSales; ?></h3>
		<br><h3>Total sales This Month<br>RM<?php echo $totalPrice; ?></h3>
	</td>
    <td id="PC1"><div id="PieCharts1"></td>
  </tr>
  <tr>
    <td id="tRC"><div id="ResponsiveCharts"></div></td>
    <td id="PC2"><div id="PieCharts2"></td>
  </tr>
  <tr>
  	<td id="tCC1"><div id="ColumnChart1"></td>
    <td><div id="BarCharts"></div></td>
    <td id="PC3"><div id="PieCharts3"></td>
  </tr>
</table>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   