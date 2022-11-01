<?php
include 'connect.php';
?>
<?php
 if(isset($_POST['ok'])){
 $cord =$_POST['cord'];
 $location =$_POST['location'];
 $day =$_POST['dy'] ;
 $time =$_POST['time'];
 $sql_insert = "INSERT INTO tour_location values ('$cord','$location','$day','$time')";
 mysqli_query($connect,$sql_insert);
 } 
                        
  if(mysqli_affected_rows($connect)>0)
  {
   header("location: admin.php");
  }else
   echo '<p>บันทึกข้อมูลไม่สำเร็จ</p>';
   echo mysqli_error($connect);


?>
