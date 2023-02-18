<?php
session_start();
require_once 'config/db.php';
if (!isset($_SESSION['Materadmin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: Sign in_Page.php');
}

$stmt = $conn->prepare("SELECT user_major, COUNT(applys_id) as total FROM applys GROUP BY user_major");
$stmt->execute();
$result = $stmt->fetchAll();
$saleData = array();
  foreach ($result as $k) {
  $saleData[] = "['".$k['user_major']."'".", ".$k['total']."]";
}
$saleData = implode(",", $saleData);

/*sdfsfs */
$us = $conn->prepare("SELECT major, COUNT(id) as total2 FROM users GROUP BY major");
$us->execute();
$result2 = $us->fetchAll();
$userData = array();
  foreach ($result2 as $u) {
  $userData[] = "['".$u['major']."'".", ".$u['total2']."]";
}
$userData = implode(",", $userData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
     <!-- เรียก กราฟ มาใช้งาน -->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Summary per user_major'],
        <?php echo $saleData;?>
        ]);
        var options = {
        title: 'จำนวนสำนักวิชาที่ลงทะเบียนกิจกรรม'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
        }
    </script>
<!--กราฟ-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data1 = google.visualization.arrayToDataTable([
        ['Task', 'Summary per major'],
        <?php echo $userData;?>
        ]);
        var options = {
        title: 'จำนวนสำนักวิชาที่สมัครสมาชิก'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data1, options);
        }
    </script>


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
              <hr class="navbar-divider my-5 opacity-20">

              <div class="mt-auto"></div>
              <ul class="navbar-nav mb-5">
                <li class="nav-item">
                  <a class="nav-link" href="/Project_910_MATCHLIFE/logout.php">
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
                      <h1 class="h3 mb-0 ls-tight">Dashboard</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>



          <main class="py-10">
            <div class="container-xl">

              <div class="row">
                <div class="col ">

                  <div class="card bg-surface-secondary">
                    <div class="row">
                      <div class="col">
                        <div class="bg-surface-secondary d-flex flex-column justify-content-center align-items-center" style="min-height: 150px;">
                          <img src="/Project_910_MATCHLIFE/img/person.png" alt="">
                        </div>
                      </div>
                      <div class="col d-flex flex-column justify-content-center align-items-center">

                      <?php
                      require_once 'config/db.php';
                      $st = $conn->prepare("SELECT* FROM users ");
                      $st->execute();
                      $result = $st->fetchAll();
                      foreach($result as $k) {
                      ?>
       <?php } ?>
                      <h4>จำนวนผู้ใช้งาน</h4>
                      <br>
                        <h3 class="text-gray-900"><?php echo $st->rowCount() ?></h3>
   
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col ">

                  <div class="card bg-surface-secondary">
                    <div class="row">
                      <div class="col">
                        <div class="bg-surface-secondary d-flex flex-column justify-content-center align-items-center" style="min-height: 150px;">
                          <img src="/Project_910_MATCHLIFE/img/volunteer.png" alt="">
                        </div>
                      </div>
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                      <?php
                      require_once 'config/db.php';
                      $volu = $conn->prepare("SELECT* FROM volunteer ");
                      $volu->execute();
                      $result2 = $volu->fetchAll();
                      foreach($result2 as $vo) {
                      ?>
       <?php } ?>
                      <h4>จำนวนจิตอาสา</h4>
                      <br>
                        <h3 class="text-gray-900"><?php echo $volu->rowCount() ?></h3>
          
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col ">

                  <div class="card bg-surface-secondary">
                    <div class="row">
                      <div class="col">
                        <div class="bg-surface-secondary d-flex flex-column justify-content-center align-items-center" style="min-height: 150px;">
                          <img src="/Project_910_MATCHLIFE/img/description.png" alt="">
                        </div>
                      </div>
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                      <?php
                      require_once 'config/db.php';
                      $mes = $conn->prepare("SELECT* FROM messages ");
                      $mes->execute();
                      $result3 = $mes->fetchAll();
                      foreach($result3 as $m) {
                      ?>
       <?php } ?>
                      <h4>จำนวนข่าวสาร</h4>
                      <br>
                        <h3 class="text-gray-900"><?php echo $mes->rowCount() ?></h3>
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
<br>
            
<!-- Container พื้นที่ลงเนื้อหา-->
              <div class="border bg-surface-secondary h-full border-dashed rounded d-flex flex-column justify-content-center align-items-center" style="min-height: 400px;">

                <div class="col p-5" style="width: 100%; height: 500px; ">
                  <!-- Nav tabs  style="width: 100%; height: 500px; "-->
                  <ul class="nav nav-tabs"  id="myTab" role="tablist" >
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Dashboard 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dashboard 2</button>
                    </li>
                  </ul>
                  <br>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" >              
                      <div class="container-fluid">
                        <div id="piechart1" style="width: 100%; height: 500px; "></div>
                        </div>
                      </div>
                    <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container-fluid">
                        <div id="piechart2"  style="width: 100%; height: 500px; "></div>
                        </div>
                    </div>

                </div>
                

              


              </div>
            </div>
          </main>
        </div>
      </div>
</body>




</html>