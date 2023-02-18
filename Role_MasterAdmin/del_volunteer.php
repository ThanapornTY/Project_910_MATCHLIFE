<?php 
if(isset($_GET['id'])){
require_once 'config/db.php';
$id = $_GET['id'];
$stmt = $conn->prepare('DELETE FROM volunteer WHERE volu_id=:volu_id');
$stmt->bindParam(':volu_id', $id , PDO::PARAM_INT);
$stmt->execute();

echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

  if($stmt->rowCount() ==1){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ลบข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "/Project_910_MATCHLIFE/Role_MasterAdmin/Volunteer.php"; //หน้าที่ต้องการให้กระโดดไป
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
                  window.location = "/Project_910_MATCHLIFE/Role_MasterAdmin/Volunteer.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
$conn = null;
}
?>