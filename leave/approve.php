<?php
require_once "config.php";
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if (isset($_POST['submit'])) {
      if (empty($_REQUEST['approve'])) {
        // echo "<script>alert('Need Select One Situation');</script>";
      }else{
        foreach ($_REQUEST['approve'] as $email) {
          $to_email = $email;
          $form_email = "Manager";
          $Email_title = "Leave Approve";
          $email_msg = "Your Leave already approve. Take care.";
          $sql = "UPDATE `leave_app` SET `statu`= 'Determine' WHERE email = '$to_email'";
          $result = $link -> query($sql);
          $sql = "INSERT INTO `email`(`id`, `to_email`, `form_email`, `Email_title`, `email_msg`) VALUES ('','$to_email','$form_email','$Email_title','$email_msg')";
          $result = $link -> query($sql);
        }
        
      }

      if (empty($_REQUEST['reject'])) {
        // echo "<script>alert('Need Select One Situation');</script>";
      }else{
        foreach ($_REQUEST['reject'] as $email) {
          $to_email = $email;
          $form_email = "Manager";
          $Email_title = "Leave Reject";
          $email_msg = "Your Leave is Reject. Come to My office.";
          $statu = "Determine";
          $sql = "UPDATE `leave_app` SET `statu`= 'Determine' WHERE email = '$to_email'";
          $result = $link -> query($sql);
          $sql = "INSERT INTO `email`(`id`, `to_email`, `form_email`, `Email_title`, `email_msg`) VALUES ('','$to_email','$form_email','$Email_title','$email_msg')";
          $result = $link -> query($sql);
        }
        
      }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Aprove Leave</title>
<link href="../mario.png" rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
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

<div class="main">
  <form action="approve.php" method="POST">
    <table>
      <caption>Leave Approve And Reject</caption>
      <tr>
        <td>Name</td>
        <td>PhoneNumber</td>
        <td>Email</td>
        <td>Department</td>
        <td>Resourse</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>State</td>
        <td>Situation</td>
      </tr>
      <tr>
        <?php 
        $name = "";
          $sql = "SELECT * from leave_app";
          $result = $link->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $name = $row['name'];
              $department = $row['department'];
              $email = $row['email'];
              $PhoneNo = $row['PhoneNumber'];
              $reason = $row['reason_a'];
              $SDate = $row['date1'];
              $EDate = $row['date2'];
              $note = $row['note'];
              $state = $row['statu'];
        ?>
        <td><?php echo $name; ?></td>
        <td><p name="email"><?php echo $email; ?></p></td>
        <td><?php echo $PhoneNo; ?></td>
        <td style="width: 50px;"><?php echo $department; ?> Department</td>
        <td style="width: 50px;"><?php echo $reason; ?><br><?php echo $note; ?></td>
        <td><?php echo $SDate; ?></td>
        <td><?php echo $EDate; ?></td>
        <td><?php echo $state; ?></td>
        <td>
          <input type="checkbox" name="approve[]" value="<?php echo $email; ?>">Approve
          <br><input type="checkbox" name="reject[]" value="<?php echo $email; ?>">Reject
        </td>
      </tr>
    <?php }} ?>
    </table>
    <br>
    <input type="submit" name="submit" style="float: right; margin-right: 130px;">
  </form>
</div>
</body>
</html> 