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

<html>
<head>  
  <!-- ดูไฟล์ CSS -->
<link rel="stylesheet" type="text/css" href="travelling.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@200&display=swap" rel="stylesheet">
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
<title>Travelling Maramat</title>

<body>
    
<?php include ('navbar.php'); 

?>
<div class="container"></div>
<section>
  <img src="img/stars.png" id="stars">
  <img src="img/moon.png" id="moon">
  <!-- <img src="img/tra/plant.png" id="moutains_behind"> -->
  <?php foreach ($query_travelling as $data):?><h5 id="text"><?php endforeach;?>สถานที่ท่องเที่ยว<?=$data['type_name']?></h5>
  <a href="#ho" id ="btn">สถานที่ท่องเที่ยว</a>
  <img src="img/tra/22211212.png" id="moutains_front">
</section>

<?php foreach ($query_travelling as $data):?>
  <div class="ho" id="ho">
  
   <ul class="nav justify-content-center mb-3 mt-4">



   <div class="row">
    
    
      <center>
       <!--  ปรับสีการ์ด กอบ -->
      <div class="card mb-3" style="width: 600px; max-width: 1000px; height: 200px;  background: linear-gradient(#609966,#6A875B);">
  <div class="row g-0">

    <div class="col-md-4 text-center">
      <img src="member/upload/Travelling/<?=$data['travelling_img']?>" class="img-fluid rounded-start" style="max-width: 100%; max-height: 100%; height: 200px; width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$data['travelling_name']?>  
    </h5>

        <!-- <p class="card-text">รายละเอียด:<?=$data['travelling_Details']?></p> -->
    <br>
        <a href="travelling_detail.php?id=<?=$data['travelling_id']?>&type_product_id=<?=$data['travelling_type_id']?>&type_restuarant_id=<?=$data['travelling_type_id']?>&type_hotel_id=<?=$data['travelling_type_id']?>&LAT=<?=$data['LAT']?>&LNG=<?=$data['LNG']?>"class="btn btn-dark">รายละเอียด</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?> 

<script>
  let stars = document.getElementById('stars');
  let moon = document.getElementById('moon');
  let moutains_behind = document.getElementById('moutains_behind');
  let text = document.getElementById('text');
  let btn = document.getElementById('btn');
  let moutains_front = document.getElementById('moutains_front');

  window.addEventListener('scroll', function(){
    let value = window.scrollY;
    stars.style.left = value * 0.25 + 'px';
    moon.style.top = value * 1.05 + 'px';
    moutains_behind.style.top = value * 0.5 + 'px';
    moutains_front.style.top = value * 0 + 'px';
    text.style.marginRight = value * 4 + 'px';
    text.style.marginTop = value * 1.5 + 'px';
    btn.style.marginTop = value * 1.5 + 'px';
  })
</script>



