<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include('connect.php');
    ?>
</head>
<body>
    <?php
        if(isset($_POST['ok'])){
            $tt_id = $_POST['tourd'];
            $tt_name = $_POST['tourname'];
            $sql_insert="INSERT INTO tour_type Values('$tt_id', '$tt_name')";
            $result=mysqli_query($connect, $sql_insert);
            header( "location: tour_type_show.php");
        }
    ?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>รหัสประเภททัวร์</td>
                <td><input type="text" name="tourd"></td>
            </tr>
            <tr>
            <td>ประเภททัวร์</td>
            <td><input type="text" name="tourname"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"value="เพิ่มข้อมูลประเภททัวร์" name="ok"></td>
            </tr>
        </table>
    </form>
</body>
</html>