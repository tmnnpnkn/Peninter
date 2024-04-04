<?php

include ("php/connectdb.php");
// include("php/login.php");

?>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

    </head>
<?php

session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'a'|| $_SESSION['status'] != 'a') { //check session

    echo '<script>
    setTimeout(function() {
     swal({
         title: "เกิดข้อผิดพลาด",
          text: "ไม่มีสิทธิ์เข้าใช้ กรุณาเข้าสู่ระบบ",
         type: "warning"
     }, function() {
         window.location = "loginn.php"; //หน้าที่ต้องการให้กระโดดไป
     });
   }, 500);
</script>';
    //   Header("Location: php/logout.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}    else {
    // include ("headtotoe/headee.php");
    // echo '<div>ยินดีต้อนรับ, ' . $_SESSION['name'] . '</div>';
    $sql = "SELECT invoice_id, company_name, company_address, delivery_date, contact_person, total_vat, order_status, created_by 
    FROM invoice";

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php 
// include('php/login.php');
?>
<link href="../css/styles.css" rel="stylesheet" />
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/popup.css rel" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/count.css">
        <!-- Add this just before </body> or in the <head> section -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                P.E.N INTERTRADE
            </a>

            <!-- Right elements -->
            <div class="ms-auto d-flex align-items-center"> <!-- ใช้คลาส ms-auto เพื่อชิดขอบขวา -->
                <?php
                // echo '<div>ยินดีต้อนรับ, ' . $_SESSION['name'] . '</div>';
                // สร้างคำสั่ง SQL เพื่อดึงชื่อผู้ใช้
                $sql = "SELECT name FROM user WHERE id = id"; // แทนที่รหัสผู้ใช้ด้วยรหัสของผู้ใช้ที่เข้าสู่ระบบ
                $result = mysqli_query($conn, $sql);

                // ตรวจสอบว่ามีข้อมูลหรือไม่
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $userName = $row['name'];

                    // แสดงรูปโปรไฟล์
                    echo '<img src="images/user.png" class="rounded-circle" height="25" alt="' . $userName . '" loading="lazy" />';
                    // แสดงชื่อผู้ใช้
                    echo '<span class="text-white ms-2">' . $_SESSION['name']. '</span>';
                } else {
                    echo "0 results";
                }
                ?>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->


    
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> -->
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
      
        <!-- Left links -->
        
        <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <!-- <div class="d-flex align-items-center"> -->

    
    <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <body class="sb-nav-fixed">
        <div class="container-fluid">
            <div class="d-flex flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="adminpanel.php"
                            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">เมนู</span>
                        </a>
                        <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="adminpanel.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline">หน้าหลัก</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="php/register.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline" style="white-space: nowrap;">จัดการผู้ใช้</span>
                                </a>
                            </li>

                            <li>
                                <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline">จัดการสินค้า</span>
                                </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="php/formAddProduct.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">เพิ่มสินค้าใหม่</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="php/AddnumProduct.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">เพิ่มสินค้าในคลัง</span>
                                        </a>
                                    </li>
                                    <li class="w-100">
                                        <a href="php/product_edit.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">แก้ไขสินค้า</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="php/show_product.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline" style="white-space: nowrap;">ค้นหาสินค้า</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="php/add_product_type.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline"
                                        style="white-space: nowrap;">จัดการประเภทสินค้า</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="php/confirm_order.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline"
                                        style="white-space: nowrap;">จัดการเบิกสินค้า</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline">จัดการรายงาน</span>
                                </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="php/view_bai.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">สรุปรายการเบิก-จ่าย</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="php/summary_month.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">สรุปยอดขายรายเดือน</span>
                                        </a>
                                    </li>
                                    <li class="w-100">
                                        <a href="php/summary_years.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">สรุปยอดขายรายปี</span>
                                        </a>
                                    </li>
                                    <li class="w-100">
                                        <a href="php/summaryP_month.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">สรุปยอดขายสินค้าตามเดือน</span>
                                        </a>
                                    </li>
                                    <li class="w-100">
                                        <a href="php/summaryP_years.php" class="nav-link px-0">
                                            <span class="d-none d-sm-inline text-white">สรุปยอดขายสินค้าตามปี</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="php/logout.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-door-closed"></i>
                                    <span class="ms-1 d-none d-sm-inline">ออกจากระบบ</span>
                                </a>
                            </li>

                        </ul>

                        <hr>

                    </div>
                </div>

                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="col-auto col-md-9 ">
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid">
                                <h2 class="mt-4">หน้าหลัก</h2>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>


                                <!-- <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="card bg-primary text-white mb-4">
                                            <div class="card-body">User Management</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="php/register.php">View
                                                    Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="card bg-warning text-white mb-4">
                                            <div class="card-body">Post</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="php/post_manage.php">View
                                                    Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="card bg-success text-white mb-4">
                                            <div class="card-body">Notice</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="php/notice_manage.php">View
                                                    Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->


                                <?php
                                $sql2 = "SELECT COUNT(DISTINCT orderId) AS total_order FROM order_details";
                                $query2 = mysqli_query($conn, $sql2);
                                $row = mysqli_fetch_assoc($query2);
                                $total_order = $row['total_order'];


                                $sql3 = "select * from invoice";
                                $query3 = mysqli_query($conn, $sql3);
                                $total_invoice = mysqli_num_rows($query3);

                                // $sql4 = "select * from prakad";
                                // $query4 = mysqli_query($conn, $sql4);
                                // $total_notice = mysqli_num_rows($query4);
                            
                                $sql5 = "select * from product";
                                $query5 = mysqli_query($conn, $sql5);
                                $total_product = mysqli_num_rows($query5);

                                ?>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="php/confirm_order.php">
                                                <div class="card-counter primary">
                                                    <i class="fa fa-newspaper-o"></i>
                                                    <span class="count-numbers">
                                                        <?php echo $total_order; ?>
                                                    </span>
                                                    <span class="count-name">รายการออเดอร์</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="php/show_product.php">
                                                <div class="card-counter danger">
                                                    <i class="fa fa-ticket"></i>
                                                    <span class="count-numbers">
                                                        <?php echo $total_product; ?>
                                                    </span>
                                                    <span class="count-name">รายการสินค้า</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="php/view_bai.php">
                                                <div class="card-counter success">
                                                    <i class="fa fa-money"></i>
                                                    <span class="count-numbers">
                                                        <?php echo $total_invoice; ?>
                                                    </span>
                                                    <span class="count-name">รายการเบิก-จ่าย</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <br>


                                <!-- <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-area me-1"></i>
                                            Pie Chart
                                        </div>
                                        <div class="card-body">
                                            <?php

                                            $sql = "SELECT * FROM articles ORDER BY view_count DESC LIMIT 5";
                                            $result = mysqli_query($conn, $sql);

                                            // Create an empty array to store the results
                                            $data = array();

                                            // Fetch the results and add them to the data array
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $data[] = array(
                                                        'id' => $row['a_id'],
                                                        'title' => $row['title'],
                                                        'View Count' => $row['view_count']
                                                    );
                                                }
                                            }
                                            // Convert the data array to JSON
                                            $jsonData = json_encode($data);
                                            // Output the JSON data
// echo $jsonData;                                      
                                            ?>
                                            <!DOCTYPE html>
                                            <html>

                                            <head>
                                                <title>View</title>
                                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            </head>


                                            </html>
                                        </div>

                                    </div>
                                </div> -->

                                <!-- <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            Bar Chart Example
                                        </div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                                <!-- ตัวอย่างการแสดงตารางใบเบิกสินค้า -->
                                <div class="card mb-6">
                                    <div class="card-header">
                                        <i class="fa fa-table me-1"></i>
                                        รายการใบเบิกสินค้าที่ต้องการการอนุมัติ
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>รหัสการสั่งซื้อ</th>
                                                        <th>ชื่อบริษัท</th>
                                                        <th>ที่อยู่</th>
                                                        <th>วันที่ส่งสินค้า</th>
                                                        <th>ผู้ติดต่อ</th>
                                                        <th>ราคารวม</th>

                                                        <th>ผู้ทำรายการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // Query เพื่อดึงข้อมูลใบเบิกสินค้าที่ต้องการการอนุมัติพร้อมกับข้อมูลของผู้ทำรายการ
                                                    $sql = "SELECT invoice.invoice_id, invoice.company_name, invoice.company_address, invoice.delivery_date, invoice.contact_person, invoice.total_vat, user.Name as created_by_name
FROM invoice
INNER JOIN user ON invoice.created_by = user.id
WHERE invoice.order_status = 'pending_approval'";
                                                    $result = mysqli_query($conn, $sql);

                                                    // วนลูปและแสดงข้อมูลใบเบิกสินค้าพร้อมข้อมูลผู้ทำรายการ
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['invoice_id'] . "</td>";
                                                        echo "<td>" . $row['company_name'] . "</td>";
                                                        echo "<td>" . $row['company_address'] . "</td>";
                                                        echo "<td>" . $row['delivery_date'] . "</td>";
                                                        echo "<td>" . $row['contact_person'] . "</td>";
                                                        echo "<td>" . $row['total_vat'] . "</td>";
                                                       echo "<td>" . $row['created_by_name'] . "</td>"; // แสดงชื่อผู้ทำรายการ

                                                        echo "</tr>";
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>





                                <div class="card mb-6">
                                    <div class="card-header">
                                        <i class="fa fa-table me-1"></i>
                                        สินค้าที่ใกล้จะหมด
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>รหัสสินค้า</th>
                                                        <th>ชื่อสินค้า</th>
                                                        <th>จำนวน</th>
                                                        <!-- Add more table headers for additional product attributes if needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // Fetch products that are almost out of stock and sort them by quantity (few to a lot)
                                                    $sql = "SELECT * FROM product WHERE p_num <= 100 ORDER BY p_num ASC";
                                                    $result = mysqli_query($conn, $sql);

                                                    // Output each product as a table row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['p_id'] . "</td>";
                                                        echo "<td>" . $row['p_name'] . "</td>";
                                                        echo "<td style='color: red;'>" . $row['p_num'] . "</td>";
                                                        // Add more table cells for additional product attributes
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                        </main>
                    </div>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-12">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" -->
            <!-- crossorigin="anonymous"></script> -->
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>

    </body>


    </html>
    <?php

    include ('headtotoe/footer.php');
}

?>