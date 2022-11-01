<center>
<?php
include 'connect.php';
?>
<?php

 //print_r($_POST);
 $Email =$_POST['Email'];
 $Password =$_POST['Password'];
 $Name =$_POST['Name'] ;
 $Lname =$_POST['Lname'];
 $Tell=$_POST['Tell'];
 $address=$_POST['address'];
 
 mysqli_query($conn ,"INSERT INTO Regis (Email,Password,Name,Lname,Tell,address)
                        VALUES ('$Email','$Password','$Name','$Lname','$Tell','$address')");
  

  if(mysqli_affected_rows($conn)>0)
  {
   header("location: product_type_show.php");
  }else
   echo '<p>บันทึกข้อมูลไม่สำเร็จ</p>';
   echo mysqli_error($conn);


?>
</center>