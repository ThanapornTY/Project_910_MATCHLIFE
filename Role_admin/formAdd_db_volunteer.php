<?php 

    session_start();
    require_once 'config/db.php';


    if (isset($_POST['formAdd']) && isset($_POST['volu_name']) && $_POST['volu_name'] >=0) {
          require_once 'config/db.php';
          $date1 = date("Ymd_His");
          $numrand = (mt_rand());
          $product_img = (isset($_POST['volu_img']) ? $_POST['volu_img'] : '');
          $upload=$_FILES['volu_img']['name'];
      
          if($upload !='') {
          $typefile = strrchr($_FILES['volu_img']['name'],".");
       
          if($typefile =='.jpg' || $typefile  =='.jpg' || $typefile  =='.png'){
       
          //โฟลเดอร์ที่เก็บไฟล์
          $path="uploads/";
          $newname = $numrand.$date1.$typefile;
          $path_copy=$path.$newname;
          move_uploaded_file($_FILES['volu_img']['tmp_name'],$path_copy); 

        $volu_name = $_POST['volu_name'];
        $volu_hours = $_POST['volu_hours'];
        $volu_detail = $_POST['volu_detail'];
        $volu_location = $_POST['volu_location'];
        $volu_stdMax = $_POST['volu_stdMax'];
        $volu_uniform = $_POST['volu_uniform'];
        $volu_start = $_POST['volu_start'];
        $volu_end = $_POST['volu_end'];
        $volu_note = $_POST['volu_note'];
        $volu_tags = $_POST['volu_tags'];
        $user_id = $_POST['user_id'];

        if (empty($volu_name)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อกิจกรรม';
            header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
        }else if (empty($volu_hours)) {
            $_SESSION['error'] = 'กรุณากรอกจำนวนชั่วโมงจิตอาสาที่ได้รับ';
            header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
        } else if (empty($volu_detail)) {
            $_SESSION['error'] = 'กรุณากรอกรายละเอียดกิจกรรม';
            header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
        } else if (empty($volu_location)) {
            $_SESSION['error'] = 'กรุณากรอกสถานที่จัดกิจกรรม';
            header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
        } else if (empty($volu_stdMax)) {
            $_SESSION['error'] = 'กรุณาเลือกจำนวนนักศึกษาที่ต้องการ';
            header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
        } else if (empty($volu_uniform)) {
            $_SESSION['error'] = 'กรุณาเลือกเครื่องแบบ';
            header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
        
        } else {
            try {

                $check_volu_name = $conn->prepare("SELECT volu_name FROM volunteer WHERE volu_name = :volu_name");
                $check_volu_name->bindParam(":volu_name", $volu_name);
                $check_volu_name->execute();
                $row = $check_volu_name->fetch(PDO::FETCH_ASSOC);

                if ($row['volu_name'] == $volu_name) {
                    $_SESSION['warning'] = "มีกิจกรรมนี้อยู่ในระบบแล้ว <a href='/Project_910_MATCHLIFE/Role_admin/Volunteer.php'>คลิ๊กที่นี่</a> เพื่อตรวจสอบข้อมูล";
                    header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
                } else if (!isset($_SESSION['error'])) {
                    $stmt = $conn->prepare("INSERT INTO volunteer(volu_name, volu_hours, volu_detail, volu_location, volu_stdMax, volu_uniform, volu_note, user_id, volu_tags, volu_end, volu_start, volu_img) 
                                            VALUES(:volu_name, :volu_hours, :volu_detail, :volu_location, :volu_stdMax, :volu_uniform, :volu_note, :user_id, :volu_tags, :volu_end, :volu_start , '$newname')");
                    $stmt->bindParam(":volu_name", $volu_name);
                    $stmt->bindParam(":volu_hours", $volu_hours);
                    $stmt->bindParam(":volu_detail", $volu_detail);
                    $stmt->bindParam(":volu_location", $volu_location);
                    $stmt->bindParam(":volu_stdMax", $volu_stdMax);
                    $stmt->bindParam(":volu_uniform", $volu_uniform);
                    $stmt->bindParam(":volu_note", $volu_note);
                    $stmt->bindParam(":volu_tags", $volu_tags);
                    $stmt->bindParam(":volu_start", $volu_start);
                    $stmt->bindParam(":volu_end", $volu_end);
                    $stmt->bindParam(":user_id", $user_id);
                    $stmt->execute();
                    $_SESSION['success'] = "เพิ่มกิจกรรมเรียบร้อยแล้ว! <a href='/Project_910_MATCHLIFE/Role_admin/Volunteer.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อตรวจสอบข้อมูล";
                    header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: /Project_910_MATCHLIFE/Role_admin/formAdd_volunteer.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
}


?>