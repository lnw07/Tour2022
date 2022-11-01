<?php
    include('connect.php');
    $to_id = $_GET['to_id'];
    $sqlDel = "DELETE FROM tour_location Where id_no='$to_id'";
    $statmemt = mysqli_query($connect, $sqlDel);
    header('location: show_admin.php');
?>  