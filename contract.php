<?php 
include('connect/conect.php');

$sql = " SELECT * FROM contract"; 
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@200&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        @media only screen and (min-width: 992px) {
          .menu-custom:hover{
              background-color: gray;
              border-radius: 5px;
          }
          .active-menu-custom{
              border-bottom: 1px solid white;
          }

        }

  </style>


<body>
  
<?php require ("navbar.php") ?>

<h1 class="py-5 text-center bg-secondary bg-gradient text-white">ติดต่อ</h1>
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
        <?php foreach ($query as $data):?>
           <br /> <h2 class="text-decoration-underline"><p>  ข้อมูลการติดต่อ</p></h2>
            <p class="fs-5">ชื่อจริง - นามสกุล :<?=$data['firstname']?> <?=$data['lastname']?></p>
            <p class="fs-5">เบอรติดต่อ :<?=$data['phone']?>
            <p class="fs-5">อีเมล์ :<?=$data['email']?>
           </div><?php endforeach;?> 
        






