<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit&display=swap" rel="stylesheet">
    
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
          <li><a  href="/Project_910_MATCHLIFE/Home.php">หน้าหลัก</a></li>
          <li><a  href="/Project_910_MATCHLIFE/Volunteer_Page.php">จิตอาสา</a></li>
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


<!-- ลงทะเบียน -->
<div class="detail-form">
    <div class="testbox">
      
        <form action="Sign Up_db.php" method="post">

            <div class="container">
        <h3 class="mt-4">สมัครสมาชิก</h3>
        <hr>
        <form action="Sign Up_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="stdID" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="stdID" aria-describedby="stdID">
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <!--เลือก role-->
            <div class="mb-3">
            <label for="major"class="form-label">สำนักวิชา</label> <br>
            <select class="form-select" required  name="major" aria-label="select urole">
              <option disabled selected>เลือกสำนักวิชา</option>
              <option value="สำนักวิชาศาสตร์และศิลป์ดิจิทัล" >สำนักวิชาศาสตร์และศิลป์ดิจิทัล</option>
                  <option value="สำนักวิชาวิทยาศาสตร์">สำนักวิชาวิทยาศาสตร์</option>
                  <option value="สำนักวิชาเทคโนโลยีสังคม">สำนักวิชาเทคโนโลยีสังคม</option>
                  <option value="สำนักวิชาเทคโนโลยีการเกษตร">สำนักวิชาเทคโนโลยีการเกษตร</option>
                  <option value="สำนักวิชาแพทยศาสตร์">สำนักวิชาแพทยศาสตร์</option>
                  <option value="สำนักวิชาวิศวกรรมศาสตร์">สำนักวิชาวิศวกรรมศาสตร์</option>
                  <option value="สำนักวิชาพยาบาลศาสตร์">สำนักวิชาพยาบาลศาสตร์</option>
                  <option value="สำนักวิชาทันตแพทยศาสตร์">สำนักวิชาทันตแพทยศาสตร์</option>
                  <option value="สำนักวิชาสาธารณสุขศาสตร์">สำนักวิชาสาธารณสุขศาสตร์</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">เบอร์โทรศัพท์</label>
                <input type="tel" class="form-control" name="tel" aria-describedby="tel">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <button class="but-1" type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="Sign in_Page.php">เข้าสู่ระบบ</a></p>
    </div> 
          </div>
  
        </form>
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