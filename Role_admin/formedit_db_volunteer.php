<?php

    if(isset($_POST['volu_name']) && isset($_POST['volu_hours']) && isset($_POST['volu_detail']) && isset($_POST['volu_location']) && isset($_POST['volu_stdMax']) && isset($_POST['volu_uniform']) && isset($_POST['volu_note']) && isset($_POST['volu_location'])) {
        require_once 'config/db.php';
        session_start();
    
    $volu_id = $_POST['volu_id'];
    $volu_name = $_POST['volu_name'];
    $volu_hours = $_POST['volu_hours'];
    $volu_detail = $_POST['volu_detail'];
    $volu_location = $_POST['volu_location'];
    $volu_stdMax = $_POST['volu_stdMax'];
    $volu_uniform = $_POST['volu_uniform'];
    $volu_note = $_POST['volu_note'];
        

    $stmt = $conn->prepare("UPDATE volunteer SET volu_name=:volu_name, volu_hours=:volu_hours, volu_detail=:volu_detail, volu_location=:volu_location, volu_stdMax=:volu_stdMax, volu_uniform=:volu_uniform, volu_note=:volu_note WHERE volu_id=:volu_id");
    $stmt->bindParam(':volu_id', $volu_id , PDO::PARAM_INT);
    $stmt->bindParam(':volu_name', $volu_name , PDO::PARAM_STR);
    $stmt->bindParam(':volu_hours', $volu_hours , PDO::PARAM_INT);
    $stmt->bindParam(':volu_detail', $volu_detail , PDO::PARAM_STR);
    $stmt->bindParam(':volu_location', $volu_location , PDO::PARAM_STR);
    $stmt->bindParam(':volu_stdMax', $volu_stdMax , PDO::PARAM_INT);
    $stmt->bindParam(':volu_uniform', $volu_uniform , PDO::PARAM_STR);
    $stmt->bindParam(':volu_note', $volu_note , PDO::PARAM_STR);
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
                      window.location = "/Project_910_MATCHLIFE/Role_admin/Volunteer.php";
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
                      window.location = "/Project_910_MATCHLIFE/Role_admin/Volunteer.php";
                  });
                }, 1000);
            </script>';
        }
    $conn = null;
    }
?>