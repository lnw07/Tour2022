<center>
<?php
include ('connect.php');
?>
<?php

 //print_r($_POST);
 $Email =$_POST['Email'];
 $Password =$_POST['Password'];
 $Name =$_POST['Name'] ;
 $Lname =$_POST['Lname'];
 $Tell=$_POST['Tell'];
 $address=$_POST['address'];
 
 mysqli_query($connect ,"INSERT INTO regis (Email,Password,Name,Lname,Tell,address)
                        VALUES ('$Email','$Password','$Name','$Lname','$Tell','$address')");
  

  if(mysqli_affected_rows($connect)>0)
  {
   echo'<p><h1>บันทึกข้อมูลสำเร็จ</h1></p>';
   echo '<a href ="HOME.php"><h1>กลับไปหน้าหลัก</h1>';
  }else
   echo '<p>บันทึกข้อมูลไม่สำเร็จ</p>';
   echo mysqli_error($connect);


?>
</center>