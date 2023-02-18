<?php
session_start();
require_once 'config/db.php';
    if (!isset($_SESSION['Materadmin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
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
              <div class="border bg-surface-secondary h-full border-dashed rounded  justify-content-center align-items-center" style="min-height: 400px;">
                <div class="font-semibold text-muted p-5">

        <p>คลิ๊กที่นี่เพื่อย้อนกลับ <a href="/Project_910_MATCHLIFE/Role_MasterAdmin/Message.php">ย้อนกลับ</a></p>

          <h4>ฟอร์มเพิ่มข้อมูล</h4>
          <form action="/Project_910_MATCHLIFE/Role_MasterAdmin/formAdd_db_message.php" method="post" enctype="multipart/form-data">
          <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <?php 

            if (isset($_SESSION['Materadmin_login'])) {
                $admin_id = $_SESSION['Materadmin_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>

          <div class="mb-3">
                <label for="message_name" class="form-label">หัวข้อข่าว</label>
                <input type="text" class="form-control" name="message_name" aria-describedby="stdID">
            </div>
            <div class="mb-3" hidden>
                    <label for="user_id" class="form-label">ID ผู้เขียน</label>
                    <input type="text" class="form-control" name="user_id" value="<?php echo $row['id'] ?>" readonly>
                </div>
            <div class="mb-3">
                <label for="message_by" class="form-label">เขียนโดย</label>
                <input type="text" class="form-control" name="message_by" aria-describedby="firstname">
            </div>
            
            <div class="mb-3">
                <label for="message_detail" class="form-label">รายละเอียดข่าว</label>
                <input type="text" class="form-control" name="message_detail" aria-describedby="lastname">
            </div>

            <div class="col">
                <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
                <input type="file" name="messages_img" required   class="form-control" accept="image/jpeg, image/png, image/jpg"> <br>
              </div>

            

            
            
                <button type="submit" name="formAdd" class="btn btn-primary">เพิ่มข้อมูล</button>
                
            </form>
            </div>
          </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
</body>




</html>