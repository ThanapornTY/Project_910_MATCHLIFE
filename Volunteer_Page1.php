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
    
    <div class="search_box">
        <form action="#" method="post">
            <input type="search" name="search" class="search_input" id="mysearch" placeholder="Search..">

            
            <button class="btn btn_search" type="submit"><span class="material-symbols-outlined">search</span></button>
        
        </form>
    
    </div>
   
</div>

                


<div id="myBtnContainer">
  <button class="btn-filter actives" onclick="filterSelection('all')"> Show all</button>
  <?php
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once 'config/db.php';
                  $stmt = $conn->prepare("SELECT * FROM tags");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  foreach($result as $k) {
                  ?>
  <button class="btn-filter" onclick="filterSelection('<?= $k['tags_name'];?>')"> <?= $k['tags_name'];?></button>
  <?php } ?>

</div>

<div class="container">
<?php
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once 'config/db.php';
                  $stmt = $conn->prepare("SELECT * FROM volunteer ");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  foreach($result as $row) {
                  ?>
	<div class="filterDiv <?= $row['volu_tags'];?>">
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
          <p>เกี่ยวกับ : <?= $row['volu_tags'];?></p>
          <p>สถานะ : <?= $row['volu_status'];?></p>
        </div>
    </div>
</div>
  <?php } ?>

</div>





<!--list Volun-->

<div class="list-container-Volunteer">
    <div class="list-container">

    <?php
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once 'config/db.php';
                  $stmt = $conn->prepare("SELECT* FROM volunteer");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  foreach($result as $k) {
                  ?>
                  
                  <div class="lists-Volunteer" onclick="location.href='Volunteer_DetailPage.php?id=<?= $k['volu_id'];?>';" >
                    <div class="row g-0">
                        <!--<div class="img-Volunteer" style="z-index: 1;">
                            <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" style="max-width: 250px;" class="img-fluid rounded-start" alt="...">
                        </div>
                        style="margin-left: 300px; margin-top: 20px; border-radius: 20px; width: 800px; height: 245px;"-->
                        <div class="col-md-8">
                        <div class="Name_Volunteer" >
                            <h5 class="card-title"><?= $k['volu_name'];?></h5>
                            <p class="card-text" ></p><?= $k['volu_status'];?></p>
                            <p class="card-text" ></p><b>ประเภทจิตอาสา : </b><?= $k['volu_tags'];?></p>
                            <p class="card-text" ></p><?= $k['volu_start'];?></p>

                        </div>
                        </div>
                    </div>
                    </div>
                    
                  <?php } ?>

        <!--<div class="lists-Volunteer free" onclick="location.href='Volunteer_DetailPage.php?id=';">

            <div class="show-status">
                <div class="status">
                    <div class="status-free">
                        <p>ว่าง</p>
                    </div>
                    
                </div>
            </div>
            
            <div class="img-Volunteer">
                <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" alt="">
            </div>

            <div class="Name_Volunteer">
                <h3></td></h3>
                <p><b>ผู้จัด: </b> กลุ่มสีน้ำ</p>
                <p><b>วันที่: </b> 28-29 กุมภาพันธ์ 2565</b>
                <p><b>เวลา: </b> 9:00 - 11:00 น.</p>
                <p><b>สถานที่:</b> อาคารเรียนรวม 1</p>
                <p><b>การแต่งกาย: </b>ชุดนักศึกษา</p>
                <p><b>ชั่วโมงจิสอาสา: </b>4 ชั่วโมง</p>
                <p><b>สถานะ: 11 / 50 คน</b> </p>

            </div>

        </div>

        <div class="lists-Volunteer busy">

            <div class="show-status">
                <div class="status" id="status_0">
                    <div class="status-busy" id="status_1">
                        <p>ไม่ว่าง</p>
                    </div>
                </div>
            </div>
            
            <div class="img-Volunteer">
                <img src="https://yt3.ggpht.com/bmHz_HcraHOeI1FE5OpKb3he1JJdZFezSqHR_yJ6vbJasYkwgVBGStoXVr2BsnCKxuS-B5-LgA=s900-c-k-c0x00ffffff-no-rj" alt="">
            </div>

            <div class="Name_Volunteer">
                <h3></h3>
                <p><b>ผู้จัด: </b> กลุ่มสีน้ำ</p>
                <p><b>วันที่: </b> 28-29 กุมภาพันธ์ 2565</b>
                <p><b>เวลา: </b> 9:00 - 11:00 น.</p>
                <p><b>สถานที่:</b> อาคารเรียนรวม 1</p>
                <p><b>การแต่งกาย: </b>ชุดนักศึกษา</p>
                <p><b>ชั่วโมงจิสอาสา: </b>4 ชั่วโมง</p>
                <p><b>สถานะ: 11 / 50 คน</b> </p>

            </div>

        </div>-->

        
    </div>

    <div class="lists-Volun-toCome">
        <h4>กิจกรรมที่กำลังจะมาถึง</h4>
        <table class="sortable">
            <thead>
              <tr>
                <th>Date</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
                <td>12/12/2565</td>
                <td>กิจกกรรมช่วยน้อง</td>
            </tbody>
        </table>
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

<script>
    let btn_search = document.querySelector('.btn_search');
    let closeBtn = document.querySelector('.closeBtn');
    let search_box = document.querySelector('.search_box');

    btn_common.onclick = function(){
        search_box.classList.add('active');
        closeBtn.classList.add('active');
        btn_common.classList.add('active');
    }

    closeBtn.onclick = function(){
        search_box.classList.remove('active');
        closeBtn.classList.remove('active');
        btn_common.classList.remove('active');
    }
</script>



<script>

    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("lists-Volunteer");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }
    
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
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
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("actives");
        current[0].className = current[0].className.replace(" actives", "");
        this.className += " actives";
      });
    }

    </script>


</body>

<!--filter-->
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

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn-filter");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</html>