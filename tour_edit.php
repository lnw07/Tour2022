<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขรายการประเภทสินค้า</title>
    <?php
        include_once('connect.php');
    ?>
</head>
<body>
    <?php
    if(!isset($_POST['ok'])){
        $ty_id = $_GET['ty_id'];
        //echo $t_id;///ตรวจสอบว่าค่ารหัสถูกส่งมาหรือไม่
        $sql_ass = "SELECT * FROM tour_type WHERE tour_id='$ty_id'";
        $result_ass = mysqli_query($connect, $sql_ass);
        while($typeto=mysqli_fetch_array($result_ass)){
            $toid=$typeto['tour_id'];
            $toname=$typeto['tour_name'];
        }
    ?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>รหัสประเภทสินค้า</td>
                <td><input type="text"  value="<?php echo $toid; ?>"></td>
            </tr>
            <tr>
                <td>รายการประเภทสินค้า</td>
                <td><input type="text" name="tourname" value="<?php echo $toname; ?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="tourd" value="<?php echo $toid; ?>">
                <td colspan="2"><input type="submit" value="บันทึกการแก้ไข" name="ok"></td>
            </tr>
        </table>
    </form>
    <?php }
    else{
        $ty_id    = $_POST['tourd'];
        $ty_name  = $_POST['tourname'];
        $sqlupdate = "UPDATE tour_type SET tour_name='$ty_name' WHERE tour_id = '$ty_id'";
        $result=mysqli_query($connect, $sqlupdate);
        header( "location: tour_type_show.php" );
    }
    
    ?>
</body>
</html>