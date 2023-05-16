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
   <!-- Boxiocns CDN Link -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sidebar.css">
   
</head>
<body>
 
<div class="sidebar close">
    <div class="logo-details">
    <i class='bx bxl-stripe'></i>
      <span class="logo_name">stellana</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="user_page.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="user_page.php">profile</a></li>
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
          <a href="blanking.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Blanking</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="blanking.php">Blanking</a></li>
          <li><a href="base.php">Base</a></li>
          <li><a href="cushion.php">Cushion</a></li>
          <li><a href="tread.php">Tread</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="moldings.php">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Molding</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="moldings.php">Moldnig</a></li>
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
  </section>

 

  
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