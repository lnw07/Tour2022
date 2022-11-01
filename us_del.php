<?php
    include('connect.php');
    $ui = $_GET['ui'];
    $sqlDel = "DELETE FROM user_tour Where id_name='$ui'";
    $statmemt = mysqli_query($connect, $sqlDel);
    header('location: show_addus.php');
?>  