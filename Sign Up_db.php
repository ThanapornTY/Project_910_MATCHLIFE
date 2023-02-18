<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['signup'])) {
        $stdID = $_POST['stdID'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $major = $_POST['major'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'user';

        if (empty($stdID)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสนักศึกษา';
            header("location: Sign in_Page.php");
        }else if (empty($firstname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: Sign in_Page.php");
        } else if (empty($lastname)) {
            $_SESSION['error'] = 'กรุณากรอกนามสกุล';
            header("location: Sign in_Page.php");
        } else if (empty($tel)) {
            $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
            header("location: Sign in_Page.php");
        } else if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: Sign in_Page.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: Sign in_Page.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: Sign in_Page.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: Sign in_Page.php");
        } else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header("location: Sign in_Page.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: Sign in_Page.php");
        } else {
            try {

                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='Sign in_Page.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: Sign Up_Page.php");
                } else if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users(stdID, firstname, lastname, tel, email, password, urole, major) 
                                            VALUES(:stdID, :firstname, :lastname, :tel, :email, :password, :urole, :major)");
                    $stmt->bindParam(":stdID", $stdID);
                    $stmt->bindParam(":firstname", $firstname);
                    $stmt->bindParam(":lastname", $lastname);
                    $stmt->bindParam(":tel", $tel);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->bindParam(":major", $major);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='Sign in_Page.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: Sign Up_Page.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: Sign Up_Page.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>