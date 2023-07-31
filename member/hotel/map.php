<?php require ("config/connect.php");



?>

<html>
<head> </head>
<title>Travelling Maramat</title>

<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<body>


<nav class="navbar navbar-expand-xxl navbar-dark bg-dark" aria-label="Seventh navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">สถานที่ท่องเที่ยวแม่ระมาด</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl" aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleXxl">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ความเป็นมา</a>
          </li>
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เทศบาลแม่ระมาด</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เทศบาลแม่จะเรา</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เทษบาลทุ่งหลวง</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">ติดต่อ</a>
          </li>
<li class="nav-item"></li>
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
</li>

        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="ค้นหา..." aria-label="Search">
        </form>
      </div>
    </div>
  </nav>  

 
 <section class ="container text-center mb-7">
<div class="row">
<?php

$sql ="SELECT * FROM hotel order by hotel_name ";
$result = mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)){
?>
  <div class="col-md-4"><br>
  <center>
      <div class="card"style="width: 70rem;">
      <div class="text-center">
        <br>
          <img src="../upload/hotel/<?=$row['hotel_image']?>" class="rounded" width="300" height="300">
  <div class="card-body">
    <h5 class="card-title"><?=$row['hotel_name']?><br></h5>
    <p class="card-text"> รายละเอียด <?=$row['hotel_details']?></p>
    สถานที่ตั้ง <?=$row['hotel_address']?> <br>
    พิกัด <?=$row['hotel_GIS']?> <br>
    <a href="#" class="btn btn-primary">ดูแผนที่</a><br>
</center>


  </div>
</div>

<?php 
  }
  mysqli_close($conn);
?>
</section> 




<footer>
 



</body>
</html>