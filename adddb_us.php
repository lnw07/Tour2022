<?php
include 'connect.php';
?>
<?php
 if(isset($_POST['ok'])){
 $fn =$_POST['fname'];
 $ln =$_POST['lname'];
 $dn =$_POST['dyname'] ;
 $tn =$_POST['tname'];
 $tc =$_POST['tcname'];
 $lon =$_POST['loname'];
 $in =$_POST['idname'];
 $sql_insert = "INSERT INTO user_tour values ('$fn','$ln','$dn','$tn','$tc','$lon','$in')";
 mysqli_query($connect,$sql_insert);
 } 
                        
  if(mysqli_affected_rows($connect)>0)
  {
   header("location: show_addus.php");
  }else
   echo '<p>บันทึกข้อมูลไม่สำเร็จ</p>';
   echo mysqli_error($connect);


?>
