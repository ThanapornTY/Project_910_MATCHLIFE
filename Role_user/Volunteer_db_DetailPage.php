<?php 

    session_start();
    require_once 'config/db.php';

    if(isset($_GET['id'])){
        require_once 'config/db.php';
        $stmt = $conn->prepare("SELECT* FROM volunteer WHERE volu_id=?");
        $stmt->execute([$_GET['id']]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($stmt->rowCount() < 1){
            header('Location: /Project_910_MATCHLIFE/Role_user/Volunteer.php');
            exit();
        }
    }

    if (isset($_SESSION['user_login'])) {
        $admin_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    if (isset($_POST['formAdd'])) {
        $users_id = $_POST['users_id'];
        $users_std = $_POST['users_std'];
        $user_name = $_POST['user_name'];
        $volunteer_id = $_POST['volunteer_id'];
        $user_tel = $_POST['user_tel'];
        $user_email = $_POST['user_email'];
        $user_major = $_POST['user_major'];
        $apply_day = $_POST['apply_day'];
        $user_note = $_POST['user_note'];

        

            try {

                $check_email = $conn->prepare("SELECT user_note FROM applys WHERE user_note = :user_note");
                $check_email->bindParam(":user_note", $user_note);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['user_email'] == $user_email) {
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='Sign in_Page.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: /Project_910_MATCHLIFE/Role_user/Volunteer_DetailPage.php");
                } else if (!isset($_SESSION['error'])) {
                    $stmt = $conn->prepare("INSERT INTO applys(users_id, users_std, user_name, volunteer_id, user_tel, user_email, user_major, apply_day, user_note) 
                                            VALUES(:users_id, :users_std, :user_name, :volunteer_id, :user_tel, :user_email, :user_major, :apply_day, :user_note)");
                    $stmt->bindParam(":users_id", $users_id);
                    $stmt->bindParam(":users_std", $users_std);
                    $stmt->bindParam(":user_name", $user_name);
                    $stmt->bindParam(":volunteer_id", $volunteer_id);
                    $stmt->bindParam(":user_tel", $user_tel);
                    $stmt->bindParam(":user_email", $user_email);
                    $stmt->bindParam(":user_major", $user_major);
                    $stmt->bindParam(":apply_day", $apply_day);
                    $stmt->bindParam(":user_note", $user_note);
                    $stmt->execute();
                    header("location: /Project_910_MATCHLIFE/Role_user/volun_success.php");
                } else {
                    header("location: /Project_910_MATCHLIFE/Role_user/volun_error.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
   // }


?>