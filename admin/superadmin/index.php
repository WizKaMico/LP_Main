<?php 
include('../../action/account/adminAccountAction.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>L&P Associates | HOME | AGENT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../public/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../public/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../public/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../public/admin/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../public/admin/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../public/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../public/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../public/admin/images/favicon.png" />

        <!-- DataTables CSS for Bootstrap 5 -->
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

        <!-- DataTables JavaScript for Bootstrap 5 -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <?php include('../../public/admin/alert/Swal.php'); ?>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include('./navigation/navigation.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include('./sidebar/sidebar.php'); ?>    
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" id="clock"></h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <?php 
            if(!empty($_GET['view']))  { 
                switch($_GET['view'])
                {
                    case "HOME":
                        include('./routes/home.php');
                        break;
                    case "ACTIVITYLOG":
                        include('./routes/activity.php');
                        break;
                    case "MATERIAL":
                        include('./routes/material.php');    
                        break;
                    default:
                        include('./routes/home.php');
                        break;
                }
            } else { ?>
            <?php include('./routes/home.php'); ?>    
            <?php } ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include('./footer/footer.php'); ?>    
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../public/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../public/admin/vendors/chart.js/chart.umd.js"></script>
    <script src="../../public/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../public/admin/js/off-canvas.js"></script>
    <script src="../../public/admin/js/misc.js"></script>
    <script src="../../public/admin/js/settings.js"></script>
    <script src="../../public/admin/js/todolist.js"></script>
    <script src="../../public/admin/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- End custom js for this page -->
    <script src="../../public/admin/js/clock.js"></script>
       <!-- DataTables JavaScript for Bootstrap 5 -->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
     <script>
        $(document).ready(function() {
            let table3 = new DataTable('#activitiyTable');
        });
     </script>
      <script>
        <?php 
    
        $view = isset($_GET['view']) ? $_GET['view'] : 'default'; 

        ?>
        document.addEventListener("DOMContentLoaded", function() {
            const view = "<?php echo $view; ?>";
            switch (view) {
                case 'HOME':
                   loadScript('../../public/admin/js/dt.js');
                   break;
            }

        });

        function loadScript(src) {
            const script = document.createElement('script');
            script.src = src;
            document.head.appendChild(script);
        }
        </script>
  </body>
</html>