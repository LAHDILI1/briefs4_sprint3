<?php

include __DIR__ . '/../../../config/connect.php';

include __DIR__ . '/../../../models/scriptSQL.php';


// $query = "SELECT * FROM `users`";
// $result = mysqli_query($conn , $query);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
    body{
      padding:5% 10%;
    }
    .col-9{
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:start;
      width:100%;
    }
  </style>
  
</head>

  

<body class="bg-dark">


  <div class="content col-9 mt-5">
    <a href="add.php" class="btn btn-success mb-3" data-aos="fade-down" data-aos-duration="1500">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr data-aos="fade-left" data-aos-duration="1500">
          <th scope="col" data-aos="fade-left">Name</th>
          <!-- <th scope="col" data-aos="fade-left">Last Name</th> -->
          <th scope="col" data-aos="fade-left">Email</th>
          <th scope="col" data-aos="fade-left">User Name</th>
          <th scope="col" data-aos="fade-left">role</th>
          <!-- <th scope="col" data-aos="fade-left">Action</th> -->
        </tr>
      </thead>
      <tbody data-aos="fade-right" data-aos-duration="1500">
        <?php
        $users = affiche_total_user($conn);
          while($rows = $users->fetch_assoc()):
        ?>
          <tr>
            <th><?php echo $rows['name']?></th>
            
            <td><?php echo $rows['email']?></td>
            <td><?php echo $rows['user_name']?></td>
            
          </tr>
          <?php
          endwhile;
          ?>

      </tbody>
    </table>
  </div>

  


  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>



<script>
  AOS.init();
</script>

</html>