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
   <title>manage paroduct</title>
   <link rel="icon" type="image/x-icon" href="src/stellana.png">
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
        <a href="investory.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Investory</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="investory.php">Investory</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Product</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Product</a></li>
          <li><a href="mproduct.php">Manage Product</a></li>
          <li><a href="vproduct.php">View Product</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">G.K.L.S.Premarathne</div>
        <div class="job">Admin</div>
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
	<h1 class="page-header text-center">Product Details </h1>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">

			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>

			<div class="row">
				<a href="#addnewProduct" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				</div>

			<div class="height10"></div>
			
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Patch no</th>
						<th>Ifs no</th>
						<th>Discription</th>
            <th>Order Qty</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('config.php');
							$sql = "SELECT * FROM product";

                //use for MySQLi-OOP
                $query = $conn->query($sql);
                while($row = $query->fetch_assoc()){
                echo
                "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['patchno']."</td>
                    <td>".$row['ifsno']."</td>
                    <td>".$row['description']."</td>
                    <td>".$row['orderqty']."</td>
                    <td>
                    <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                    <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                    </td>
                </tr>";
                include('edit_delete_product.php');
              }               
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_model_product.php') ?>

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