<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        include('connect.php');
    ?>
    <br><br><br><br><center>
     <h1>หน้าจัดการระบบ</h1>
        <tr>
            <th>
            <td><a href="add.php"><button width="30"style="width:200px; height:100; font-size:25px;">เพิ่มข้อมูล</button></a></td>
            <td><a href="edit.php"><button width="30"style="width:200px; height:100; font-size:25px;">แก้ไข</button></a> </td>
            <td><button width="30"style="width:200px; height:100; font-size:25px;">ลบ</button></td>
            </th>
        </tr>
        <br><br><br><?php
        $sql="SELECT * FROM tour_location";
        $result=$connect->query($sql);
        if($result->num_rows >0){
            echo"<tabel><tr><th>id</th><th>location</th><th>day</th><th>time</th></tr><br>";
       
        while($row=$result->fetch_assoc()){
            echo"<tr><td>" . $row["id_no"]. "</td><td>".$row["location_no"]."".$row["day_no"]."".$row["time_no"]."</td></tr><br>";
        }
            echo"</tabel>";
        }else{
            echo"0 results";
        }

    ?>
    </center>
</body>
</html>