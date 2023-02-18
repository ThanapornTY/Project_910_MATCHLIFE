<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['formAdd'])) {
        $con_name = $_POST['con_name'];
        $con_by = $_POST['con_by'];
        $con_p1 = $_POST['con_p1'];
        $con_p2 = $_POST['con_p2'];
        $con_p3 = $_POST['con_p3'];
        $con_p4 = $_POST['con_p4'];


        if (empty($con_name)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อหน้า';
            header("location: formAdd_content.php");
        }else if (empty($con_by)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้ปรับแต่งหน้าเว็บไซต์';
            header("location: formAdd_content.php");
        } else {
            try {

                $check_con_name = $conn->prepare("SELECT con_name FROM content WHERE con_name = :con_name");
                $check_con_name->bindParam(":con_name", $con_name);
                $check_con_name->execute();
                $row = $check_con_name->fetch(PDO::FETCH_ASSOC);

                if ($row['con_name'] == $con_name) {
                    $_SESSION['warning'] = "มีหน้านี้อยู่ในระบบแล้ว <a href='/Project_910_MATCHLIFE/Role_MasterAdmin/Content.php'>คลิ๊กที่นี่</a> เพื่อตรวจสอบ";
                    header("location: formAdd_content.php");
                } else if (!isset($_SESSION['error'])) {
                    $stmt = $conn->prepare("INSERT INTO content(con_name, con_by, con_p1, con_p2, con_p3, con_p4) 
                                            VALUES(:con_name, :con_by, :con_p1, :con_p2, :con_p3, :con_p4)");
                    $stmt->bindParam(":con_name", $con_name);
                    $stmt->bindParam(":con_by", $con_by);
                    $stmt->bindParam(":con_p1", $con_p1);
                    $stmt->bindParam(":con_p2", $con_p2);
                    $stmt->bindParam(":con_p3", $con_p3);
                    $stmt->bindParam(":con_p4", $con_p4);
                    $stmt->execute();
                    $_SESSION['success'] = "เพิ่มข้อมูลในหน้าใหม่เรียบร้อยแล้ว! <a href='/Project_910_MATCHLIFE/Role_MasterAdmin/Content.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อตรวจสอบ";
                    header("location: formAdd_content.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: formAdd_content.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>