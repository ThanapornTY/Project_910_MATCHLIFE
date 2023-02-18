<?php

    if(isset($_POST['stdID']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['id']) && isset($_POST['major'])) {
        require_once 'config/db.php';
        session_start();
    
        $id = $_POST['id'];
        $stdID = $_POST['stdID'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $major = $_POST['major'];

    $stmt = $conn->prepare("UPDATE users SET stdID=:stdID, firstname=:firstname, lastname=:lastname, tel=:tel, email=:email, major=:major WHERE id=:id");
    $stmt->bindParam(':id', $id , PDO::PARAM_INT);
    $stmt->bindParam(':stdID', $stdID , PDO::PARAM_STR);
    $stmt->bindParam(':firstname', $firstname , PDO::PARAM_STR);
    $stmt->bindParam(':lastname', $lastname , PDO::PARAM_STR);
    $stmt->bindParam(':tel', $tel , PDO::PARAM_STR);
    $stmt->bindParam(':email', $email , PDO::PARAM_STR);
    $stmt->bindParam(':major', $major , PDO::PARAM_STR);
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
                      window.location = "/Project_910_MATCHLIFE/Role_user/Profile.php"; 
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
                      window.location = "/Project_910_MATCHLIFE/Role_user/Profile.php"; 
                  });
                }, 1000);
            </script>';
        }
    $conn = null; 
    } 
?>