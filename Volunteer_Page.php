<?php
session_start();
 //เรียกไฟล์เชื่อมต่อฐานข้อมูล
 require_once 'config/db.php';
 
 //สร้างเงื่อนไขตรวจสอบถ้ามีการค้นหาให้แสดงเฉพาะรายการค้นหา
 if (isset($_GET['q']) && $_GET['q']!='') {

   //ประกาศตัวแปรรับค่าจากฟอร์ม
   $q = "%{$_GET['q']}%";
   //คิวรี่ข้อมูลมาแสดงจากการค้นหา
   $stmt = $conn->prepare("SELECT* FROM volunteer WHERE volu_name LIKE ?");
   $stmt->execute([$q]);
   $stmt->execute();
   $result = $stmt->fetchAll();
 }else{
    //คิวรี่ข้อมูลมาแสดงตามปกติ *แสดงทั้งหมด
   $stmt = $conn->prepare("SELECT* FROM volunteer");
   $stmt->execute();
   $result = $stmt->fetchAll();
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
          <li><a href="/Project_910_MATCHLIFE/About us_Page.php">เกี่ยวกับเรา</a></li>
          <li><a href="/Project_910_MATCHLIFE/Contact_Page.php">ติดต่อ</a></li>
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

<div class="text-head">
    <h1>ค้นหากิจกรรม</h1>
</div>

<!--ค้นหา-->
<div class="search_wrap search_wrap_1" >
    
    <div class="search_box" >
        <form action="Volunteer_Page.php" method="get" >
            <input type="text" name="q" class="search_input" placeholder="Search.." value="<?php if (isset($_GET['q'])) { echo $_GET['q'];}?>">
            
            <div class="closeBtn">
              <span class="material-symbols-outlined" onclick="location.href='Volunteer_Page.php';">close</span>
            </div>

            <button class="btn btn_search" type="submit"><span class="material-symbols-outlined">search</span></button>
        </form>
    </div>

</div>



<!--filter info-->
<div id="myBtnContainer" style="text-align: center; justify-content: center;">
  <button class="btn-filter actives" onclick="filterSelection('all')"> Show all</button>
    <?php
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once 'config/db.php';
                  $app = $conn->prepare("SELECT * FROM tags");
                  $app->execute();
                  $result1 = $app->fetchAll();
                  foreach($result1 as $k) {
                  ?>
  <button class="btn-filter" onclick="filterSelection('<?= $k['tags_name'];?>')"> <?= $k['tags_name'];?></button>
  <?php } ?>
</div>

<div class="notfound">
  <?php 
  //แสดงข้อความที่ค้นหา
  if (isset($_GET['q']) && $_GET['q']!='') {
  echo '<font color="red"> ข้อมูลการค้นหา : '.$_GET['q'];
  echo ' *พบ '. $stmt->rowCount().' รายการ</font><br><br>';
}?>
</div>

  <div class="container">
  <?php foreach($result as $row) {     ?>
    <div class="filterDiv <?= $row['volu_tags'];?>" onclick="location.href='Volunteer_DetailPage.php?id=<?= $row['volu_id'];?>';">
      <div class="li-img">
          <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" style="max-width: 200px;" class="img-fluid rounded-start" alt="Hot air balloons" />
        </div>
        <div class="li-text">
          <h3 class="li-head"><?= $row['volu_name'];?></h3>
          <div class="li-sub">
            <p>จิตอาสาจำนวน : <?= $row['volu_hours'];?> ชั่วโมง</p>
            <p>วันจัดกิจกรรม : <?= $row['volu_start'];?></p>
            <p>สถานที่ : <?= $row['volu_location'];?></p>
            
            <p>จำนวนที่รับ : <?= $row['volu_stdMax'];?> คน</p>
          </div>
      </div>
  </div>
    <?php } ?>

  </div>








<!--filter info-->
<script>
    
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(",");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }


  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn-filter");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("actives");
      current[0].className = current[0].className.replace(" actives", "");
      this.className += " actives";
    });
  }
</script>

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