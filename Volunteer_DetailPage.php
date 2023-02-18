<?php
session_start();
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
          <li><a  href="/Project_910_MATCHLIFE/Home.php">หน้าหลัก</a></li>
          <li><a class="active" href="/Project_910_MATCHLIFE/Volunteer_Page.php">จิตอาสา</a></li>
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

  <?php
    if(isset($_GET['id'])){
      require_once 'config/db.php';
      $stmt = $conn->prepare("SELECT* FROM volunteer WHERE volu_id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($stmt->rowCount() < 1){
          header('Location: /Project_910_MATCHLIFE/Volunteer_DetailPage.php');
          exit();
      }
    }//isset
    ?>

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

<div class="area-detail">

    <div class="Name_Volunteer">
        <h2><?= $row['volu_name'];?></h2>
    </div>
    <div class="grid-detail">
        <div class="box-img" >
            <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" style="max-height: 40%x; margin-left: 15%; max-width: 55%;" class="img-fluid rounded-start" alt="Hot air balloons" />
        </div>

        <div class="Detail_Volunteer">
            <b>รายละเอียด:</b>
            <p><?= $row['volu_detail'];?>
            </p>
            <p><b>วันที่: </b> <?= $row['volu_start'];?></b>
            <p><b>สถานที่:</b> <?= $row['volu_location'];?></p>
            <p><b>การแต่งกาย: </b><?= $row['volu_uniform'];?></p>
            <p><b>ชั่วโมงจิสอาสา: </b><?= $row['volu_hours'];?></p>
            <p><b>สถานะ: <?php echo $st->rowCount() ?> / <?= $row['volu_stdMax'];?>  คน</b></p>

            <div class="status">
                
            <p><?php if($st->rowCount() == $row['volu_stdMax']){
            echo '<div class="status-busy" style="text-align: center;"> <a href="#" style="width:100%; color: #000;" class="btn btn-success btn-sm">เต็ม!!</a> </div>';
          }else{
            echo '<div class="status-free" style="text-align: center;"> <a href="#" style="width:100%; color: #000;" class="btn btn-success btn-sm">ว่าง</a> </div>';
          }
          ?></p>
            </div>

            <div class="button-detail">
                <div class="btn-checkName">
                    <button class="but-1" type="button" onclick="return confirm('กรุณาลงชื่อเข้าใช้งานก่อน!!');">ลงทะเบียน</button>
                </div>

                <button class="but-1" data-modal-target="#modal">ตรวจสอบรายชื่อ</button>
                <div class="modal" id="modal">
                    <div class="modal-header">
                    <div class="title">รายชื่อผู้ลงสมัครจิตอาสา</div>
                    <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
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
                            $stmt = $conn->prepare("SELECT* FROM applys WHERE volunteer_id = $row[volu_id]");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $k) {
                                
                            ?>

                            <tr>
                            
                                <td><?php echo $i; $i++;?></td>
                                <td><?= $k['users_std'];?></td>
                                <td><?= $k['user_name']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                   </div>
                </div>
            <div id="overlay"></div>
            </div>

            

      



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
</html>