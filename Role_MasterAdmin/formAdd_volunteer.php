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

  
        <!--ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>




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
                      <h1 class="h3 mb-0 ls-tight">Volunteer</h1>
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
        <p>คลิ๊กที่นี่เพื่อย้อนกลับ <a href="/Project_910_MATCHLIFE/Role_MasterAdmin/Volunteer.php">ย้อนกลับ</a></p>

          <h4>ฟอร์มเพิ่มข้อมูล</h4><!--action="/Project_910_MATCHLIFE/Role_MasterAdmin/formAdd_db_volunteer.php"-->
          <form action="/Project_910_MATCHLIFE/Role_MasterAdmin/formAdd_db_volunteer.php" method="post" enctype="multipart/form-data">
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

            <div class="mb-3" hidden>
                <label for="user_id" class="form-label">ID ผู้เพิ่มข้อมูล</label>
                <input type="text" class="form-control" name="user_id" aria-describedby="stdID" value="<?php echo $row['id'] ?>">
            </div>

            <div class="clearfix">
              <br>
            <!--<svg class="bd-placeholder-img col-md-4 float-md-start mb-3 ms-md-3" width="100%" height="250px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive floated image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="25%" y="50%" fill="#dee2e6">Responsive floated image</text></svg>
              <img src="..." class="col-md-4 float-md-start mb-3 ms-md-3" alt="...">-->
              <div class="row">
                <div class="col">
                  <label for="volu_name" class="form-label">ชื่อกิจกรรม</label>
                  <input type="text" class="form-control" name="volu_name" aria-describedby="ชื่อกิจกรรม">
                </div>
                <div class="col">
                  <label for="volu_hours" class="form-label">จำนวนชั่วโมงจิตอาสาที่ได้รับ</label>
                  <input type="number" class="form-control" name="volu_hours" aria-describedby="จำนวนชั่วโมงจิตอาสาที่ได้รับ">
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <label for="volu_uniform" class="form-label">โปรดเลือกเครื่องแบบ</label>
                    <select class="form-select" name="volu_uniform" aria-label="select urole">
                    <option selected>- เลือกเครื่องแบบ -</option>
                    <option value="เครื่องแบบนักศึกษา">เครื่องแบบนักศึกษา</option>
                    <option value="เครื่องแบบนักศึกษาพิธีการ">เครื่องแบบนักศึกษาพิธีการ</option>
                    <option value="เครื่องแบบสุภาพ">เครื่องแบบสุภาพ</option>
                  </select>
                </div>
              
                <div class="col">
                  <label for="volu_stdMax" class="form-label">จำนวนนักศึกษาที่ต้องการ</label>
                  <input type="number" class="form-control" name="volu_stdMax">
                </div>
                
              </div>
            </div>

            <div class="row">
            <div class="row">
              <div class="col">
                <script>
                  $( function() {
                    $( "#volu_start" ).datepicker();
                  } );
                  </script>
                  <label class="form-label" for="volu_start">วันที่เริ่มกิจกรรม</label>
                  <input type="datetime-local" name="volu_start" class="form-control" />
              </div>

              <div class="col">
                <script>
                  $( function() {
                    $( "#volu_end" ).datepicker();
                  } );
                  </script>
                  <label class="form-label" for="volu_end">วันที่สิ้นสุดกิจกรรม</label>
                  <input type="datetime-local" name="volu_end" class="form-control" />
              </div>
            </div>

            </div>
            
            <div class="col">
                  <label for="volu_location" class="form-label">สถานที่จัดกิจกรรม</label>
                  <input type="text" class="form-control" name="volu_location" aria-describedby="สถานที่จัดกิจกรรม">
              </div>


            

            <div class="col">
                  <label for="volu_detail" class="form-label">รายละเอียดกิจกรรม</label>
                  <input type="text" class="form-control" name="volu_detail" aria-describedby="รายละเอียดกิจกรรม">
                </div>

            <!--เลือก วันที่ แปะไว้ก่อน-->
                
          
            <div class="mb-3">
                <label for="volu_note" class="form-label">หมายเหตุ</label>
                <input type="text" class="form-control" name="volu_note" aria-describedby="สถานที่จัดกิจกรรม">
            </div>

              <div class="col">
                <label class="form-label" for="volu_tags">เพิ่มแท็กการค้นหา</label>
                <input type="text" name="volu_tags" id="volu_tags" class="form-control" />
              </div>

              <div class="col">
                <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
                <input type="file" name="volu_img" required   class="form-control" accept="image/jpeg, image/png, image/jpg"> <br>
              </div>

            <div class="col"><br>
              <button type="submit" name="formAdd" class="btn btn-primary">เพิ่มข้อมูล</button>
            </div>
           
            
            
                
            </form>
            </div>
          </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                </div>
              </div>
          </main>
        </div>
      </div>
</body>


<script>
$(document).ready(function(){
 
 $('#volu_tags').tokenfield({
  autocomplete:{
   source: ['ร่างกาย','ทำความสะอาด','ให้ความรู้','ช่วยเหลือ/ดูแล','สิ่งแวดล้อม','อาสาสมัคร','สาธารณะประโยชน์'],
   delay:100
  },
  showAutocompleteOnFocus: true
 });

 $('#programmer_form').on('submit', function(event){
  event.preventDefault();
  if($.trim($('#volu_tags').val()).length == 0)
  {
   alert("Please Enter Atleast one Skill");
   return false;
  }
  else
  {
   var form_data = $(this).serialize();
   $('#submit').attr("disabled","disabled");
   $.ajax({
    url:"formeAdd_volunteer.php",
    method:"POST",
    data:form_data,
    beforeSend:function(){
     $('#submit').val('Submitting...');
    },
    success:function(data){
     if(data != '')
     {
      $('#name').val('');
      $('#skill').tokenfield('setTokens',[]);

      $('#submit').attr("disabled", false);
      $('#submit').val('Submit');
     }
    }
   }, 5000);
  }
 });
});
</script>

</html>
