<?php include('connect/conect.php'); 

$sql = "SELECT * FROM tb_travelling_type";
$query_travelling_type = mysqli_query($conn,$sql);

$sql = "SELECT *,tb_travelling.travelling_name,tb_travelling_type.travelling_type_name AS type_name FROM tb_travelling LEFT JOIN 
  tb_travelling_type ON tb_travelling.type_travelling_id = tb_travelling_type.travelling_type_id";
if(isset($_GET['type_travelling_id']) && !empty($_GET['type_travelling_id'])){
  $sql .= " WHERE type_travelling_id = '".$_GET['type_travelling_id']."'";
}

$query_travelling = mysqli_query($conn,$sql);
?>

 <?php
 $sql = "SELECT *,product.product_name,tb_travelling_type.travelling_type_name AS type_Pname FROM product LEFT JOIN 
 tb_travelling_type ON product.type_product_id = tb_travelling_type.travelling_type_id";
 if(isset($_GET['type_product_id']) && !empty($_GET['type_product_id'])){
  $sql .= " WHERE type_product_id = '".$_GET['type_product_id']."'";
}
 $query_product = mysqli_query($conn,$sql);
 ?> 

<?php
$sql = "SELECT *,hotel.hotel_name,tb_travelling_type.travelling_type_name AS type_Hname FROM hotel LEFT JOIN 
  tb_travelling_type ON hotel.type_hotel_id = tb_travelling_type.travelling_type_id";
if(isset($_GET['type_hotel_id']) && !empty($_GET['type_hotel_id'])){
  $sql .= " WHERE type_hotel_id = '".$_GET['type_hotel_id']."'";
}
$query_hotel = mysqli_query($conn,$sql);
?>

<?php
$sql = "SELECT *,restuarant.restuarant_name,tb_travelling_type.travelling_type_name AS type_Rname FROM restuarant LEFT JOIN 
  tb_travelling_type ON restuarant.type_restuarant_id = tb_travelling_type.travelling_type_id";
if(isset($_GET['type_restuarant_id']) && !empty($_GET['type_restuarant_id'])){
  $sql .= " WHERE type_restuarant_id = '".$_GET['type_restuarant_id']."'";
}


$query_restuarant = mysqli_query($conn,$sql);
?>

<head> 
<link rel="stylesheet" type="text/css" href="font.css">
</head>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">สถานที่ท่องเที่ยวแม่ระมาด</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-0 logo-absolute text-white">
          <a class="nav-link active-menu-custom" aria-current="page" href="index.php">หน้าหลัก</a>
        </li>

        <li class="nav-item dropdown me-0 logo-absolute text-white">
          <a class="nav-link dropdown-toggle menu-custom" href="#" data-bs-toggle="dropdown" aria-expanded="false">เข้าสู่ระบบ</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="member/index.php">สมาชิก</a></li>
            <li><a class="dropdown-item" href="admin/index.php">ผู้ดูแลระบบ</a></li>

          </ul>
        </li>

        
        <?php foreach ($query_travelling_type as $data):?>


        <li class="nav-item dropdown me-0 logo-absolute text-white">
          <a class="nav-link dropdown-toggle menu-custom" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <?=$data['travelling_type_name']?></a>
          
          <ul class="dropdown-menu">
            <li><a href="travelling.php?type_travelling_id=<?=$data['travelling_type_id']?>" class="dropdown-item"> สถานที่ท่องเที่ยว</a></li>
            <li><a class="dropdown-item active-menu-custom" href="product.php?type_product_id=<?=$data['travelling_type_id']?>">ผลิตภัณฑ์</a></li>
            <li><a class="dropdown-item active-menu-custom" href="hotel.php?type_hotel_id=<?=$data['travelling_type_id']?>">ที่พัก</a></li>
            <li><a class="dropdown-item active-menu-custom" href="restuarant.php?type_restuarant_id=<?=$data['travelling_type_id']?>">ร้านอาหาร</a></li>
          </ul>
<?php endforeach;?>
       </li>
       
          <ul class="dropdown-menu">


</ul>
</li>
   
        <!-- <li class="nav-item dropdown me-0 logo-absolute text-white menu-custom">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">สถานที่ท่องเที่ยว</a>
        
        </li>

        <li class="nav-item dropdown me-0 logo-absolute text-white menu-custom">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เทศบาลตำบลเเม่จะเรา</a>
          <ul class="dropdown-menu">
           
          </ul>
        </li>

        <li class="nav-item dropdown me-0 logo-absolute text-white menu-custom">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เทศบาลตำบลทุ่งหลวง</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">สถานที่ท่องเที่ยว</a></li>
            <li><a class="dropdown-item" href="#">ผลิตภัณฑ์</a></li>
            <li><a class="dropdown-item" href="#">ที่พัก</a></li>
            <li><a class="dropdown-item" href="#">ร้านอาหาร</a></li>
          </ul>
        </li> -->

        <li class="nav-item me-0 logo-absolute text-white menu-custom">
          <a class="nav-link" aria-current="page <?= $url[0] == 'contract' ? 'active-menu-custom' : ''?>"href="contract.php">ติดต่อ</a>
        </li>


      </ul>
      
    </div>
  </div>
</nav>