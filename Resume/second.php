<?php
require_once "config.php";
$department = $country = $level = "";
$department=$_POST['department'];
$country=$_POST['country'];
$level=$_POST['level'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Select Job Seeker</title>
    <link href="../mario.png" rel="icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #DV1{
        position: relative;
        left: 900px;
        top: 40px;
      }
    </style>
  </head>
  <body>
  
  <div class="container">
  <div id="DV1"><button><a href="Frist.php">Back to Frist Pages</a></button></div>
    <h3><label>Department: <?php echo $department; ?></label><br></h3>
    <h3><label>Country: <?php echo $country; ?></label><br></h3>
    <h3><label>Education Level: <?php echo $level; ?></label><br></h3>
    <form action="thrid.php" method="post">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
          <?php
              $department = $country = $level = "";
              $department=$_POST['department'];
              $country=$_POST['country'];
              $level=$_POST['level'];
              $sql = "SELECT * FROM `resume` WHERE Country = '$country' AND Education_Level LIKE '%".$level."%' AND Department = '$department' ORDER BY SkillCount DESC";
              $result = $link->query($sql);
              if($result->num_rows > 0){
                  while ($row = $result->fetch_assoc()) {
                      $ID = $row['ID'];
                      $name = $row['Name'];
                      $email = $row['Email'];
                      $School = $row['School'];
                      $skillcount = $row['SkillCount'];
                      $statu = $row['statu']
            ?>
            
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="thrid.php?ID=<?php echo $ID; ?>"><img class="card-img-top" src="deflaut.jpg" alt="" width="200px" height="200px"></a>
                <div class="card-body">
                  <p style="display: none;" name="ID"><?php echo $ID; ?></p>
                  <h4 class="card-title">
                    <!-- <input type="submit" class="button" value=""> -->
                    <a href="thrid.php?ID=<?php echo $ID; ?>"><?php echo $name; ?></a>
                     <?php echo $statu; ?>
                  </h4>
                  <p name="Email"><h5><?php echo $email; ?></h5></
                  <p class="card-text" name="LV">
                  <?php echo $School; ?>
                  </p>
                </div>
              </div>
            </div>
            <?php
                  }
                }
            ?>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </form>
  </body>
</html>