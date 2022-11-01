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
        <form action="adddb.php" method="post">
        <h1>เพิ่มข้อมูล</h1>
        <label  >รหัสทัวร์</label>
            <input type="text" name="cord">
    <br><label >สถานที่</label>
            <input type="text" name="location">
        <br><label >วันที่</label>
            <input type="text" name="dy">
            <br><label  >เวลา</label>
            <input type="text"name="time" >
            <button type="submit" value="เพิ่มข้อมูลประเภทสินค้า" name="ok">ส่ง</button>
            </form>
    </center>
</body>
</html>