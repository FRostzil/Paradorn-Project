<?php include('connect/conect.php'); 

$sql = "SELECT * FROM tb_travelling_type";
$query_travelling_type = mysqli_query($conn,$sql);

if(isset($_GET['page'])){
  $page = $_GET['page'];

}else{
  $page = 1;
}

  $record_show = 3;
  $offset = ($page -1) * $record_show;

  $sql_total = "SELECT * FROM restuarant";
  $query_total = mysqli_query($conn,$sql_total);
  $row_total = mysqli_num_rows($query_total);

  $page_total = ceil($row_total/$record_show);




  $sql = "SELECT *,restuarant.restuarant_name,tb_travelling_type.travelling_type_name AS type_Rname FROM restuarant LEFT JOIN 
  tb_travelling_type ON restuarant.type_restuarant_id = tb_travelling_type.travelling_type_id";
if(isset($_GET['type_restuarant_id']) && !empty($_GET['type_restuarant_id'])){
  $sql .= " WHERE type_restuarant_id = '".$_GET['type_restuarant_id']."'";
}
$sql .= " LIMIT $offset,$record_show";

$query_restuarant = mysqli_query($conn,$sql);

?>

<html>
<head>  
    <link rel="stylesheet" type="text/css" href="restuarant.css">
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
  <?php foreach ($query_restuarant as $data):?><h5 id="text"><?php endforeach;?>ร้านอาหาร<?=$data['type_Rname']?></h5>
  <a href="#ho" id ="btn">ร้านอาหาร</a>
  <img src="img/res/res2.png" id="moutains_front">
</section>


<?php foreach ($query_restuarant as $data):?>
  <div class="ho" id="ho">

   <ul class="nav justify-content-center mb-3 mt-4">



   <div class="row" id="row">
    
    
      <center>
<div class="card mb-3" style="width: 700px; max-width: 1000px; height: 220px; background: linear-gradient(#46244C,#712B75);">
  <div class="row g-0">

    <div class="col-md-4 text-center">
      <img src="member/upload/restaurant/<?=$data['restuarant_image']?>" class="img-fluid rounded-start" style="max-width: 100%; max-height: 220px; height: 220px; width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title" style="color:#fff"><?=$data['restuarant_name']?></h3>  
    
        <!-- <p class="card-text">เทศบาล:<?=$data['type_Rname']?></p>  -->
        <!-- <p class="card-text" id="myInput">รายละเอียด:<?=$data['restuarant_detail']?></p> -->
     <br>
        <a href="restuarant_detail.php?id=<?=$data['restuarant_id']?>" class="btn btn-dark">รายละเอียด</a>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<?php endforeach;?> 
<!-- <center>
  <div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="?page=1" tabindex="-1" aria-disabled="true">หน้าแรกสุด</a>
  </li>
    <li class="page-item <?=$page > 1 ? '' : 'disabled' ?>">
    <a class="page-link" href="?page=<?=$page-1?>" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
    </a>
    <?php for($i=1; $i <= $page_total ; $i++):?>
      <?php if($page <=2):?>
      <?php if($i <= 5):?>
        <li class="page-item <?=$page == $i ? 'active' : ''?>"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
      <?php endif;?>
    <?php elseif ($page > 2):?>
      <?php if($i <= $page+2 && $i >= $page-2):?>
        <li class="page-item <?=$page == $i ? 'active' : ''?>"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
    <?php endif;?>  
      <?php endif;?>
   
  <?php endfor;?>
    <li class="page-item <?=$page < $page_total ? '' : 'disabled'?>">
    <a class="page-link" href="?page=<?=$page+1?>" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
  </a>
  </li>
    <li class="page-item">
        <a class="page-link" href="?page=<?=$page_total?>" aria-disabled="true">หน้าสุดท้าย</a>
</li>
  </ul>
</nav>
</center>
</div> -->
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



