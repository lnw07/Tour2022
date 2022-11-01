<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('pm.jpg');">
    <center>
    <div>
    <div>
        <?php
        include('navbar.php');
    ?>
        </div>
        <br><br><td><div style="margin-top: 5rem; font-size: 1.5rem;">
        <label for="login" style="font-size: 2rem;">ล็อกอิน</label><br>
        <label for="email">อีเมล์</label>
            <input type="text" placeholder="email" >
        <br><label for="password">รหัสผ่าน</label>
            <input type="text" placeholder="password" >
            <br><button type="log">ล็อกอิน</button>
            <a href="Register.php"><button type="regis">สมัครสมาชิก</button>
        </div>
    </div>
    </center>
</body>
</html>