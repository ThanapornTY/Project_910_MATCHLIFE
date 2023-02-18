<?php

    if(isset($_POST['con_name']) && isset($_POST['con_by']) && isset($_POST['con_p1']) && isset($_POST['con_p2']) && isset($_POST['con_p3']) && isset($_POST['con_p4'])) {
        require_once 'config/db.php';
        session_start();
    
    $con_name = $_POST['con_id'];
    $con_name = $_POST['con_name'];
    $con_by = $_POST['con_by'];
    $con_p1 = $_POST['con_p1'];
    $con_p2 = $_POST['con_p2'];
    $con_p3 = $_POST['con_p3'];
    $con_p4 = $_POST['con_p4'];
        

    $stmt = $conn->prepare("UPDATE content SET con_name=:con_name, con_by=:con_by, con_p1=:con_p1, con_p2=:con_p2, con_p3=:con_p3, con_p4=:con_p4 WHERE con_id=:con_id");
    $stmt->bindParam(':con_id', $con_id , PDO::PARAM_INT);
    $stmt->bindParam(':con_name', $con_name , PDO::PARAM_STR);
    $stmt->bindParam(':con_by', $con_by , PDO::PARAM_STR);
    $stmt->bindParam(':con_p1', $con_p1 , PDO::PARAM_STR);
    $stmt->bindParam(':con_p2', $con_p2 , PDO::PARAM_STR);
    $stmt->bindParam(':con_p3', $con_p3 , PDO::PARAM_STR);
    $stmt->bindParam(':con_p4', $con_p4 , PDO::PARAM_STR);
    $stmt->execute();
    
        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
     if($stmt->rowCount() >= 0){
            echo '<script>
                 setTimeout(function() {
                  swal({
                      title: "แก้ไขข้อมูลสำเร็จ",
                      type: "success"
                  }, function() {
                      window.location = "/Project_910_MATCHLIFE/Role_admin/Content.php";
                  });
                }, 1000);
            </script>';
        }else{
           echo '<script>
                 setTimeout(function() {
                  swal({
                      title: "เกิดข้อผิดพลาด",
                      type: "error"
                  }, function() {
                      window.location = "/Project_910_MATCHLIFE/Role_admin/Content.php";
                  });
                }, 1000);
            </script>';
        }
    $conn = null;
    } 
?>