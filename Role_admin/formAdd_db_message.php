<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['formAdd']) && isset($_POST['message_name']) && $_POST['message_name'] >=0) {
          require_once 'config/db.php';
          $date1 = date("Ymd_His");
          $numrand = (mt_rand());
          $product_img = (isset($_POST['messages_img']) ? $_POST['messages_img'] : '');
          $upload=$_FILES['messages_img']['name'];
      
          if($upload !='') {
          $typefile = strrchr($_FILES['messages_img']['name'],".");
       
          if($typefile =='.jpg' || $typefile  =='.jpg' || $typefile  =='.png'){
       
          //โฟลเดอร์ที่เก็บไฟล์
          $path="uploads/";
          $newname = $numrand.$date1.$typefile;
          $path_copy=$path.$newname;
          move_uploaded_file($_FILES['messages_img']['tmp_name'],$path_copy); 


        $message_name = $_POST['message_name'];
        $message_by = $_POST['message_by'];
        $message_detail = $_POST['message_detail'];
        $user_id = $_POST['user_id'];

        if (empty($message_name)) {
            $_SESSION['error'] = 'กรุณากรอกหัวข้อข่าว';
            header("location: formAdd_message.php");

        }else if (empty($message_by)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้ลงข่าว';
            header("location: formAdd_message.php");

        } else if (empty($message_detail)) {
            $_SESSION['error'] = 'กรุณากรอกรายละเอียดข่าว';
            header("location: formAdd_message.php");

        } else {
            try {

                /*เช็คหัวข่าวซ้ำ */
                $check_message = $conn->prepare("SELECT message_name FROM messages WHERE message_name = :message_name");
                $check_message->bindParam(":message_name", $message_name);
                $check_message->execute();
                $row = $check_message->fetch(PDO::FETCH_ASSOC);





                if ($row['message_name'] == $message_name) {
                    $_SESSION['warning'] = "มีหัวข้อข่าวนี้อยู่ในระบบแล้ว <a href='/Project_910_MATCHLIFE/Role_admin/Message.php'>คลิ๊กที่นี่</a> เพื่อเข้าตรวจสอบ";
                    header("location: formAdd_message.php");
                } else if (!isset($_SESSION['error'])) {
                    $stmt = $conn->prepare("INSERT INTO messages(message_name, message_by, message_detail,user_id, messages_img) 
                                            VALUES(:message_name, :message_by, :message_detail, :user_id, '$newname')");
                    $stmt->bindParam(":message_name", $message_name);
                    $stmt->bindParam(":message_by", $message_by);
                    $stmt->bindParam(":message_detail", $message_detail);
                    $stmt->bindParam(":user_id", $user_id);

                    $stmt->execute();
                    $_SESSION['success'] = "เพิ่มข่าวเรียบร้อยแล้ว! <a href='/Project_910_MATCHLIFE/Role_admin/Message.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าตรวจสอบ";
                    header("location: formAdd_message.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: formAdd_message.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
}

?>