<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include('navbar.php');
    ?>
</head>
<body>
    <center><br><br><br><br><br><br>
        <h1>จัดการข้อมูลทัวร์</h1><br>
        <th colspan="2">
                    <a href="auadmin.php">
                    <img src="every_image/add_box_FILL0_wght400_GRAD0_opsz48.png">
                </a>  
                </th>
            <br><br>
            <table width="800">
            <?php
        $sqltourtype = "SELECT * FROM tour_location Order by id_no ASC";
        $runsqltourtype = mysqli_query($connect, $sqltourtype);
        if(!$runsqltourtype){
            echo "ไม่พบข้อมูล" .mysqli_error($connect);
        }
        while($result=mysqli_fetch_array($runsqltourtype)){
            $to_id = $result ['id_no'];
            $to_lo = $result ['location_no'];
            $to_da = $result ['day_no'];
            $to_ti = $result ['time_no'];
            $tc_id = $result ['tc_id'];
    ?>
            <tr>
                <td>ประเภท/ทัวร์</td>
            </tr>
            <tr>
                <td> รหัสทัวร์</td>
                <td> สถานที่</td>
                <td> วัน</td>
                <td> เวลาไป</td>
                <td> เวลากลับ</td>
            </tr>
            <tr>
                <td> <?php echo $to_id;?></td>
                <td> <?php echo $to_lo;?></td>
                <td> <?php echo $to_da;?></td>
                <td> <?php echo $to_ti;?></td>
                <td> <?php echo $tc_id;?></td>
                <td><a href="admindei.php?to_id=<?php echo $to_id; ?>"><img src="every_image\delete_FILL0_wght400_GRAD0_opsz48.png" width="25" height="25"></a></td>
            </tr>
            <?php
                    }
    ?>
            </table>
    </center>
</body>
</html>