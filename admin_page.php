<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">
   <!-- Boxiocns CDN Link -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sidebar.css">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
   </style>
</head>
<body>
 
<div class="sidebar close">
    <div class="logo-details">
    <i class='bx bxl-stripe'></i>
      <span class="logo_name">stellana</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="admin_page.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="admin_page.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="attendance.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Attendance</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="attendance.php">Attendance</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Blanking</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Blanking</a></li>
          <li><a href="base.php">Base</a></li>
          <li><a href="cushion.php">Cushion</a></li>
          <li><a href="tread.php">Tread</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Molding</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Moldnig</a></li>
          <li><a href="unloading.php">Unloading</a></li>
          <li><a href="loading.php">Loding</a></li>
        </ul>
      </li>
      <li>
        <a href="quality.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Quality</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="quality.php">Quality</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">G.K.L.S.Premarathne</div>
        <div class="job">User</div>
      </div>
      <a href="logout.php"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content"><i class='bx bx-menu' ></i>
    </div>
    
    <div class="container">
	<h1 class="page-header text-center">Dashboard</h1>
  <div class="box-container">
<div class="box">
   <?php 
      $select_users = mysqli_query($conn, "SELECT * FROM `user_form` WHERE user_type = 'user'") or die('query failed');
      $number_of_users = mysqli_num_rows($select_users);
   ?>
   <h3><?php echo $number_of_users; ?></h3>
   <p>normal users</p>
</div>

<div class="box">
   <?php 
      $select_admins = mysqli_query($conn, "SELECT * FROM `user_form` WHERE user_type = 'admin'") or die('query failed');
      $number_of_admins = mysqli_num_rows($select_admins);
   ?>
   <h3><?php echo $number_of_admins; ?></h3>
   <p>admin users</p>
</div>

<div class="box">
   <?php 
      $select_account = mysqli_query($conn, "SELECT * FROM `user_form`") or die('query failed');
      $number_of_account = mysqli_num_rows($select_account);
   ?>
   <h3><?php echo $number_of_account; ?></h3>
   <p>total accounts</p>
</div>

</div>

  </section>


  <script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>

  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>


</body>
</html>