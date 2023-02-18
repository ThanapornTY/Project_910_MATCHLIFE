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
    <title>Volunteer</title>
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

    <script defer src="/Project_910_MATCHLIFE/script.js"></script>

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
          <li><a class="active" href="/Project_910_MATCHLIFE/Role_user/HOME.php">หน้าหลัก</a></li>
          <li><a  href="/Project_910_MATCHLIFE/Role_user/Volunteer_Page.php">จิตอาสา</a></li>
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
    if(isset($_GET['id'])){
      require_once 'config/db.php';
      $stmt = $conn->prepare("SELECT* FROM volunteer WHERE volu_id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($stmt->rowCount() < 1){
          header('Location: /Project_910_MATCHLIFE/Role_user/Volunteer_DetailPage.php');
          exit();
      }
    }//isset
    ?>

<div class="area-detail-form">

    <div class="grid-detail">
        
        <div class="grid-detail-form">
            <div class="Detail_Volunteer-form">
                <h2><?= $row['volu_name'];?></h2>
                    <b>รายละเอียด:</b>
                    <p><?= $row['volu_detail'];?></p>
                    <p><b>วันที่: </b> <?= $row['volu_start'];?></b>
            <p><b>สถานที่:</b> <?= $row['volu_location'];?></p>
            <p><b>การแต่งกาย: </b><?= $row['volu_uniform'];?></p>
            <p><b>ชั่วโมงจิสอาสา: </b><?= $row['volu_hours'];?></p>
            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            $i =1;
                            require_once 'config/db.php';
                            $st = $conn->prepare("SELECT* FROM applys WHERE volunteer_id = $row[volu_id]");
                            $st->execute();
                            $result = $st->fetchAll();
                            foreach($result as $k) {
                            ?>
            <?php } ?>
            <p><b>สถานะ: <?php echo $st->rowCount() ?> / <?= $row['volu_stdMax'];?>  คน</b></p>
            
            <div class="status">
             <div class="status-free">
                    <p><?= $row['volu_status'];?></p>
                </div>
                
            </div>
<!--
            <div class="button-detail">
              <a href="/Project_910_MATCHLIFE/Role_user/cancel_volunteer.php?id=<?= $k['users_id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ยกเลิกการลงทะเบียน</a>
            </div>-->

                </div>
            
              

        </div>

        <div class="testbox1">
        <form action="" method="post" style="height: 100%;">
        <div class="con">
        <table class="scroll-bar">
                        <thead>
                            <tr>
                                <th >ลำดับ</th>
                                <th >รหัสนักศึกษา</th>
                                <th >ชื่อ - นามสกุล</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            $i =1;
                            require_once 'config/db.php';
                            $st = $conn->prepare("SELECT* FROM applys WHERE volunteer_id = $row[volu_id]");
                            $st->execute();
                            $result = $st->fetchAll();
                            foreach($result as $k) {
                            ?>

                            <tr>
                            
                                <td><?php echo $i; $i++;?></td>
                                <td><?= $k['users_std'];?></td>
                                <td><?= $k['user_name']?></td>

                            </tr>

                            <?php } ?>
                            <div class="button-detail">
                              <a href="/Project_910_MATCHLIFE/Role_user/cancel_volunteer.php?id=<?= $k['applys_id'];?>"  onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a>
                            </div>              
                            

                        </tbody>
                        </table>
        </div>
        </form>
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

<!--menu users-->
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
</html>