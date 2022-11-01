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
<center>
    <br><br><br><br><h1>ข้อมูลการจอง</h1>
    <br><br>
    <table width="800">
    <?php
        $sqlusertype = "SELECT * FROM user_tour Order by id_name ASC";
        $runsqlusertype = mysqli_query($connect, $sqlusertype);
        if(!$runsqlusertype){
            echo "ไม่พบข้อมูล" .mysqli_error($connect);
        }
        while($result=mysqli_fetch_array($runsqlusertype)){
            $uf = $result ['f_name'];
            $ul = $result ['l_name'];
            $ud = $result ['d_name'];
            $ut = $result ['t_name'];
            $uct = $result ['tc_name'];
            $ulo = $result ['lo_name'];
            $ui = $result ['id_name'];
    ?>
            <tr>
                <td> ชื่อ</td>
                <td> นามสกุล</td>
                <td> วัน</td>
                <td> เวลาไป</td>
                <td> เวลากลับ</td>
                <td> สถานที่</td>
                <td> รหัสทัวร์</td>
            </tr>
            <tr>
                <td> <?php echo $uf;?></td>
                <td> <?php echo $ul;?></td>
                <td> <?php echo $ud;?></td>
                <td> <?php echo $ut;?></td>
                <td> <?php echo $uct;?></td>
                <td> <?php echo $ulo;?></td>
                <td> <?php echo $ui;?></td>
                <td><a href="us_del.php?ui=<?php echo $ui; ?>"><img src="every_image\delete_FILL0_wght400_GRAD0_opsz48.png" width="25" height="25"></a></td>
            </tr>
            <?php
                    }
    ?>
</body>
                </table>
</center>
</html>