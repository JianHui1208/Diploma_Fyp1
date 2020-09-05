<?php
require_once "config.php";
$sql = "SELECT COUNT(Education_Level) As LvDE from resume where Education_Level LIKE '%degree%'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $LvDE = $row['LvDE'];
            }
		}
$sql = "SELECT COUNT(Education_Level) As LvDi from resume where Education_Level LIKE '%diploma%'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $LvDi = $row['LvDi'];
            }
		}
$sql = "SELECT COUNT(Education_Level) As LvPhD from resume where Education_Level LIKE '%PhD%'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $LvPhD = $row['LvPhD'];
            }
		}
$sql = "SELECT COUNT(Education_Level) As LvOth from resume where Education_Level LIKE '%HighSchool%'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $LvOth = $row['LvOth'];
            }
		}
$sql = "SELECT COUNT(Department) As FD from resume where Department = 'Financial Department'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $FD = $row['FD'];
            }
		}
$sql = "SELECT COUNT(Department) As HRD from resume where Department = 'Human Resources Department'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $HRD = $row['HRD'];
            }
		}
$sql = "SELECT COUNT(Department) As MAD from resume where Department = 'Maintenance Department'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $MAD = $row['MAD'];
            }
		}
$sql = "SELECT COUNT(Department) As MKD from resume where Department = 'Marketing Department'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $MKD = $row['MKD'];
            }
		}
$sql = "SELECT COUNT(Department) As ITD from resume where Department = 'Information and Technology Department'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ITD = $row['ITD'];
            }
        }
$department = array( 
	array("label"=>"Financial Department", "y"=>$FD),
	array("label"=>"Human Resources Department", "y"=>$HRD),
	array("label"=>"Maintenance Department", "y"=>$MAD),
	array("label"=>"Marketing Department", "y"=>$MKD),
	array("label"=>"Information and Technology Department", "y"=>$ITD)
);

$position = array( 
	array("label"=>"Financial Department", "y"=>51),
	array("label"=>"Human Resources Department", "y"=>26),
	array("label"=>"Maintenance Department", "y"=>13),
	array("label"=>"Marketing Department", "y"=>13),
	array("label"=>"Information and Technology Department", "y"=>7)
);

$education = array( 
	array("label"=>"Diploma", "y"=>$LvDi),
	array("label"=>"Degree", "y"=>$LvDE),
	array("label"=>"PhD", "y"=>$LvPhD),
	array("label"=>"HighsSchool", "y"=>$LvOth)
);

$Monthly = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);
?>