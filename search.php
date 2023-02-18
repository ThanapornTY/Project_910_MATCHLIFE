<?php 
    require_once 'config/db.php';
    session_start();

    if (isset($_POST['search1'])) {
        $keyword = $_POST['keyword'];
        $query = $conn->prepare("SELECT * FROM volunteer WHERE volu_name LIKE '$keyword' or volu_location LIKE '$keyword' or volu_tags LIKE '$keyword'");
        $query -> execute();
        while($row = $query->fetch()){?>

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
                <p>สถานะ : <?= $row['volu_status'];?></p>
                </div>
            </div>
        </div>
            


        <?php } ?>
    <?php } 

?>