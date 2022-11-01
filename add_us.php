<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="adddb_us.php" method="post">
        <h1>ข้อมูลการจองของมึงอ่ะ</h1>
        <h2><label>ชื่อจริง</label></h2>
            <input type="text" name="fname" style=" font-size: 1.75rem;">
    <br><h2><label >นามสกุล</label></h2>
            <input type="text" name="lname" style=" font-size: 1.75rem;">
        <br><h2><label >วันที่</label></h2>
            <input type="text" name="dyname" style=" font-size: 1.75rem;">
            <br><h2><label  >เวลาไป</label></h2>
            <input type="text"name="tname" style=" font-size: 1.75rem;">
            <br><h2><label  >เวลากลับ</label></h2>
            <input type="text"name="tcname" style=" font-size: 1.75rem;">
            <br><h2><label  >สถานที่</label></h2>
            <input type="text"name="loname" style=" font-size: 1.75rem;">
            <br><h2><label  >รหัสทัวร์</label></h2>
            <input type="text"name="idname" style=" font-size: 1.75rem;"><br><br>
            <button type="submit" value="เพิ่มข้อมูลประเภทสินค้า" name="ok" style="width:100px;height:50px">ส่ง</button>
            </form>
    </center>
</body>
</html>