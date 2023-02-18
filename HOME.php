<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

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

    <title>HOME</title>
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
          <li><a class="active" href="/Project_910_MATCHLIFE/HOME.php">หน้าหลัก</a></li>
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

<!-- Banner Area -->
<div class="banner-area">

    <!--Imege Button Sliders-->
    <div class="banner-slider">
        <!--radio button-->
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="https://cdn.discordapp.com/attachments/1025783491096498207/1035481044461297674/Banner.png" alt="">
            </div>

            <div class="slide">
                <img src="https://cdn.discordapp.com/attachments/1025783491096498207/1035482718655500288/Banner1.png" alt="">
            </div>

            <div class="slide">
                <img src="https://cdn.discordapp.com/attachments/1025783491096498207/1035483180121206824/Banner2.png" alt="">
            </div>

            <div class="slide">
                <img src="https://cdn.discordapp.com/attachments/1025783491096498207/1035483840057192468/Banner3.png" alt="">
            </div>

            <!--Auto navigation slide-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

        </div>

        <!--Manual navigation slide-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</div>

<!--auto สไลด์รูป-->
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
    }, 5000);


</script>

<?php 

    require_once 'config/db.php';
    $stmt = $conn->query("SELECT * FROM content");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!--น้องอาสา และ เนื้อหา-->
<div class="grid-container">
    <div class="Asa">
         <img src="<?php echo  $row['con_p3'] ?>" alt="น้องอาสา">
       <!---->
    </div><div class="item1">
        <h2><?php echo  $row['con_p1'] ?></h2>
        <br>
        <p><?php echo  $row['con_p2'] ?>
        </p>

        <button class="but-1" onclick="location.href='About us_Page.php'" type="button">อ่านเพิ่มเติม</button>
    </div>
</div>

<!--วิธีใช้ matchlift-->
<div class="hot_to">
    <img src="<?php echo  $row['con_p4'] ?>">
</div>

<br>

<div class="header-activi">
    <h2>ประชาสัมพันธ์</h2>
    <a href="/Project_910_MATCHLIFE/Message.php">เพิ่มเติม</a>
</div>
<!--ประชาสัมพันธ์-->
<div class="activi">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <?php
    //คิวรี่ข้อมูลมาแสดงในตาราง
    require_once 'config/db.php';
    $stmt = $conn->prepare("SELECT* FROM messages");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $k) {
    ?>
        <div class="swiper-slide">
            <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" alt="รูป" class="card-img"> 
            <h3 class="name"><?= $k['message_name'];?></h3>
            <a href="Message_DetailPage.php?id=<?= $k['message_id'];?>" class="but-1">เพิ่มเติม</a>
        </div>
    <?php } ?>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

  </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<!--footer-->

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