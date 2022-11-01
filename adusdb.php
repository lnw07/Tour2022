<?php
include 'connect.php';
?>
<?php
 if(isset($_POST['ok'])){
 $c_us =$_POST['cus'];
 $lu_s =$_POST['lus'];
 $du_s = $_POST['dus'] ;
 $tu_s = $_POST['tus'];
 $tcu_s = $_POST['tcus'];
 $sql_insert = "INSERT INTO tour_location values ('$c_us','$lu_s','$du_s','$tu_s','$tcu_s')";
 mysqli_query($connect,$sql_insert);
 } 
                        
  if(mysqli_affected_rows($connect)>0)
  {
   header("location: show_admin.php");
  }else
   echo '<p>บันทึกข้อมูลไม่สำเร็จ</p>';
   echo mysqli_error($connect);


?>
