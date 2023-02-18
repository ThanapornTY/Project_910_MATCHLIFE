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
    <title>Contact</title>
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
          <li><a  href="/Project_910_MATCHLIFE/Role_user/HOME.php">หน้าหลัก</a></li>
          <li><a href="/Project_910_MATCHLIFE/Role_user/Volunteer_Page.php">จิตอาสา</a></li>
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

<?php 

if (isset($_SESSION['user_login'])) {
    $admin_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!-- ลงทะเบียน -->
<div class="detail-form">
    
    <div class="testbox">
        

              <main class="py-10">
            <!-- Container พื้นที่ลงเนื้อหา-->
            <div class="container-xl">
            <div class="border bg-surface-secondary h-full border-dashed rounded  justify-content-center align-items-center" style="min-height: 400px;">
                <div class="font-semibold text-muted p-5">
                
          <form action="/Project_910_MATCHLIFE/Role_user/formedit_db_profile.php" method="post">
<p>คลิ๊กที่นี่เพื่อย้อนกลับ <a href="/Project_910_MATCHLIFE/Role_user/Profile.php">ย้อนกลับ</a></p>


          <h4>ฟอร์มแก้ไขข้อมูล</h4>
            <div class="col">
              <label for="stdID" class="col-form-label"> รหัสนักศึกษา :  </label>
              <div >
                <input type="text" name="stdID" class="form-control" required value="<?= $row['stdID'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="firstname" class="col-form-label"> ชื่อ :  </label>
              <div>
                <input type="text" name="firstname" class="form-control" required value="<?= $row['firstname'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="lastname" class="col-form-label"> นามสกุล :  </label>
              <div>
                <input type="text" name="lastname" class="form-control" required value="<?= $row['lastname'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="tel" class="col-form-label"> เบอร์โทรศัพท์ :  </label>
              <div >
                <input type="text" name="tel" class="form-control" required value="<?= $row['tel'];?>" minlength="3">
              </div>
            </div>

            <!--เลือก role-->
            <div class="mb-3">
            <label for="major"class="form-label">สำนักวิชา</label> <br>
            <select class="form-select" required  name="major" aria-label="select urole">
              <option selected><?= $row['major'];?></option>
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
        

            <div class="col">
              <label for="email" class="col-form-label"> Email :  </label>
              <div >
                <input type="email" name="email" class="form-control" required value="<?= $row['email'];?>" minlength="3">
              </div>
            </div>


            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <button type="submit" class="but-1">แก้ไขข้อมูล</button>
          </form>
        </div>

                </div>
              </div>

          </main>
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
                </p>
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

<!--menu users-->
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>

</html>