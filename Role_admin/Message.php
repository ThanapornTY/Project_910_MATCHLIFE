<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
  $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
  header('location: Sign in_Page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit&display=swap" rel="stylesheet">
    
    <!--icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--css-->
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-gray-50">

        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-light bg-light border-end-lg" id="navbarVertical">
          <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-8 mb-lg-3 px-lg-12 me-0 text-orange-500 " href="#">
              <!--<img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">-->
              MATCHLIFE
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
              <!-- Dropdown -->
              <div class="dropdown">
                <!-- Toggle -->
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar bg-warning rounded-circle text-white">
                    <img alt="..." src="https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80">
                  </div>
                </a>
            </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
              <!-- Navigation -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_admin/Dashboard.php">
                    <i class="bi bi-house"></i> Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_admin/Volunteer.php">
                    <i class="bi bi-bar-chart"></i> Volunteer
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_admin/Message.php">
                    <i class="bi bi-chat"></i> Message
                    <!--ถ้าต้องขึ้นแจ้งเตือน
                    <span class="badge bg-opacity-30 bg-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>-->
                  </a>
                </li>
  
                
              </ul>
              <!-- Divider -->
              <hr class="navbar-divider my-5 opacity-20">

              <!-- Push content down -->
              <div class="mt-auto"></div>
              <!-- User (md) -->
              <ul class="navbar-nav mb-5">
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/HOME.php">
                    <i class="bi bi-box-arrow-left"></i> Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>



        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
          <header class="bg-orange-100 border-top shadow-1">
            <div class="container-xxl">
              <div class="py-5 border-bottom">
                <!-- Page heading -->
                <div>
                  <div class="row align-items-center">
                    <div class="col-md-6 col-12 mb-3 mb-md-0">
                      <!-- Title -->
                      <h1 class="h3 mb-0 ls-tight">Message</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>



          <main class="py-10">
            <!-- Container พื้นที่ลงเนื้อหา-->
            <div class="container-xl">
            <h3>รายการข้อมูล <a href="/Project_910_MATCHLIFE/Role_admin/formAdd_message.php" class="btn btn-info">+เพิ่มข้อมูล</a> </h3>
            <br>

          <div class="border  bg-surface-secondary h-full border-dashed rounded d-flex flex-column " style="min-height: 400px;">
          <table class="table table-striped">
          <thead>
              <tr>
                  <th width="5%">ลำดับ</th>
                  <th width="40%">ชื่อ</th>
                  <th width="40%">เพิ่มโดย</th>
                  <th width="45%">วันที่เพิ่ม</th>
                  <th width="5%">แก้ไข</th>
                  <th width="5%">ลบ</th>
              </tr>
          </thead>
          <tbody>
              <?php
              $i =1;
              //คิวรี่ข้อมูลมาแสดงในตาราง
              require_once 'config/db.php';
              $stmt = $conn->prepare("SELECT* FROM messages");
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $k) {
              ?>
              <tr>
              <td><?php echo $i; $i++;?></td>
                  <td><?= $k['message_name'];?></td>
                  <td><?= $k['message_by'];?></td>
                  <td><?= $k['created_at'];?></td>
                  <td><a href="formedit_message.php?id=<?= $k['message_id'];?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                  <td><a href="del_message.php?id=<?= $k['message_id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
              </tr>
              <?php } ?>
          </tbody>
    </table>
</div>
            </div>
          </main>
        </div>
      </div>
</body>




</html>