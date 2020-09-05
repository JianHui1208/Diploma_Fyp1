<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "config.php";

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    if(empty($new_password_err) && empty($confirm_password_err)){
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            if(mysqli_stmt_execute($stmt)){
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
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
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="<?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" value="<?php echo $new_password; ?>">
                <br><span><?php echo $new_password_err; ?></span>
            </div>
            <div class="<?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password">
                <br><span><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit">
                <a href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>