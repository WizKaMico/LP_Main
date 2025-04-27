<?php include('../action/account/accountAction.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>L&P Associates | Dashboard</title>
  <link rel="stylesheet" href="../public/assets/admin/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

<div class="container" id="container">
  <?php if(!empty($_GET['view'])) { ?>
    <?php switch($_GET['view']) { 
          case "HOME":
            include('route/home.php');
            break;
          case "CHANGEPASSWORD":
            include('route/changepassword.php');
            break;
          default:
            include('route/home.php');
            break;  
    ?>
    <?php } } else { ?>
    <?php include('route/home.php'); ?>    
    <?php } ?>
</div>

<div class="footer">

<!-- partial -->
  <script  src="../public/assets/admin/script.js"></script>

</body>
</html>
