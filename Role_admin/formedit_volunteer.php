<?php
session_start();
require_once 'config/db.php';
    if (!isset($_SESSION['admin_login'])) {
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

        <?php
    if(isset($_GET['id'])){
      require_once 'config/db.php';
      $stmt = $conn->prepare("SELECT* FROM volunteer WHERE volu_id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($stmt->rowCount() < 1){
          header('Location: /Project_910_MATCHLIFE/Role_admin/Volunteer.php');
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
                      <h1 class="h3 mb-0 ls-tight">Volunteer</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>



<main class="py-5">
            <!-- Container พื้นที่ลงเนื้อหา-->
            <div class="container-xl">
              <div class="border bg-surface-secondary h-full border-dashed rounded  justify-content-center align-items-center" style="min-height: 400px;">
                <div class="font-semibold text-muted p-5">
                <p>คลิ๊กที่นี่เพื่อย้อนกลับ <a href="/Project_910_MATCHLIFE/Role_admin/Volunteer.php">ย้อนกลับ</a></p>
                <div class="col">
                  <h4>ฟอร์มแก้ไขกิจกรรม</h4>
                  <form action="/Project_910_MATCHLIFE/Role_admin/formedit_db_volunteer.php" method="post">

<div class="row">
        <div class="col">
          <div class="clearfix">
                            <img src="/Project_910_MATCHLIFE/Role_admin/uploads/<?= $row['volu_img'];?>" width="50%" min-height="50%">
                        </div>
        </div>
                  
                    
                    <div class="col">
                        <label for="volu_name" class="col-sm-4 col-form-label"> ชื่อกิจกรรม :  </label>                         
                        <input type="text" name="volu_name" class="form-control" required value="<?= $row['volu_name'];?>" minlength="3">
                      
                        <label for="volu_hours" class="col-sm-10 col-form-label"> จำนวนชั่วโมงจิตอาสาที่ได้รับ :  </label>
                        <input type="text" name="volu_hours" class="form-control" required value="<?= $row['volu_hours'];?>" minlength="3">

                        <label for="volu_stdMax" class="col-sm-10 col-form-label"> จำนวนนักศึกษาที่ต้องการ :  </label>
                      <input type="number" name="volu_stdMax" class="form-control" required value="<?= $row['volu_stdMax'];?>" minlength="3">
                    </div>
                    
                  </div>
                   <div class="col">
                        <label for="volu_location" class="col-sm-4 col-form-label"> สถานที่จัดกิจกรรม :  </label>
                        <input type="text" name="volu_location" class="form-control" required value="<?= $row['volu_location'];?>" minlength="3">
                    </div>
                    
                    
                    <div class="col">
                    <label for="volu_uniform" class="col-sm-10 col-form-label">โปรดเลือกเครื่องแบบ : </label>
                      <select class="form-select" name="volu_uniform"  aria-label="select urole">
                      <option selected required><?php echo $row['volu_uniform']; ?></option>
                        <option value="เครื่องแบบนักศึกษา">เครื่องแบบนักศึกษา</option>
                        <option value="เครื่องแบบนักศึกษาพิธีการ">เครื่องแบบนักศึกษาพิธีการ</option>
                        <option value="เครื่องแบบสุภาพ">เครื่องแบบสุภาพ</option>
                      </select>
                    </div>
                  


                  <div class="row">
              <div class="col">
                <script>
                  $( function() {
                    $( "#volu_start" ).datepicker();
                  } );
                  </script>
                  <label class="form-label" for="volu_start">วันที่เริ่มกิจกรรม</label>
                  <input type="datetime-local" name="volu_start" class="form-control" value="<?= $row['volu_start'];?>" />
              </div>

              <div class="col">
                <script>
                  $( function() {
                    $( "#volu_end" ).datepicker();
                  } );
                  </script>
                  <label class="form-label" for="volu_end">วันที่สิ้นสุดกิจกรรม</label>
                  <input type="datetime-local" name="volu_end" class="form-control" value="<?= $row['volu_end'];?>" />
              </div>
            </div>

                  <div class="row">
                    <div class="col">
                      <label for="volu_detail" class="col-sm-6 col-form-label"> รายละเอียดกิจกรรม :  </label>
                        <input type="text" name="volu_detail" class="form-control" required value="<?= $row['volu_detail'];?>" minlength="3">
                    </div>
                    <div class="col">
                      <label for="volu_note" class="col-sm-4 col-form-label"> หมายเหตุ :  </label>
                      <input type="text" name="volu_note" class="form-control"  value="<?= $row['volu_note'];?>" minlength="3">
                    </div>
                  
                  </div>


                  <div class="col">
                    <label>เพิ่มแท็กการค้นหา</label>
                    <input type="text" name="volu_tags" id="volu_tags" value="<?= $row['volu_tags'];?>" class="form-control" />
                  </div>

                  
                    
                    <input type="hidden" name="volu_id" value="<?= $row['volu_id'];?>"><br>
                    <div class="col text-end">
                      <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
                    </div>
                  </form>

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
    url:"formedit_db_volunteer.php",
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

                   
                </div>
                </div>
              </div>
            </div>
          </main>


          <!-- Container พื้นที่ลงเนื้อหา-->
          <div class="container-xl">
            <div class="row">
              <div class="col">
                <h3>รายชื่อ</h3>
              </div>

              <div class="col">
                <div class="float-md-end">
                <!--<button type="submit" class="btn btn-success">Export .xls</button>-->
                </div>
              </div>
            </div>
            
            <br>
              <div class="border bg-surface-secondary h-full border-dashed rounded justify-content-center align-items-center" >
                <div class="font-semibold text-muted p-5">
                <div class="col">
                  <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">ลำดับ</th>
                            <th width="5%">รหัสนักศึกษา</th>
                            <th width="35%">ชื่อ - นามสกุล</th>
                            <th width="40%">คณะ</th>
                            <th width="45%">เบอร์โทร</th>
                            <th width="5%">แก้ไข</th>
                            <th width="5%">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          //คิวรี่ข้อมูลมาแสดงในตาราง
                          $i =1;
                          require_once 'config/db.php';
                          $stmt = $conn->prepare("SELECT* FROM applys WHERE volunteer_id = $row[volu_id]");
                          $stmt->execute();
                          $result = $stmt->fetchAll();
                          foreach($result as $k) {     
                          ?>
                          <tr>
                            <td><?php echo $i; $i++;?></td>
                            <td><?= $k['users_std'];?></td>
                            <td><?= $k['user_name']?></td>
                            <td><?= $k['user_major']?></td>
                            <td>0<?= $k['user_tel']?></td>
                            <td><a href="formedit_volunteer.php?id=<?= $k['applys_id'];?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                            <td><a href="del_volunteer.php?id=<?= $k['applys_id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
                          </tr>
                        <?php } ?>
                    </tbody>
                    </table>

                  
                </div>


                </div>
              </div>
          </div>


        </div>
      </div>
</body>




</html>