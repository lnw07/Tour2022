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
        <h1>การจัดการประเภททัวร์</h1>
        <br><br>
        <table width="800">
            <tr>
                <th>รหัสประเภททัวร์</th>
                <th>รายการประเภททัวร์</th>
                <th colspan="2">
                    <a href="add_show.php">
                    <img src="every_image/add_box_FILL0_wght400_GRAD0_opsz48.png">
                </a>  
                </th>
            </tr>
            <?php
                $sqltourtype = "SELECT * FROM tour_type Order by tour_id ASC";
                $runsqltourtype = mysqli_query($connect, $sqltourtype);
                if(!$runsqltourtype){
                    echo "ไม่พบข้อมูล" .mysqli_error($connect);
                }

                while($result=mysqli_fetch_array($runsqltourtype)){
                    $ty_id = $result ['tour_id'];
                    $ty_name = $result ['tour_name'];
                ?>
                <tr>
                    <td><?php echo $ty_id;?></td>
                    <td><?php echo $ty_name;?></td>
                    <td><a href="tour_edit.php?ty_id=<?php echo $ty_id; ?>"><img src="every_image\settings_FILL0_wght400_GRAD0_opsz48.png" width="25" height="25"></a></td>
                    <td><a href="tour_del.php?ty_id=<?php echo $ty_id; ?>"><img src="every_image\delete_FILL0_wght400_GRAD0_opsz48.png" width="25" height="25"></a></td>
                </tr>
                <?php
                }
                ?>
        </table>
    </center>
</body>
</html>