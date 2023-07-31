<?php include('connect/conect.php'); 

$sql = "SELECT *,product.product_name,tb_travelling_type.travelling_type_name AS type_Pname FROM product 
        LEFT JOIN tb_travelling_type ON product.type_product_id = tb_travelling_type.travelling_type_id";
$query_product = mysqli_query($conn,$sql);        
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];


    $sql_view = "UPDATE product SET view = view+1 WHERE product_id ='$id'";
    $query_view = mysqli_query($conn,$sql_view);

    $sql .= " WHERE product_id = '$id'";
}
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($query);
?>

<html>
<head>  
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<style>
           #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 700px;
        width: 900px;
      }
    
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
    
<?php include ('navbar.php'); ?>


<h1 class="py-5 text-center bg-secondary bg-gradient text-white">รายละเอียดผลิตภัณฑ์</h1>
<div class="container">
<div class="row">
  <div class="col-7 col-lg-6 px-4 pb-4 mt-4"><img src="member/upload/product/<?=$result['product_image']?>" id="preview" class="border img-fluid img-thumbnail" width="100%" style="max-width: 600px; max-height: 600px; height: 100%; width:100%;"></div>
  <div class="col-6 mt-4"> <h3><?=$result['product_name']?></h3>
    <p style="font-size: 19px;" class="text-break"><b>รายละเอียด:</b><?=nl2br($result['product_details'])?></p>
    <p style="font-size: 19px;" class="text-break"><b>ที่อยู่: </b><?=nl2br($result['product_address'])?></p>
    <p style="font-size: 19px;" class="text-break"><b>เบอร์ติดต่อ: </b><?=nl2br($result['product_phone'])?></p>
    <p style="font-size: 19px;" class="text-break"><b>จำนวนการเข้าชม: <?=nl2br($result['view'])?> ครั้ง </b></p>

    </div></div>

  <!-- Force next columns to break to new line at md breakpoint and up -->
  <div class="w-100 d-none d-md-block"></div>

  <div class="col-6 col-sm-4"><?php 
$sql = "SELECT * FROM product_gallery WHERE product_gallery_id = '$id'";
$query = mysqli_query($conn,$sql);
?>
<div class="d-flex overflow-auto mt-2 p-7">
<div class="col-4 me-3 border-4">
<img src="member/upload/product/<?=$result['product_image']?>" class="border img-fluid img-thumbnail" onclick="preview(this.src)" style="cursor: cell; max-width: 150px; max-height: 150px; height: 100%; width:100%;">
</div>

<?php foreach ($query as $key => $value):?>
    <div class="col-4 me-3 border-4 bg-secondary bg-gradient">
    <img src="member/upload/product/<?=$value['product_gallery_image']?>" class="border img-fluid img-thumbnail" onclick="preview(this.src)" style="cursor: cell; max-width: 150px; max-height: 150px; height: 100%; width:100%;">
</div>
<?php endforeach;?></div>
  <div class="col-6 col-sm-4"> 
  </div>
  </div></div>



  
  
  <center><h2>แผนที่</h2><div id="map"></div></center>
  <script>
    function initMap() {
	var mapOptions = {
	  center: {lat: <?=$result['PLAT']?>, lng: <?=$result['PLNG']?>},
	  zoom: 15,
	}
		
	var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
	
	var marker = new google.maps.Marker({
	   position: new google.maps.LatLng(<?=$result['PLAT']?>, <?=$result['PLNG']?>),
	   map: maps,
	   title: '<?=$result['product_name']?>'
   
	});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVkM11qVNQAL05b7yMfkvv_4DYCj3_i0=&callback=initMap" async defer></script>
    </div>
</div>
<br>



    <script type="text/javascript">
        function preview(src){
            //console.log(src)
            document.getElementById('preview').src = src;
        }
        </script>

