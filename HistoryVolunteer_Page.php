<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ประวัติการทำกิจกรรม</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>    <!--Swiper Css-->

    <!--icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>    <!--Swiper Css-->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    <!--css-->
    <?php
      include ('style.php');
    ?>

</head>
<body>

<!-- Header Menu of the Page -->
<div class="header">
    <nav>
        <div class="logo"><span>M</span>ATCHLIFE</a></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a  href="/Project_910_MATCHLIFE/HOME.php">หน้าหลัก</a></li>
          <li><a href="/Project_910_MATCHLIFE/Volunteer_Page.php">จิตอาสา</a></li>
          <li><a  href="/Project_910_MATCHLIFE/About us_Page.php">เกี่ยวกับเรา</a></li>
          <li><a  href="/Project_910_MATCHLIFE/Contact_Page.php">ติดต่อ</a></li>
          <li><a href="/Project_910_MATCHLIFE/Sign in_Page.php" class="Button_nav" onclick="toggleMenu()">เข้าสู่ระบบ</a></li>
    
          <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-login">
                <form action="/action_page.php" method="post">
                  
                    <div class="login-container">
                        <h2>เข้าสู่ระบบ</h2>
                      <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="uname" required>
                  
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                      <p>**ล็อกอินด้วยรหัสเดียวกันกับ Reg SUT**</p>
                      <button type="submit">Login</button>
                  </form>
    
    
    
            </div>
    
        </div>
        </ul>
    </nav>
</div>

<div class="area-detail">
    <div class="bar-NameSeach">
        <div class="Name_Volunteer">
            <h2>ประวัติการทำกิจกรรม</h2>
        </div>
        
        <div class="search-form" >
            <input type="text" placeholder="Search..">
            <button>Search</button>
            
        </div>
    </div>

    <div class="lists-History-Volunteer">
        <div class="lists-Volunteer">
            <div class="img-Volunteer">
                <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" alt="">
            </div>

            <div class="Name_Volunteer">
                <h3>ประวัติการทำกิจกรรม</h3>
                <p><b>ผู้จัด: </b> กลุ่มสีน้ำ</p>
                <p><b>วันที่: </b> 28-29 กุมภาพันธ์ 2565</b>
                <p><b>เวลา: </b> 9:00 - 11:00 น.</p>
                <p><b>สถานที่:</b> อาคารเรียนรวม 1</p>
                <p><b>การแต่งกาย: </b>ชุดนักศึกษา</p>
                <p><b>ชั่วโมงจิสอาสา: </b>4 ชั่วโมง</p>
                <p><b>สถานะ: 11 / 50 คน</b> </p>

                <div class="status">
                    <div class="status-free">
                        <p>ว่าง</p>
                    </div>
                    <!--<div class="status-busy">
                        <p>ไม่ว่าง</p>
                    </div>-->
                </div>
            </div>

        </div>

    </div>
</div>

<footer class="footer" >
    <div class="containers_footer">
        <div class="container-1">
                <h3>ติดต่อ งานทุนการศึกษา</h3>
                <p>งานทุนการศึกษา ส่วนกิจการนักศึกษา 111 มหาวิทยาลัยเทคโนโลยีสุรนารี ถ.มหาวิทยาลัย ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000 , Facebook Page: ทุนการศึกษา มหาวิทยาลัยเทคโนโลยีสุรนารี<br>
            </div>

            <div class="container-2">
                <h3>ข้อมูลการติดต่อ</h3>
                <p>scholar@g.sut.ac.th<br>
                    โทรศัพท์ 044223114, 044223115, 044223774, 044223776
                    โทรสาร 044223778
                <!--<a href="mailto:hege@example.com">hege@example.com</a>--></p>
            </div>

            <div class="container-3">
                <h3>โทรศัพท์ติดต่อ</h3>
                <p>โทรศัพท์ 044223114, 044223115, 044223774, 044223776<br>
            </div>
    </div>
    <!--
    <div class="container-4">
        <p>จัดทำโดย : Nua Ler Gang<p>
    </div>-->
    
</footer>

</body>
</html>