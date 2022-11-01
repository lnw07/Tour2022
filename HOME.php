<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Image Slider</title>
    
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <div>
    <div><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
        <?php
        include('navbar.php');
    ?>
        </div>
        <div>
        <?php
        include('sl3.php');
    ?>
        </div>
        <div>
            <center>
            <br><br><h2>โปรโมชั่น<h2>
            </center>
        </div>
        <div>
            <?php
            include('sl2.php');
            ?>
         <div>
            <center>
            <br><br><h2>พักผ่อนหย่อนใจ ไว้ใจทัวร์เรา<h2>
            <img src="po.png" height="150" width="150">
            </center>
        </div><br>

    <center><h1> ติดต่อเรา</center><br><br>
    <center><h2> วิทยาลัยอาชีวศึกษานครปฐม</center><br> 
    <center><h2> สังกัดสำนักงานคณะกรรมการการอาชีวศึกษา</center><br>
    <center><a href="https://www.facebook.com/MediaEducationNvc"><img src="FAC.png" height="150" width="150"></center><br></a>
    <center><h2>สถานที่ตั้ง</center>
    <center><img src="LO.png" height="150" width="150"><h2>  90 ถนน เทศา ตำบลพระปฐมเจดีย์ อำเภอเมืองนครปฐม นครปฐม 73000</center>
    <center><h2> เบอร์โทร : 034-252-790 , 034-241-853 ต่อ 1105</center>
    <center><h2> อีเมล Nakhonpathom02@vec.mail.co.th</center><br><br>



    <H4>กล่องแสดงความคิดเห็น</H4>
   
    <FORM NAME="INPUT"แสดงความคิดเห็น>
     
       <TEXTAREA NAME="COMMENT"COLS=50 ROW=15></TEXTAREA>
   
    </FORM><br><br><br><br><br><br><br><br>
    
        <footer>
              <div class="page-count">
      <script type="text/javascript">
          if (localStorage.pagecount)
            {
            localStorage.pagecount=Number(localStorage.pagecount) +1;
            }
       else
          {
            localStorage.pagecount=1;
            }
       document.write("จำนวนการเข้าชม"+ localStorage.pagecount + "ครั้ง");
      </script>
    </div>



              <style>
footer {

        position: fixed;

        width: 100%;

        left: 0;

        bottom: 0;

        background-color: brown;

        color: white;

        text-align: center;

}
</style>
        </footer>
    </div>


    

   
  </body>
</html>