<?php
require_once "config.php";
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
        $sql = "SELECT * from resume where ID = '$ID'";
        $result = $link->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['ID'];
                    $name = $row['Name'];
                    $age = $row['Age'];
                    $email = $row['Email'];
                    $CNumber = $row['Contact_Number'];
                    $LVL = $row['Education_Level'];
                    $school = $row['School'];
                    $workExp = $row['workexperience'];
                    $skill = $row['skill'];
                }
            }
    }else{
        printf("Emtpy");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Information</title>
    <link href="../mario.png" rel="icon">
    <link rel="stylesheet" href="thrid.css">
    <script>
        function ComeBack() {
            window.history.back();
        }
    </script>
</head>
<body>
<h2>Job Seeker Information<input type="button" value="Back" onclick="ComeBack();" style="margin-left: 500px;"></h2>
<form action="four.php" method="POST">
    <table>
    <p style="display: none;" name="ID"><?php echo $id; ?></p>
        <tr>
            <td rowspan="4" style="text-align: center;" ><img src="deflaut.jpg" width="280px" height="280px"></td>
            <td class="tddeep"><p name="name">Name: <?php echo $name; ?></p></td>
        </tr>
        <tr>
            <td style="background: #AED6F1;"><p>Age: <?php echo $age; ?></p></td>
        </tr>
        <tr>
            <td class="tddeep"><p name="email">Email: <?php echo $email; ?></p></td>
        </tr>
        <tr>
            <td class="tdlow"><p>Contact Number: <?php echo $CNumber; ?></p></td>
        </tr>
        <tr>
            <td rowspan="2" class="tddeep"><p>School: <?php echo $school; ?></p><p>Education: <?php echo $LVL; ?></p></td>
            <td class="tddeep"><p>Skill: <?php echo $skill; ?></p></td>
        </tr>
        <tr>
            <td class="tdlow"><p>Working Exp: <?php echo $workExp; ?></p></td>
            <!-- <td id="TD1"><input type="submit" value="Send an interview request."></td> -->
            <td id="TD1" class="tddeep"><a href="four.php?ID=<?php echo $id; ?>">Send an interview request.</a></td>
        </tr>
    </table>
</form>
</body>
</html>