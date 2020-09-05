<?php
require_once "config.php";
 
$username = $password = $confirm_password = $email = $PhoneNumber = $image = "";
$username_err = $password_err = $confirm_password_err = $email_err = $PhoneNumber_err = $image_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Please Enter Your Email";
    }else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["PhoneNumber"]))){
        $PhoneNumber_err = "Please Enter Your Phone Number";
    }else{
        $PhoneNumber = trim($_POST["PhoneNumber"]);
    }

    if(empty(trim($_POST["image"]))){
        $image = "deflaut.jpg";
    }else{
        $image = trim($_POST["image"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($PhoneNumber_err) && empty($email_err) && empty($image_err)){
        
        $sql = "INSERT INTO users (username, email, PhoneNumber, password, image) VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_email, $param_PhoneNumber, $param_password, $param_image);
            
            $param_username = $username;
            $param_email = $email;
            $param_PhoneNumber = $PhoneNumber;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_image = $image;

            if(mysqli_stmt_execute($stmt)){
                $to_email = $email;
                $form_email = "Human Resourse Department";
                $subjuct = "Company default Email";
                $email_msg = "Welcome to The Company. Any Question can ask anyone.";
                $sql = "INSERT INTO `email`(`id`, `to_email`, `form_email`, `Email_title`, `email_msg`) VALUES ('', '$to_email', '$form_email', '$subjuct' ,'$email_msg')";
                $result = $link -> query($sql);
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <title>Register</title>
    <link href="../mario.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../HomePages/style.css">
</head>
<body>
    <div class="navbar">
        <a href="#news" class="a1" style="color: #ffffff">
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
            <a href="../HomePages/Home.php" class="a1" style="color: #ffffff">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                </svg>
                Home</a>
        </div>
    </div>
    <div class="wrapper" style="margin-top: 80px;">
        <h2>Sign Up</h2>
        <h3>Please fill this form to create an account.</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <br><span><?php echo $username_err; ?></span>
            </div>
            <br>
            <div class="<?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>User Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <br><span><?php echo $email_err; ?></span>
            </div>
            <br>
            <div class="<?php echo (!empty($PhoneNumber_err)) ? 'has-error' : ''; ?>">
                <label>User PhoneNumber</label>
                <input type="text" name="PhoneNumber" value="<?php echo $PhoneNumber; ?>" placeholder="01X-XXXXXXX">
                <br><span><?php echo $PhoneNumber_err; ?></span>
            </div>
            <br>
            <div class="<?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                <label>User Image</label>
                <input type="file" name="image" value="<?php echo $image; ?>">
                <br><span><?php echo $image_err; ?></span>
            </div>
            <br>
            <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" placeholder="At Least 6 Digits">
                <br><span><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class="<?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                <br><span><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </div>

            
        </form>
    </div>    
</body>
</html>