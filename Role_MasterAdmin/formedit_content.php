<?php
session_start();
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
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_MasterAdmin/Dashboard.php">
                    <i class="bi bi-house"></i> Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_MasterAdmin/Volunteer.php">
                    <i class="bi bi-bar-chart"></i> Volunteer
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_MasterAdmin/Message.php">
                    <i class="bi bi-chat"></i> Message
                    <!--ถ้าต้องขึ้นแจ้งเตือน
                    <span class="badge bg-opacity-30 bg-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>-->
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_MasterAdmin/Content.php">
                    <i class="bi bi-bookmarks"></i> Content
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/Role_MasterAdmin/Account.php">
                    <i class="bi bi-people"></i> Account
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

        <?php
    if(isset($_GET['id'])){
      require_once 'config/db.php';
      $stmt = $conn->prepare("SELECT* FROM content WHERE con_id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($stmt->rowCount() < 1){
          header('Location: /Project_910_MATCHLIFE/Role_MasterAdmin/Content.php');
          exit();
      }
    }//isset
    ?>

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
                      <h1 class="h3 mb-0 ls-tight">Content</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>


          <main class="py-10">
            <!-- Container พื้นที่ลงเนื้อหา-->
            <div class="container-xl">
              <div class="border bg-surface-secondary h-full border-dashed rounded  justify-content-center align-items-center" style="min-height: 400px;">
                <div class="font-semibold text-muted p-5">
                  <p>คลิ๊กที่นี่เพื่อย้อนกลับ <a href="/Project_910_MATCHLIFE/Role_MasterAdmin/Content.php">ย้อนกลับ</a></p>

          <h4>ฟอร์มแก้ไขข้อมูล</h4>
          <form action="/Project_910_MATCHLIFE/Role_MasterAdmin/formedit_db_content.php" method="post">

            <div class="col">
              <label for="con_name" class="col-form-label"> หัวข้อข่าว :  </label>
              <div >
                <input type="text" name="con_name" class="form-control" required value="<?= $row['con_name'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="con_by" class="col-form-label"> เขียนข่าวโดย :  </label>
              <div>
                <input type="text" name="con_by" class="form-control" required value="<?= $row['con_by'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="con_p1" class="col-form-label"> เนื้อหาส่วนที่ 1 :  </label>
              <div>
                <input type="text" name="con_p1" class="form-control" required value="<?= $row['con_p1'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="con_p2" class="col-form-label"> เนื้อหาส่วนที่ 2 :  </label>
              <div>
                <input type="text" name="con_p2" class="form-control" required value="<?= $row['con_p2'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="con_p3" class="col-form-label"> เนื้อหาส่วนที่ 3 :  </label>
              <div>
                <input type="text" name="con_p3" class="form-control" required value="<?= $row['con_p3'];?>" minlength="3">
              </div>
            </div>

            <div class="col">
              <label for="con_p4" class="col-form-label"> เนื้อหาส่วนที่ 4 :  </label>
              <div >
                <input type="text" name="con_p4" class="form-control" required value="<?= $row['con_p4'];?>" minlength="3">
              </div>
            </div>
<br>

            <input type="hidden" name="con_id" value="<?= $row['con_id'];?>">
            <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
          </form>
        </div>

                </div>
              </div>

          </main>
        </div>
      </div>
</body>




</html>