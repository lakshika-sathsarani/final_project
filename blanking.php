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
        <div class="home-content"><i class='bx bx-menu' ></i></div>
        <div class="container">
            <h1 class="page-header text-center">Blanking Section-Details</h1>
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
                    <a href="print_blanking.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
                </div>

                <div class="height10"></div>
                    <div class="row">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <th>IFS no</th>
                                <th>Tire no</th>
                                <th>Base start time</th>
                                <th>Base epf no</th>
                                <th>Cushion start time</th>
                                <th>Cushion epf no</th>
                                <th>Tread finish time</th>
                                <th>Tread epf no</th>
                            </thead>
                            <tbody>
                                <?php
                                // Database credentials
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "user_db";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Query to retrieve data from multiple tables
                                $sql = "SELECT base.ifsno, base.tireno, base.starttime, base.epfno, cushion.cstarttime, cushion.cepfno, tread.finishtime, tread.tepfno
                                        FROM base
                                        INNER JOIN cushion ON  base.tireno = cushion.tireno
                                        INNER JOIN tread ON  cushion.tireno = tread.tireno
                                        ORDER BY base.starttime DESC";

                                $result = $conn->query($sql);

                            
                                // Store results in an array
                                $data = array();
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $data[] = $row;
                                    }
                                }

                                $conn->close();
                                ?>
                                <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?php echo $row['ifsno']; ?></td>
                                    <td><?php echo $row['tireno']; ?></td>
                                    <td><?php echo $row['starttime']; ?></td>
                                    <td><?php echo $row['epfno']; ?></td>
                                    <td><?php echo $row['cstarttime']; ?></td>
                                    <td><?php echo $row['cepfno']; ?></td>
                                    <td><?php echo $row['finishtime']; ?></td>
                                    <td><?php echo $row['tepfno']; ?></td>   
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Sort table by order date
        var table = document.querySelector('table');
        var tbody = table.querySelector('tbody');
        var rows = Array.from(tbody.querySelectorAll('tr'));
        rows.sort((a, b) => (new Date(b.cells[1].textContent) - new Date(a.cells[1].textContent)));
        rows.forEach(row => tbody.appendChild(row));
    </script>
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
