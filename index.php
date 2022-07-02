<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="loginmodal.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c438787ad5.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- navbar  -->
<?php include "includes/navbar.php " ; ?>
<!-- end of navbar -->

<!-- login Modal -->
<?php include "includes/login.php " ; ?>
<!-- end of login MODAL -->

<!-- Signup Modal -->
<?php include "includes/signup.php " ; ?>
<!-- end of sign up modal  -->


<!-- content-body -->
    <div class="container-fluid">


      <!-- project section  -->

      <!-- projet1  -->
      <?php include "includes/pglife.php " ; ?>
      <!-- project1 end  -->

      <!-- project2 -->
      <?php include "includes/loginsystem.php " ; ?>
      <!-- project2 end -->

      <!-- project3  -->
      <?php include "includes/.php " ; ?>
      <!-- project3 end  -->





    </div><!--container end -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>