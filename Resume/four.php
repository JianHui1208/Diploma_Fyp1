<?php
require_once "config.php";
    $ID = $_GET['ID'];
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
        $sql = "SELECT * from resume where ID = '$ID'";
        $result = $link->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $CNumber = $row['Contact_Number'];
                }
            }
    }
    $timestamp = mt_rand(1, time());
    $randomDate = date("d M Y", $timestamp);
    $sql = "INSERT INTO `resumecollect`(`name`, `email`, `date`) VALUES ('$name','$email','$randomDate')";
    $result = $link -> query($sql);
    $sql = "UPDATE `resume` SET `statu`=' | Pending' WHERE ID = $ID";
    $result = $link -> query($sql);
    echo "<script>alert('Email already send');window.history.back();</script>";

?>