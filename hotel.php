<?php include('connect/conect.php'); 

$sql = "SELECT * FROM hotel";
if(isset($_GET['type_hotel_id']) && !empty($_GET['type_hotel_id'])){
  $sql .= " WHERE type_hotel_id = '".$_GET['type_hotel_id']."'";
}
$query_hotel = mysqli_query($conn,$sql);
?>

<html>
<head>  
    <link rel="stylesheet" type="text/css" href="hotel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@200&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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
    
<?php include ('navbar.php');?>
<div class="container"></div>

<section>
  <img src="img/stars.png" id="stars">
  <img src="img/moon.png" id="moon">
  <img src="img/tra/plant.png" id="moutains_behind">
  <?php foreach ($query_hotel as $data):?><h2 id="text"><?php endforeach;?>ที่พัก<?=$data['type_Hname']?></h2>
  <a href="#ho" id ="btn">ที่พัก</a>
  <img src="img/hotel/2222.png" id="moutains_front">
</section>

<?php foreach ($query_hotel as $data):?>
  <div class="ho" id="ho">
   <!-- <h3 class="text-center mb-2-mt-4 mx-2"><font color="#fff">ที่พัก<?=$data['type_Hname']?></font></h3> -->
   <ul class="nav justify-content-center mb-3 mt-4">



   <div class="row" id="row">
    
    
   <center>
<div class="card mb-3" style="width: 600px; max-width: 1000px; height: 200px;  background: linear-gradient(#820000,#A84448);">
  <div class="row g-0">

    <div class="col-md-4 text-center">
      <img src="member/upload/hotel/<?=$data['hotel_image']?>" class="img-fluid rounded-start" style="max-width: 100%; max-height: 100%; height: 200px; width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title" style="color:#fff"><?=$data['hotel_name']?></h3>  
    
        <!-- <p class="card-text" id="myInput">รายละเอียด:<?=$data['hotel_details']?></p> -->
     <br>
        <a href="hotel_detail.php?id=<?=$data['hotel_id']?>" class="btn btn-dark">ดูรายละเอียด</a>
      </div>
    </div>
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



