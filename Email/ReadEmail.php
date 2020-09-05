<?php
require_once "config.php";
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ..\AccountSystem1\login.php");
    exit;
}

if (isset($_POST['delete'])) {
  if (empty($_REQUEST['delete'])) {//No itme checked
    }else{
        foreach ($_REQUEST['delete'] as $email_msg) {
            //delete the item with the username
            $sql = "DELETE from email where email_msg = '%$email_msg%'";
            $result = $link -> query($sql);
        }
    }
}
?>
<title>Email</title>
<link href="../mario.png" rel="icon">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
<script src="jQuery.js"></script>
<script>
  $(document).ready(function(){
    $("#b1").click(function(){
      $(".h3").fadeToggle("slow");
      });
  });</script>

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

<div class="tab">
  <div class="topnav">
    <form action="" method="post" class="search-container">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" class="search-container"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <?php
    $msg = "";
    $To_email = $_SESSION["username"];
    $sql1 = "SELECT username, email from users where username = '$To_email'";
    $result = $link->query($sql1);
      if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          $email = $row['email'];
          }
      }
      $sql = "SELECT form_email, email_msg, to_email, Email_title from email Where to_email = '$email'";
      $result = $link->query($sql);
        if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()) {
            $Email_title = $row['Email_title'];
  ?>
  
  
  <button class="tablinks" onclick="openCity(event, '<?php echo $Email_title; ?>')">
    <?php echo $Email_title; ?>
  </button>
    <?php
    }
  }
    ?>
</div>
  <?php
    $msg = "";
    $To_email = $_SESSION["username"];
    $sql1 = "SELECT username, email from users where username = '$To_email'";
    $result = $link->query($sql1);
      if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          $email = $row['email'];
          }
      }
        $_SESSION["Email_Form"] = $email;
      $sql = "SELECT form_email, email_msg, to_email, Email_title, date from email Where to_email = '$email'";
      $result = $link->query($sql);
        if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()) {
            $form_email = $row['form_email'];
            $email_msg = $row['email_msg'];
            $Email_title = $row['Email_title'];
            $time = $row['date'];
  ?>
  <form action="ReadEmail.php" method="POST">
  <div id="<?php echo $Email_title; ?>" class="tabcontent">
    <h1><?php echo $Email_title; ?></h1>
    <h2 style="text-decoration: underline;"><?php echo $form_email; ?></h2>
    <p><?php echo $email_msg; ?></p>
    <p>Date: <?php echo $time; ?></p>
    <!-- <button class="delete_btn"><img src="icon\trash.jpg" width="40px" height="40px"></button> -->
  </div>
  </form>
  <?php
    }
  }
?>