<?php
    include('connect.php');
    $ty_id = $_GET['ty_id'];
    $sqlDel = "DELETE FROM tour_type Where tour_id='$ty_id'";
    $statmemt = mysqli_query($connect, $sqlDel);
    header('location: tour_type_show.php');
?>  