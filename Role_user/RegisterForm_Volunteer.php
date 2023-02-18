<?php
session_start();
require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Volunteer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <script src="sweetalert2.min.js"></script>

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
          <li><a href="/Project_910_MATCHLIFE/Role_user/HOME.php">หน้าหลัก</a></li>
          <li><a class="active"  href="/Project_910_MATCHLIFE/Role_user/Volunteer_Page.php">จิตอาสา</a></li>
          <li><a  href="/Project_910_MATCHLIFE/Role_user/About us_Page.php">เกี่ยวกับเรา</a></li>
          <li><a  href="/Project_910_MATCHLIFE/Role_user/Contact_Page.php">ติดต่อ</a></li>
          <li><img src="/Project_910_MATCHLIFE/img/default-user-image.png" class="user-pic" onclick="toggleMenu()"></li>

    

          <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                <?php 

if (isset($_SESSION['user_login'])) {
    $admin_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
                    <img src="/Project_910_MATCHLIFE/img/default-user-image.png">
                    <h3><?php echo $row['stdID'] ?></h3>
                </div>
                <hr>
                <a href="/Project_910_MATCHLIFE/Role_user/Profile.php" class="sub-menu-link" >
                    <!--icon-->
                    <span class="material-symbols-outlined">
                        person
                        </span>
                    <p>โปรไฟล์</p>
                    <span></span>
                </a>

                <hr>
                <a href="/Project_910_MATCHLIFE/Role_user/HistoryVolunteer_Page.php" class="sub-menu-link" >
                    <!--icon-->
                    <span class="material-symbols-outlined">
                        manage_search
                        </span>
                    <p>ประวัติกิจกรรม</p>
                    <span></span>
                </a>

                <hr>
                <a href="/Project_910_MATCHLIFE/logout.php" class="sub-menu-link" >
                    <!--icon-->
                    <span class="material-symbols-outlined">
                        logout
                        </span>
                    <p>ออกจากระบบ</p>
                </a>



            </div>

        </div>
        </ul>
    </nav>
</div>



<div class="area-detail-form">
    <!--<div class="Name_Volunteer">
        <h2>จิตอาสาทำสีน้ำให้น้องๆ พื้นที่ห่างไกล</h2>
    </div>-->

    <div class="grid-detail">
        <div class="grid-detail-form">
            <div class="Detail_Volunteer-form">
                <h2>จิตอาสาทำสีน้ำให้น้องๆ พื้นที่ห่างไกล</h2>
                    <b>รายละเอียด:</b>
                    <p>เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา
                    เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา 
                    เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา 
                    เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษาเนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา 
                    เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา 
                    เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา เนื้อหาของช่องทางการติดต่อและรายละเอียดงานต่างๆของงานทุนกาศึกษา 
                    </p>
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


        <?php
    if(isset($_GET['id'])){
      require_once 'config/db.php';
      $stmt = $conn->prepare("SELECT* FROM users WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($stmt->rowCount() < 1){
          header('Location: /Project_910_MATCHLIFE/Role_MasterAdmin/Account.php');
          exit();
      }
    }//isset
    ?>

        <div class="testbox">
            <form action="/">
                <div class="item">
                    <label for="name">รหัสนักศึกษา<span>*</span></label>
                    <input id="name" type="text" name="std_id" required value="<?= $row['stdID'];?>"/>
                    <input type="text" name="stdID" class="form-control" required value="<?= $row['stdID'];?>" minlength="3">
                </div>
              <div class="item">
                <label for="name">ชื่อ - นามสกุล<span>*</span></label>
                <input id="name" type="text" name="name" required/>
              </div>
              <div class="item">
                <label for="email">Email Address<span>*</span></label>
                <input id="email" type="user_email" name="email" required/>
              </div>
              

              <div class="item" >
                <p>คณะ<span>*</span></p>
                <select>
                  <option selected value="" disabled selected>โปรดเลือกคณะ</option>
                  <option value="course-type" >สำนักวิชาศาสตร์และศิลป์ดิจิทัล</option>
                  <option value="short-courses">สำนักวิชาวิทยาศาสตร์</option>
                  <option value="short-courses">สำนักวิชาเทคโนโลยีสังคม</option>
                  <option value="short-courses">สำนักวิชาเทคโนโลยีการเกษตร</option>
                  <option value="short-courses">สำนักวิชาแพทยศาสตร์</option>
                  <option value="short-courses">สำนักวิชาวิศวกรรมศาสตร์</option>
                  <option value="short-courses">สำนักวิชาพยาบาลศาสตร์</option>
                  <option value="short-courses">สำนักวิชาทันตแพทยศาสตร์</option>
                  <option value="short-courses">สำนักวิชาสาธารณสุขศาสตร์</option>
                </select>
              
              <div class="item">
                <label for="phone">เบอร์โทร<span>*</span></label>
                <input id="phone" type="user_tel" name="phone" required/>
              </div>
              <div class="question">
                <label>เลือกวันที่ทำจิตอาสา</label>
                <div class="question-answer">
                  <div>
                    <input type="radio" value="none" id="radio_1" name="20092565"/>
                    <label for="radio_1" class="radio"><span>วันที่ 20 กันยายน 2565</span></label>
                  </div>
                  <div>
                    <input  type="radio" value="none" id="radio_2" name="21092565"/>
                    <label for="radio_2" class="radio"><span>วันที่ 21 กันยายน 2565</span></label>
                  </div>
                </div>
              </div>

              <div class="item">
                <label for="name">หมายเหตุ</label>
                <textarea id="note" type="text" name="name" required></textarea>
              </div>

           
              
              <div class="btn-block">
                <button type="submit" onclick="JSalert()">SUBMIT</button>
              </div>
              
              
              
            </form>
          </div>
    </div>
    

</div>




<footer class="footer">
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
            </div>

            <div class="container-3">
                <h3>โทรศัพท์ติดต่อ</h3>
                <p>โทรศัพท์ 044223114, 044223115, 044223774, 044223776<br>
            </div>
    </div>
    
</footer>

<!--menu users-->
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
</body>

</html>