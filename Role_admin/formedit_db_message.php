<?php

    if(isset($_POST['message_name']) && isset($_POST['message_by']) && isset($_POST['message_detail']) && isset($_POST['message_id'])) {
        require_once 'config/db.php';
        session_start();
    
        $message_id = $_POST['message_id'];
        $message_name = $_POST['message_name'];
        $message_by = $_POST['message_by'];
        $message_detail = $_POST['message_detail'];
        

    $stmt = $conn->prepare("UPDATE messages SET message_name=:message_name, message_by=:message_by, message_detail=:message_detail WHERE message_id=:message_id");
    $stmt->bindParam(':message_id', $message_id , PDO::PARAM_INT);
    $stmt->bindParam(':message_name', $message_name , PDO::PARAM_STR);
    $stmt->bindParam(':message_by', $message_by , PDO::PARAM_STR);
    $stmt->bindParam(':message_detail', $message_detail , PDO::PARAM_STR);
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
                      window.location = "/Project_910_MATCHLIFE/Role_admin/Message.php"; 
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
                      window.location = "/Project_910_MATCHLIFE/Role_admin/Message.php"; 
                  });
                }, 1000);
            </script>';
        }
    $conn = null; 
    } 
?>