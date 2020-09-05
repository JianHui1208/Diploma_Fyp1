<?php
require_once "config.php";
    $sql = "SELECT COUNT(ordernumber) As total from orderlist_tai";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $total = $row['total'];
            }
        }

    $sql = "SELECT COUNT(state) As Taipei from orderlist_tai where state='Taipei'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Taipei = $row['Taipei'];
            }
        }

    $sql = "SELECT COUNT(state) As Tainan from orderlist_tai where state='Tainan'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Tainan = $row['Tainan'];
            }
        }

    $sql = "SELECT COUNT(state) As Kaohsiung from orderlist_tai where state='Kaohsiung'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Kaohsiung = $row['Kaohsiung'];
            }
        }

    $sql = "SELECT COUNT(state) As Chiayi from orderlist_tai where state='Chiayi'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Chiayi = $row['Chiayi'];
            }
        }

    $sql = "SELECT COUNT(state) As Yilan from orderlist_tai where state='Yilan'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Yilan = $row['Yilan'];
            }
        }

    $sql = "SELECT COUNT(gender) As Male from orderlist_tai where gender='Male'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Male = $row['Male'];
            }
        }

    $sql = "SELECT COUNT(gender) As fermale from orderlist_tai where gender='female'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fermale = $row['fermale'];
            }
        }

    $sql = "SELECT COUNT(product) As PenCase from orderlist_tai where product='Pen Case'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $PenCase = $row['PenCase'];
            }
        }

    $sql = "SELECT COUNT(product) As Pen from orderlist_tai where product='Pen'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Pen = $row['Pen'];
            }
        }

    $sql = "SELECT COUNT(product) As SchoolBag from orderlist_tai where product='school bag'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $SchoolBag = $row['SchoolBag'];
            }
        }

    $sql = "SELECT COUNT(product) As Eraser from orderlist_tai where product='Eraser'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Eraser = $row['Eraser'];
            }
        }

    $sql = "SELECT COUNT(product) As Sharpener from orderlist_tai where product='Sharpener'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Sharpener = $row['Sharpener'];
            }
        }

    $sql = "SELECT COUNT(age) As T from orderlist_tai where (age>=11 AND age<=20)";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $T = $row['T'];
            }
        }

    $sql = "SELECT COUNT(gender) As V from orderlist_tai where (age>=21 AND age<=30)";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $V = $row['V'];
            }
        }

    $sql = "SELECT COUNT(gender) As S from orderlist_tai where (age>=31 AND age<=40)";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $S = $row['S'];
            }
        }

    $sql = "SELECT COUNT(gender) As P from orderlist_tai where age>=41";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $P = $row['P'];
            }
        }

    $sql = "SELECT COUNT(salesplace) As shopee from orderlist_tai where salesplace='shopee'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $shopee = $row['shopee'];
            }
        }

    $sql = "SELECT COUNT(salesplace) As lazada from orderlist_tai where salesplace='lazada'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lazada = $row['lazada'];
            }
        }

    $sql = "SELECT COUNT(salesplace) As taobao from orderlist_tai where salesplace='taobao'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $taobao = $row['taobao'];
            }
        }

    $sql = "SELECT COUNT(salesplace) As Amazon from orderlist_tai where salesplace='Amazon'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Amazon = $row['Amazon'];
            }
        }

    $sql = "SELECT COUNT(salesplace) As shop from orderlist_tai where salesplace='shop'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $shop = $row['shop'];
            }
        }

    $sql = "SELECT COUNT(member) As none from orderlist_tai where member='none'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $none = $row['none'];
            }
        }

    $sql = "SELECT COUNT(member) As bronze from orderlist_tai where member='bronze'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bronze = $row['bronze'];
            }
        }

    $sql = "SELECT COUNT(member) As silver from orderlist_tai where member='silver'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $silver = $row['silver'];
            }
        }

    $sql = "SELECT COUNT(member) As gold from orderlist_tai where member='gold'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $gold = $row['gold'];
            }
        }

    $sql = "SELECT COUNT(date_S) As one from orderlist_tai where date_S='1/1/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $one = $row['one'];
            }
        }

    $sql = "SELECT COUNT(date_S) As two from orderlist_tai where date_S='1/2/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $two = $row['two'];
            }
        }

    $sql = "SELECT COUNT(date_S) As three from orderlist_tai where date_S='1/3/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $three = $row['three'];
            }
        }

    $sql = "SELECT COUNT(date_S) As four from orderlist_tai where date_S='1/4/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $four = $row['four'];
            }
        }

    $sql = "SELECT COUNT(date_S) As five from orderlist_tai where date_S='1/5/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $five = $row['five'];
            }
        }

    $sql = "SELECT COUNT(date_S) As six from orderlist_tai where date_S='1/6/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $six = $row['six'];
            }
        }

    $sql = "SELECT COUNT(date_S) As seven from orderlist_tai where date_S='1/7/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $seven = $row['seven'];
            }
        }

    $sql = "SELECT COUNT(date_S) As eight from orderlist_tai where date_S='1/8/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $eight = $row['eight'];
            }
        }

    $sql = "SELECT COUNT(date_S) As nine from orderlist_tai where date_S='1/9/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nine = $row['nine'];
            }
        }

    $sql = "SELECT COUNT(date_S) As ten from orderlist_tai where date_S='1/10/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ten = $row['ten'];
            }
        }

    $sql = "SELECT COUNT(date_S) As eleven from orderlist_tai where date_S='1/11/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $eleven = $row['eleven'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twelve from orderlist_tai where date_S='1/12/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twelve = $row['twelve'];
            }
        }

    $sql = "SELECT COUNT(date_S) As thirteen from orderlist_tai where date_S='1/13/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $thirteen = $row['thirteen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As fourteen from orderlist_tai where date_S='1/14/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fourteen = $row['fourteen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As fifteen from orderlist_tai where date_S='1/15/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fifteen = $row['fifteen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As sixteen from orderlist_tai where date_S='1/16/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sixteen = $row['sixteen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As seventeen from orderlist_tai where date_S='1/17/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $seventeen = $row['seventeen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As eighteen from orderlist_tai where date_S='1/18/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $eighteen = $row['eighteen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As nineteen from orderlist_tai where date_S='1/19/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nineteen = $row['nineteen'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty from orderlist_tai where date_S='1/20/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty = $row['twenty'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_one from orderlist_tai where date_S='1/21/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_one = $row['twenty_one'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_two from orderlist_tai where date_S='1/22/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_two = $row['twenty_two'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_three from orderlist_tai where date_S='1/23/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_three = $row['twenty_three'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_four from orderlist_tai where date_S='1/24/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_four = $row['twenty_four'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_five from orderlist_tai where date_S='1/25/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_five = $row['twenty_five'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_six from orderlist_tai where date_S='1/26/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_six = $row['twenty_six'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_seven from orderlist_tai where date_S='1/27/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_seven = $row['twenty_seven'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_eight from orderlist_tai where date_S='1/28/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_eight = $row['twenty_eight'];
            }
        }

    $sql = "SELECT COUNT(date_S) As twenty_nine from orderlist_tai where date_S='1/29/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $twenty_nine = $row['twenty_nine'];
            }
        }

    $sql = "SELECT COUNT(date_S) As thirty from orderlist_tai where date_S='1/30/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $thirty = $row['thirty'];
            }
        }

    $sql = "SELECT COUNT(date_S) As thirty_one from orderlist_tai where date_S='1/31/20'";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $thirty_one = $row['thirty_one'];
            }
        }

    $sql = "SELECT SUM(TotalPrice) As Total from orderlist_tai";
    $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Total = $row['Total'];
            }
        }
    $totalSo = number_format($total);
    $totalSales = "Total Sales in January month = ".$totalSo;
    $totalPrice = number_format($Total);

    $ResponsiveCharts = array(
        array("label"=> "2020-01-01", "y"=> $one),
        array("label"=> "2020-01-02", "y"=> $two),
        array("label"=> "2020-01-03", "y"=> $three),
        array("label"=> "2020-01-04", "y"=> $four),
        array("label"=> "2020-01-05", "y"=> $five),
        array("label"=> "2020-01-06", "y"=> $six),
        array("label"=> "2020-01-07", "y"=> $seven),
        array("label"=> "2020-01-08", "y"=> $eight),
        array("label"=> "2020-01-09", "y"=> $nine),
        array("label"=> "2020-01-10", "y"=> $ten),
        array("label"=> "2020-01-11", "y"=> $eleven),
        array("label"=> "2020-01-12", "y"=> $twelve),
        array("label"=> "2020-01-13", "y"=> $thirteen),
        array("label"=> "2020-01-14", "y"=> $fourteen),
        array("label"=> "2020-01-15", "y"=> $fifteen),
        array("label"=> "2020-01-16", "y"=> $sixteen),
        array("label"=> "2020-01-17", "y"=> $seventeen),
        array("label"=> "2020-01-18", "y"=> $eighteen),
        array("label"=> "2020-01-19", "y"=> $nineteen),
        array("label"=> "2020-01-20", "y"=> $twenty),
        array("label"=> "2020-01-21", "y"=> $twenty_one),
        array("label"=> "2020-01-22", "y"=> $twenty_two),
        array("label"=> "2020-01-23", "y"=> $twenty_three),
        array("label"=> "2020-01-24", "y"=> $twenty_four),
        array("label"=> "2020-01-25", "y"=> $twenty_five),
        array("label"=> "2020-01-26", "y"=> $twenty_six),
        array("label"=> "2020-01-27", "y"=> $twenty_seven),
        array("label"=> "2020-01-28", "y"=> $twenty_eight),
        array("label"=> "2020-01-29", "y"=> $twenty_nine),
        array("label"=> "2020-01-30", "y"=> $thirty),
        array("label"=> "2020-01-31", "y"=> $thirty_one)
    );

    $ColumnChart = array( 
        array("y" => $Kaohsiung, "label" => "Kaohsiung" ),
        array("y" => $Tainan, "label" => "Tainan" ),
        array("y" => $Taipei, "label" => "Taipei" ),
        array("y" => $Chiayi, "label" => "Chiayi" ),
        array("y" => $Yilan, "label" => "Yilan" )
    );

    $ColumnChart1 = array( 
        array("y" => $none, "label" => "None" ),
        array("y" => $bronze, "label" => "Bronze" ),
        array("y" => $silver, "label" => "Silver" ),
        array("y" => $gold, "label" => "Gold" )
    );

    $PieCharts1 = array( 
        array("y" => $T, "label" => "Age At 11 to 20" ),
        array("y" => $V, "label" => "Age At 21 to 30" ),
        array("y" => $S, "label" => "Age At 31 to 40" ),
        array("y" => $P, "label" => "Age At 40" )
    );

    $PieCharts2 = array( 
        array("y" => $Male, "label" => "Male" ),
        array("y" => $fermale, "label" => "Fermale" )
    );

    $PieCharts3 = array( 
        array("y" => $PenCase, "label" => "Pen Case" ),
        array("y" => $Pen, "label" => "Pen" ),
        array("y" => $SchoolBag, "label" => "School Bag" ),
        array("y" => $Eraser, "label" => "Eraser" ),
        array("y" => $Sharpener, "label" => "Sharpener" )
    );

    $BarCharts = array( 
        array("y" => $taobao,"label" => "TaoBao" ),
        array("y" => $shop,"label" => "Shop" ),
        array("y" => $Amazon,"label" => "Amazon" ),
        array("y" => $lazada,"label" => "Lazada" ),
        array("y" => $shopee,"label" => "Shopee" )
    );
?>