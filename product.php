<?php include('connect/conect.php'); ?>

<html>
<head>  
<link rel="stylesheet" type="text/css" href="product.css">
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
  <img src="img/tra/plant.png" id="moutains_behind">
  <?php foreach ($query_product as $data):?><h5 id="text"><?php endforeach;?>ผลิตภัณฑ์<?=$data['type_Pname']?></h5>
  <a href="#ho" id ="btn">ผลิตภัณฑ์</a>
  <img src="img/pro/222222.png" id="moutains_front">
</section>


<?php foreach ($query_product as $data):?>
  <div class="ho" id="ho">

   <ul class="nav justify-content-center mb-3 mt-4">



   <div class="row">
    
    
      <center>
      <div class="card mb-3" style="width: 600px; max-width: 1000px; height: 200px;  background: linear-gradient(#95b2ff,#14566b);">
  <div class="row g-0">

    <div class="col-md-4 text-center">
      <img src="member/upload/product/<?=$data['product_image']?>" class="img-fluid rounded-start" style="max-width: 100%; max-height: 100%; height: 200px; width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color:#fff"><?=$data['product_name']?>  
    </h5>
        <!-- <p class="card-text">รายละเอียด:<?=$data['product_details']?></p> -->

        <br>
        <a href="product_detail.php?id=<?=$data['product_id']?>" class="btn btn-dark">ดูรายละเอียด</a>
      </div>
    </div>
  </div>
</div>
</div></div>
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



