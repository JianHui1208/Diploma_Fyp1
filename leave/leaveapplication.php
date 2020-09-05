<?php
require_once "config.php";
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$name = $department = $reason_a = $date1 = $date2 = $note = "";
$name_err = $department_err = $reason_a_err = $date1_err = $date2_err = "";

if (isset($_POST['submit'])) {
  $name = $_SESSION["username"];
  $sql1 = "SELECT username, email, PhoneNumber FROM users WHERE username = '$name'";
  $result = $link->query($sql1);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $email = $row['email'];
        $PhoneNo = $row['PhoneNumber'];
      }
  }
	if (empty($_POST['department'])) {
		$department_err = "Select Department";
		echo "<script>alert('Must be select a department.');</script>";
	}else{
		$department = $_POST['department'];
	}
	if (empty($_POST['reason_a'])) {
		$reason_a_err = "Select reason";
		echo "<script>alert('Must be select a Reason.');</script>";
	}else{
		$reason_a = $_POST['reason_a'];
	}
	if (empty($_POST['date1'])) {
		$date1_err = "Select Start date";
		echo "<script>alert('Must be select the Start Date.');</script>";
	}else{
		$date1 = $_POST['date1'];
	}
	if (empty($_POST['date2'])) {
		$date2_err = "Select End date";
		echo "<script>alert('Must be select the End Date.');</script>";
	}else{
		$date2 = $_POST['date2'];
	}
  $note = $_POST['note'];
  $statu = "To be determine";
	if (empty($department_err) && empty($reason_a_err) && empty($date1_err) && empty($date2_err)) {
		$sql = "INSERT INTO `leave_app`(`id`, `name`, `email`, `PhoneNumber`, `department`, `reason_a`, `date1`, `date2`, `note`, `statu`) VALUES ('','$name', '$email', '$PhoneNo', '$department', '$reason_a', '$date1', '$date2', '$note', '$statu')";
		$result = $link -> query($sql);
    echo "<script>alert('Leave already send wait Manager Approve Or Reject');</script>";
	}else{
		echo "<script>alert('Check Your Error.');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Leave Application</title>
    <link href="../mario.png" rel="icon">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styleL.css">
</head>
<body>

<div class="sidenav">
  <a href="..\AccountSystem1\welcome.php"><p id="p1"><img src="icon\account.png" width="20" height="20" style="padding-right: 10px;"><strong><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></strong></p></a>
  <a class="active" href="..\AccountSystem1\welcome.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
  </svg> Home</a>
  <a href="..\HomePages\Home.php"><img src="icon\company.png" width="20" height="20"> Company Profile</a>
  <a href="..\CheckIn\check.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  </svg> Attendance</a>
  <a href="..\Salary\calculate.php"><img src="icon\money.png" width="20" height="20"> Salary</a>
  <button class="dropdown-btn" onclick="dropdown_btn()" > 
    Email<img src="icon\dropdown.png" width="10" height="10" style="padding: 0px 0px 0px 110px;">
  </button>
  <div class="dropdown-container">
    <a href="..\Email\ReadEmail.php"><img src="icon\Email.png" width="20" height="20"> Email</a>
    <a href="..\Email\write.php"><img src="icon\email2.png" width="20" height="20"> Write Email</a>
  </div>
  <?php
    $user_name = $_SESSION["username"];
    $user_name_leng = strlen($user_name);
    if ($user_name_leng <= 5) {
      echo "<a href='..\leave\approve.php'><img src='icon\Leave.png' width='20' height='20'> Aprove leave</a>";
      echo "<a href='..\Resume\Frist.php'><img src='icon\Leave.png' width='20' height='20'> Recruitment Employee</a>";
    }
  ?>
  <a href="..\leave\leaveapplication.php"><img src="icon\Leave.png" width="20" height="20"> Leave</a>
  <a href="..\AccountSystem1\reset-password.php"><img src="icon\settingsw.png" width="20" height="20"> Settings</a>
  <a href="..\AccountSystem1\logout.php"><img src="icon\logout.png" width="20" height="20"> Log Out</a>
</div>
<form method="POST" action="leaveapplication.php">
  	<div class="content">
		<table>
			<caption>Leave Application</caption>
			<tr>
				<td><p>Today Date: 
					<script>
						var mydate=new Date()
						var year=mydate.getYear()
						if (year < 1000)
						year+=1900
						var day=mydate.getDay()
						var month=mydate.getMonth()
						var daym=mydate.getDate()
						if (daym<10)
						daym="0"+daym
						var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
						var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
						document.write(dayarray[day]+", "+montharray[month]+" "+daym+", "+year)
					</script>
					</p></td>
			</tr>
			<tr>
				<td>Employee Name: <b> <?php echo htmlspecialchars($_SESSION["username"]); ?></b><a style="padding-left: 40px">
					Department: 
						<select name="department" value="<?php echo $department ?>">
							<option></option>
							<option>Human Resourse</option>
							<option>Finance</option>
							<option>Maintenance</option>
							<option>Marking</option>
							<option>Technology</option>
						</select></a>
				</td>
			</tr>
      <tr>
        <td><p>Reason For requested leave: (Please tick appropriate box)</p></td>
      </tr>
      <tr>
        <td>
          <p name="reason_a">
            <input type="radio" name="reason_a" <?php if (isset($gender) && $gender=="Annual Leave") echo "checked";?> value="Annual Leave">Annual Leave<br>
            <input type="radio" name="reason_a" <?php if (isset($gender) && $gender=="Parental Leave") echo "checked";?> value="Parental Leave">Parental Leave<br>
            <input type="radio" name="reason_a" <?php if (isset($gender) && $gender=="Bereavement") echo "checked";?> value="Bereavement">Bereavement<br>
            <input type="radio" name="reason_a" <?php if (isset($gender) && $gender=="Maternity Leave") echo "checked";?> value="Maternity Leave">Maternity Leave<br>
            <input type="radio" name="reason_a" <?php if (isset($gender) && $gender=="Sick Leave") echo "checked";?> value="Sick Leave">Sick Leave<br>
            <input type="radio" name="reason_a" <?php if (isset($gender) && $gender=="Unpaid Leave") echo "checked";?> value="Unpaid Leave">Unpaid Leave<br>
          </p>
        </td>
      </tr>
      <tr>
        <td>
          <br>
          Date: From: <input type="Date" name="date1" value="<?php echo $date1; ?>"> To: <input type="Date" name="date2" value="<?php echo $date2; ?>">
        </td>
      </tr>
    </table>
    <div>
      <p>Note/Comments: </p>
      <textarea name="note" rows="5" cols="100" value="<?php echo $note; ?>" ></textarea>
    </div>
    <input type="submit" name="submit" value="Submit" class="submit">
	</div>
</form>
</body>
</html>