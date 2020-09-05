<?php
require_once "data_S.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>China Company Staff</title>
	<link rel="stylesheet" href="style.css">
	<style>
	h1 {
		color: #000000;
		text-align: center;
		font-size: 1.8rem;
		text-shadow: rgba(0,0,0,0.6) 1px 0, rgba(0,0,0,0.6) 1px 0, rgba(0,0,0,0.6) 0 1px, rgba(0,0,0,0.6) 0 1px;
	}

	.nav {
		margin: 20px auto;
		width: 950px;
		min-height: auto;
		text-align: center;
	}
	</style>
</head>
<body>
<div class="navbar">
            <a href="../HomePages/Home.php">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 0 1 0 .708L3.457 5.75l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
				<path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 0 1 .5-.5h6.5a2.5 2.5 0 0 1 2.5 2.5v5.5a.5.5 0 0 1-1 0v-5.5a1.5 1.5 0 0 0-1.5-1.5h-6.5a.5.5 0 0 1-.5-.5z"/>
			</svg>
			 Back</a>
			<a href="flowchart_S_HR.php">Human Resources Department</a>
			<a href="flowchart_S_M.php">Maintenance Department</a>
			<a href="flowchart_S_Ma.php">Marketing Department</a>
			<a href="flowchart_S_IT.php">Information and Technology Department</a>
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
<div>
<div>
	<br>
	<h1>Singpora Company Staff <br>Financial Department</h1>
	<nav class="nav">
							<ul>
								<li>
									<a href="#">Manager<br><?php echo $Name1001; ?><br><?php echo $email1001; ?></a>
										<ul>
											<li>
												<a href="#">Deputy manager<br><?php echo $Name1002; ?><br><?php echo $email1002; ?></a>
													<ul>
														<li>
															<a href="#">Employee<br><?php echo $Name1004; ?><br><?php echo $email1004; ?></a>
																<li>
																	<a href="#">Employee<br><?php echo $Name1005; ?><br><?php echo $email1005; ?></a>
																</li>
														</li>
													</ul>
														<li>
															<a href="#">Director<br><?php echo $Name1003; ?><br><?php echo $email1003; ?></a>
															<ul>
																<li>
																	<a href="#">Employee<br><?php echo $Name1006; ?><br><?php echo $email1006; ?></a>
																	<li>
																		<a href="#">Employee<br><?php echo $Name1007; ?><br><?php echo $email1007; ?></a>
																	</li>
																</li>
															</ul>
														</li>
													</li>
												</ul>
											</li>
										</ul>
	</nav>
</div>
</body>
</html>