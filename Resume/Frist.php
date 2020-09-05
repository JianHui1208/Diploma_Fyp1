<?php 
require_once "data.php";
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../AccountSystem1/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="../mario.png" rel="icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../HomePages/style.css">
    <script>
        window.onload = function () {
        
        var chart = new CanvasJS.Chart("monthly", {
            title: {
                text: "CV application form received in a week"
            },
            axisY: {
                title: "Number of People"
            },
            data: [{
                type: "line",
                dataPoints: <?php echo json_encode($Monthly, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        var chart = new CanvasJS.Chart("position", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Department selected by Applicant"
            },
            data: [{
                type: "pie",
                indexLabel: "{y}",
                yValueFormatString: "",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "#000000",
                indexLabelFontSize: 12,
                indexLabelFontWeight: "bolder",
                showInLegend: true,
                legendText: "{label}",
                dataPoints: <?php echo json_encode($position, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        var chart = new CanvasJS.Chart("education", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Education Level Received by the Applicant"
            },
            data: [{
                type: "pie",
                indexLabel: "{y}",
                yValueFormatString: "",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "#000000",
                indexLabelFontSize: 12,
                indexLabelFontWeight: "bolder",
                showInLegend: true,
                legendText: "{label}",
                dataPoints: <?php echo json_encode($education, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        var chart = new CanvasJS.Chart("department", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Number of people in each department"
            },
            data: [{
                type: "pie",
                indexLabel: "{y}",
                yValueFormatString: "",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "#000000",
                indexLabelFontSize: 12,
                indexLabelFontWeight: "bolder",
                showInLegend: true,
                legendText: "{label}",
                dataPoints: <?php echo json_encode($department, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        }
    </script>
</head>
<body>
    <div class="navbar">
        <a href="#news" class="a1" style="color: #ffffff; display: block;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-stickies-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                <path fill-rule="evenodd"
                    d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
            </svg>
            Notice</a>
        <div class="dropdown">
            <button class="dropbtn">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                    <path
                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
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
                        <h3 style="text-align: center; padding-bottom: 10px;">Malaysia</h3>
                        <a href="../graph/grahp_M.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_M_F.php" style="color: #000000">Financial Department</a>
                                <a href="../Flowchart/flowchart_M_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_M_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_M_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_M_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Taiwan</h3>
                        <a href="../graph/grahp_Tai.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_Tai_F.php" style="color: #000000">Financial
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tai_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_Tai_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_Tai_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tai_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">China</h3>
                        <a href="../graph/grahp_C.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_C_F.php" style="color: #000000">Financial Department</a>
                                <a href="../Flowchart/flowchart_C_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_C_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_C_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_C_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Thailand</h3>
                        <a href="../graph/grahp_Tha.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_Tha_F.php" style="color: #000000">Financial
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tha_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_Tha_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_Tha_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tha_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Singapore</h3>
                        <a href="../graph/grahp_S.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_S_F.php" style="color: #000000">Financial Department</a>
                                <a href="../Flowchart/flowchart_S_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_S_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_S_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_S_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-right links">
        <div class="top-right links">
            <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
			?>
            <a href="../AccountSystem1/welcome.php" style="color: #ffffff; display: block; width: 132px;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                </svg>
                Home</a>
            <?php
                }else{
			?>
            <a href="../AccountSystem1/login.php" style="color: #ffffff; display: block; width: 132px;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                </svg>
                Login</a>
            <?php
                }
            ?>
        </div>
        </div>
    </div>
    <h1 style="margin-left: 20px;">Resruitment Employee</h1>
    <form action="second.php" method="post">
        <div class="d1" style="margin-left: 20px;">
            <label>Department: </label>
            <select name="department" required>
				<option value="">Select a Department</option>
				<option>Financial Department</option>
				<option>Human Resources Department</option>
				<option>Maintenance Department</option>
				<option>Marketing Department</option>
				<option>Information and Technology Department</option>
			</select>
            <label>Country: </label>
			<select name="country" required>
				<option value="">Select a Country</option>
				<option>Malaysia</option>
				<option>Taiwan</option>
				<option>Singapore</option>
				<option>Thailand</option>
			</select>
			<label>Education_Level: </label>
			<select name="level" required>
				<option value="">Select a Education Level</option>
				<option>PhD</option>
				<option>Degree</option>
				<option>Diploma</option>
				<option>Other</option>
			</select>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    
    <table style="text-align: center;">
        <tr>
            <td id="td1"><div id="monthly"></div></td>
            <td id="td2"><div id="education"></div></td>
        </tr>
        <tr>
            <td id="td3"><div id="department"></div></td>
            <td id="td4"><div id="position"></div></td>
        </tr>
    </table>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>