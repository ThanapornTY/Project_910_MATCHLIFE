<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>    <!--Swiper Css-->

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
          <li><a class="active"  href="/Project_910_MATCHLIFE/About us_Page.php">เกี่ยวกับเรา</a></li>
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

<div class="test1">
    <img src="https://cdn.discordapp.com/attachments/1025783491096498207/1038326895495888946/Banner_About.png">
</div>

<!--น้องอาสา และ เนื้อหา-->
<div class="grid-container">
    <div class="Asa">
         <img src="https://cdn.discordapp.com/attachments/1035114132090925126/1035114356180004884/0.png" alt="น้องอาสา">
       <!---->
    </div><div class="item1" style="margin-top: 30px;">
    <h2 style="margin-bottom: 10px;">ยินดีต้อนรับเข้าสู่ เว็บไซต์จิตอาสา MATCHLIFE</h2>
        <p>ทางกองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ.) มีวิสัยทัศน์ที่ว่า “เป็นกองทุนหมุนเวียนที่ให้โอกาสทางการศึกษาเพื่อพัฒนาทุนมนุษย์และสร้างอนาคตให้คนไทยอย่างยั่งยืน 
        ด้วยระบบบริหารจัดการที่ดีและทันสมัย” จึงมีวัตถุประสงค์ให้กู้ยืมเงินแก่นักศึกษาที่ขาดแคลนทุนทรัพย์เพื่อเป็นค่าเล่าเรียน ค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา 
        และค่าใช้จ่ายที่จำเป็นในการครองชีพระหว่างศึกษา โดยมีเงื่อนไขคือนักศึกษาต้องทำ  กิจกรรมจิตอาสา เพื่อขัดเกลาจิตใจให้มีความเมตตากรุณา 
        มีความเสียสละและมีจิตสาธารณะ โดยการทำกิจกรรมจิตอาสาต้องไม่ต่ำกว่า 36 ชั่วโมงต่อปี ถึงจะสามารถกู้ไปได้ในปีหน้า

        <br />
        <br>

        มหาวิทยาลัยเทคโนโลยีสุรนารีนั้นตระหนักถึงการขยายโอกาสทางการศึกษาสำหรับนักศึกษาที่สามารถเรียนได้จนสำเร็จการศึกษาแต่มีความขาดแคลนทุนทรัพย์ มหาวิทยาลัยจึงมีทุนการศึกษาที่จัดสรรให้กับนักศึกษาทั้งระดับปริญญาตรีและบัณฑิตศึกษา ปีละมากกว่า 6,500 ทุน หนึ่งในนั้นคือกองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ.) ที่ให้กู้ยืมสำหรับนักศึกษาระดับปริญญาตรีที่มีรายได้ครอบครัวไม่เกิน 200,000 บาทต่อปี

อีกทั้งทางมหาวิทยาลัยเทคโนโลยีสุรนารี มีปรัชญาการจัดการศึกษาที่ว่า เน้นการพัฒนาบุคลากรที่มีความรู้ความสามารถทั้งทางด้านวิชาชีพและวิชาพื้นฐานที่จำเป็นสำหรับการเป็นบัณฑิต ทางด้านวิชาชีพจะต้องเน้น ปัจจัยทางวิทยาศาสตร์และเทคโนโลยี  ส่วนทางด้านวิชาพื้นฐานจะต้องเน้นปัจจัยมนุษย์ คือการเป็นผู้รับผิดชอบทางสังคม มีคุณธรรม จริยธรรม และมีจิตสาธารณะ 
<br />
        <br>
และเนื่องจากกิจกรรมจิตอาสาเป็นกิจกรรมที่พัฒนาทั้งสังคม ชุมชน ไปจนถึงพัฒนาคน ซึ่งตรงกับหลักปรัชญาการศึกษาของทางมหาวิทยาลัย และสอดคล้องกับเงื่อนไขที่ทางกองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ.) กำหนดมา จึงเป็นอีกหนึ่งกิจกรรมที่นับว่าสร้างประโยชน์มากมาย แต่ทุกท่านรู้หรือไม่ว่า จุดเริ่มต้นกิจกรรมนี้มีที่มาเริ่มต้นจากไหน? และมีประวัติความเป็นมาอย่างไร?

        </p>
        <br>
    </div>
</div>

<div class="container-about">

    <div class="item1">
    <h2 style="margin-bottom: 10px;">แล้ว… จิตอาสาคืออะไร?</h2>
        <p>คำว่า “ จิตอาสา ” (ภาษาอังกฤษ : Volunteer) ตามความหมายของพจนานุกรมฉบับราชบัณฑิตยสถาน ฉบับ พ.ศ. 2542 มาจากสองคำรวมกัน โดยแต่ละคำมีความหมายดังนี้ 
        <br />
        <br>
<b>จิต, จิต- [จิด, จิดตะ-]</b> จัดเป็นคำนาม หมายถึง สิ่งที่มีหน้าที่รู้ คิด และนึก        <br>
<b>อาสา</b> จัดเป็นคำกริยา หมายถึง เสนอตัวเข้ารับทำ 
<br />
        <br>
ดังนั้น หากรวมกันแล้วจะได้ความหมายว่า จิตแห่งการให้ความดีงามทั้งปวงแก่เพื่อนมนุษย์ด้วยความสมัครใจ การมีจิตสำนึกเพื่อส่วนรวม โดยพร้อมที่จะสละแรงกาย แรงใจ และทำเพื่อผู้อื่นโดยไม่หวังผลตอบแทน โดยทำเพื่อทั้งขัดเกลาจิตใจ และลดอัตตาของตนเอง และบ้างก็ทำเพื่อความสุขส่วนตน

        </p>

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