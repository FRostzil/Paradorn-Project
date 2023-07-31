<?php include('connect/conect.php'); 

$sql = "SELECT * FROM tb_travelling_type";
$query_travelling_type = mysqli_query($conn,$sql);

$sql = "SELECT *,tb_travelling.travelling_name,tb_travelling_type.travelling_type_name AS type_name FROM tb_travelling LEFT JOIN 
  tb_travelling_type ON tb_travelling.type_travelling_id = tb_travelling_type.travelling_type_id";



$query_travelling = mysqli_query($conn,$sql);      
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

  $sql_view = "UPDATE tb_travelling SET view = view+1 WHERE travelling_id ='$id'";
  $query_view = mysqli_query($conn,$sql_view);


    /* $sql_travelling = $sql." WHERE travelling.id != '$id' ORDER BY travelling.id DESC LIMIT 3"; */

    $sql .= " WHERE travelling_id = '$id'";
}


$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($query);
?>

<?php
$sql = "SELECT * FROM tb_travelling_type";
$query_travelling_type = mysqli_query($conn,$sql);

$sql = "SELECT *,product.product_name,tb_travelling_type.travelling_type_name AS type_Pname FROM product LEFT JOIN 
 tb_travelling_type ON product.type_product_id = tb_travelling_type.travelling_type_id";
if(isset($_GET['type_product_id']) && !empty($_GET['type_product_id'])){
  $sql .= " WHERE type_product_id = '".$_GET['type_product_id']."'";
}
$query_product = mysqli_query($conn,$sql);

?>



<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="travellingdetail.css"> 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
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
        height: 400px;
        width: 600px;
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

<h1 class="py-5 text-center bg-secondary bg-gradient text-white">รายละเอียดสถานที่ท่องเที่ยว</h1>


<div id="content-wrapper">
		

		<div class="column">
			<img id=featured src="member/upload/Travelling/<?=$result['travelling_img']?>" style="max-width: 500px; max-height: 400px; width: 100%;">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="member/upload/Travelling/<?=$result['travelling_img']?>" style="cursor: cell; max-width: 100px; max-height: 100px;>
          <?php 
          $sql = "SELECT * FROM travelling_gallery WHERE travelling_gallery_id = '$id'";
          $query = mysqli_query($conn,$sql);
          ?>
          <?php foreach ($query as $key => $value):?>
            
					<img class="thumbnail " src="member/upload/Travelling/<?=$value['travelling_gallery_image']?>" style="cursor: cell; max-width: 100px; max-height: 100px;">

				<?php endforeach;?></div>

				<img id="slideRight" class="arrow" src="images/arrow-right.png">
			</div>
		</div>

		<div class="column">
			<h1><?=$result['travelling_name']?></h1>
			<hr >จำนวนการเข้าชม: <?=nl2br($result['view'])?> ครั้ง 
			<h3>ค่าใช้จ่าย: <?=nl2br($result['travelling_price'])?></h3>

			<p style="font-size: 17px;">รายละเอียด:</b><?=nl2br($result['travelling_Details'])?></p>
      <p style="font-size: 17px;" class="text-break"><b>ที่อยู่:</b><?=nl2br($result['travelling_Address'])?></p>      
      <p style="font-size: 17px;" class="text-break"><b>เบอร์ติดต่อ: <?=nl2br($result['travelling_phone'])?></b></p>     
      <p style="font-size: 17px;" class="text-break"><b>เวลาเปิด - ปิด: <?=nl2br($result['travelling_open'])?></b></p>

		
		</div>

	</div>

	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>


  <div class="col-6 col-sm-4"> 
  </div>
  </div></div>
  
  <center><h2>แผนที่</h2><div id="map"></div></center>
  <script>
    function initMap() {
	var mapOptions = {
	  center: {lat: <?=$result['LAT']?>, lng: <?=$result['LNG']?>},
	  zoom: 15,
	}
		
	var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
	
	var marker = new google.maps.Marker({
	   position: new google.maps.LatLng(<?=$result['LAT']?>, <?=$result['LNG']?>),
	   map: maps,
	   title: '<?=$result['travelling_name']?>'
   
	});
}
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVkM11qVNQAL05b7yMfkvv_4DYCj3_i0=&callback=initMap" async defer></script><br>
    </div>
</div>
 



<div class="border">

        
<?php
include('connect/conect.php');
$sql = "SELECT *,tb_travelling.travelling_name,tb_travelling_type.travelling_type_name AS type_name FROM tb_travelling LEFT JOIN 
  tb_travelling_type ON tb_travelling.type_travelling_id = tb_travelling_type.travelling_type_id";
if(isset($_GET['LAT']) && !empty($_GET['LAT'])){
  $sql .= " WHERE LAT = '".$_GET['LAT']."'";
}elseif(isset($_GET['LNG']) && !empty($_GET['LNG'])){
  $sql .= " WHERE LNG = '".$_GET['LNG']."'";
}
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$startLat = $result['LAT'];
$startLng = $result['LNG'];

$sql = "SELECT *, product.product_name, tb_travelling_type.travelling_type_name AS type_Pname 
        FROM product 
        LEFT JOIN tb_travelling_type ON product.type_product_id = tb_travelling_type.travelling_type_id";

if (isset($_GET['type_product_id']) && !empty($_GET['type_product_id'])) {
    $sql .= " WHERE type_product_id = '" . $_GET['type_product_id'] . "'";
}

$query_test = mysqli_query($conn, $sql);

function haversineDistanceproduct($startLat, $startLng, $locationLat, $locationLng)
{
    $earthRadius = 6371;

    $deltaLat = deg2rad($locationLat - $startLat);
    $deltaLng = deg2rad($locationLng - $startLng);

    $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos(deg2rad($startLat)) * cos(deg2rad($locationLat)) * sin($deltaLng / 2) * sin($deltaLng / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earthRadius * $c;

    return $distance;
}

$minDistance = INF;
$nearestLocation = null;

if (!empty($query_test)) {
    while ($row = mysqli_fetch_assoc($query_test)) {
        if (!empty($row["PLAT"]) && !empty($row["PLNG"])) {
            $locationLat = floatval($row["PLAT"]);
            $locationLng = floatval($row["PLNG"]);

            $distance = haversineDistanceproduct($startLat, $startLng, $locationLat, $locationLng);

            if ($distance < $minDistance) {
                $minDistance = $distance;
                $nearestLocation = $row;
            }
        }
    }
}

// ตรวจสอบว่า $nearestLocation ไม่เป็น null ก่อนที่จะเข้าถึงข้อมูล
if ($nearestLocation !== null) {
    ?>
    <center><br><?php foreach ($query_product as $data) : ?><?php endforeach; ?><h2>ผลิตภัณฑ์ใกล้เคียง<?= $nearestLocation['travelling_type_name'] ?></h2></center>
    <div class="row">
        <center>
            <div class="col-12 col-lg-6 p-4">
                <div class="card p-4">
                    <center>
                        <img src="member/upload/product/<?= $nearestLocation['product_image'] ?>" class="card-img-top" style="width: 200px; max-width: 1000px; height: 200px;  background: linear-gradient(#95b2ff,#14566b);">
                        <div class="card-body">
                            <h5 class="card-title"><?= $nearestLocation['product_name'] ?></h5>
                            <?php if (!empty($nearestLocation['PLAT']) && !empty($nearestLocation['PLNG'])) : ?>
                                <h5 class="card-title">ห่างจาก <?= $nearestLocation['travelling_type_name'] ?> <?= number_format($minDistance, 2) ?> กิโลเมตร</h5>
                            <?php else : ?>
                                <h5 class="card-title">ไม่มีข้อมูลระยะทาง</h5>
                            <?php endif; ?>
                            <a href="product_detail.php?id=<?= $nearestLocation['product_id'] ?>" class="btn btn-dark">รายละเอียด</a>
                        </div>
                    </center>
                </div>
            </div>
        </center>
    </div><?php
} else {
    // กรณีไม่มีข้อมูลสถานที่ใกล้เคียงที่คำนวณได้
    echo "<script>";
    echo "Swal.fire({
      icon: 'error',
      title: 'ไม่มีข้อมูลผลิตภัณฑ์ที่ใกล้เคียง',
      text: 'เนื่องจากไม่มีละติจูต ลองติจูต',
    })";
    echo "</script>";
  }
?>


<div class="border">

<?php
include('connect/conect.php');

$sql = "SELECT *, tb_travelling.travelling_name, tb_travelling_type.travelling_type_name AS type_name 
        FROM tb_travelling 
        LEFT JOIN tb_travelling_type ON tb_travelling.type_travelling_id = tb_travelling_type.travelling_type_id";

if(isset($_GET['LAT']) && !empty($_GET['LAT'])){
  $sql .= " WHERE LAT = '".$_GET['LAT']."'";
}elseif(isset($_GET['LNG']) && !empty($_GET['LNG'])){
  $sql .= " WHERE LNG = '".$_GET['LNG']."'";
}

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$startLat = $result['LAT'];
$startLng = $result['LNG'];

$sql = "SELECT *, hotel.hotel_name, tb_travelling_type.travelling_type_name AS type_Hname 
        FROM hotel
        LEFT JOIN tb_travelling_type ON hotel.type_hotel_id = tb_travelling_type.travelling_type_id";

if(isset($_GET['hotel_name']) && !empty($_GET['hotel_name'])){
  $sql .= " WHERE hotel_name = '".$_GET['hotel_name']."'";
}

if(isset($_GET['type_hotel_id']) && !empty($_GET['type_hotel_id'])){
  $sql .= " WHERE type_hotel_id = '".$_GET['type_hotel_id']."'";
}

$query_hotel = mysqli_query($conn, $sql);

function haversineDistancehotel($startLat, $startLng, $locationLat, $locationLng)
{
    $earthRadius = 6371;

    $deltaLat = deg2rad($locationLat - $startLat);
    $deltaLng = deg2rad($locationLng - $startLng);

    $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos(deg2rad($startLat)) * cos(deg2rad($locationLat)) * sin($deltaLng / 2) * sin($deltaLng / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earthRadius * $c;

    return $distance;
}

$minDistance = INF;
$nearestLocation = null;

while ($row = mysqli_fetch_assoc($query_hotel)) {
    $locationLat = floatval($row["HLAT"]);
    $locationLng = floatval($row["HLNG"]);

    $distance = haversineDistancehotel($startLat, $startLng, $locationLat, $locationLng);

    if ($distance < $minDistance) {
        $minDistance = $distance;
        $nearestLocation = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nearest Restaurant</title>
</head>
<body>
    <?php if ($nearestLocation): ?>
        <h2><center>ที่พัก <?= $result['travelling_name'] ?></h2>
       <div class="row"> <center>
            <div class="col-12 col-lg-6 p-4">
                <div class="card p-4">
                  <center>  <img src="member/upload/hotel/<?= $nearestLocation['hotel_image'] ?>" class="img-fluid rounded-start" style="width: 200px; max-width: 50%; max-height: 50%; height: 200px; width:100%;"> </center>
                    <div class="card-body">
                        <h5 class="card-title"><?= $nearestLocation['hotel_name'] ?></h5>
                        <?php if ($nearestLocation['HLAT'] === '' || $nearestLocation['HLNG'] === ''): ?>
                        <h5 class="card-title">ห่างจาก <?= $result['travelling_name'] ?> 0 กิโลเมตร เนื่องจากไม่มีข้อมูล ละติจูต ลองติจูต</h5>
                          <?php else: ?>
                    <h5 class="card-title">ห่างจาก <?= $result['travelling_name'] ?> <?= number_format($minDistance, 2) ?> กิโลเมตร</h5>
                      <?php endif; ?>
                        <a href="hotel_detail.php?id=<?= $nearestLocation['hotel_id'] ?>" class="btn btn-dark">รายละเอียด</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>ไม่พบสถานที่ใกล้ที่สุด</p>
    <?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>












<div class="border">

<?php
include('connect/conect.php');

$sql = "SELECT *, tb_travelling.travelling_name, tb_travelling_type.travelling_type_name AS type_name 
        FROM tb_travelling 
        LEFT JOIN tb_travelling_type ON tb_travelling.type_travelling_id = tb_travelling_type.travelling_type_id";

if(isset($_GET['LAT']) && !empty($_GET['LAT'])){
  $sql .= " WHERE LAT = '".$_GET['LAT']."'";
}elseif(isset($_GET['LNG']) && !empty($_GET['LNG'])){
  $sql .= " WHERE LNG = '".$_GET['LNG']."'";
}

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$startLat = $result['LAT'];
$startLng = $result['LNG'];

$sql = "SELECT *, restuarant.restuarant_name, tb_travelling_type.travelling_type_name AS type_Rname 
        FROM restuarant 
        LEFT JOIN tb_travelling_type ON restuarant.type_restuarant_id = tb_travelling_type.travelling_type_id";

if(isset($_GET['restuarant_name']) && !empty($_GET['restuarant_name'])){
  $sql .= " WHERE restuarant_name = '".$_GET['restuarant_name']."'";
}

if(isset($_GET['type_restuarant_id']) && !empty($_GET['type_restuarant_id'])){
  $sql .= " WHERE type_restuarant_id = '".$_GET['type_restuarant_id']."'";
}

$query_res = mysqli_query($conn, $sql);

function haversineDistanceres($startLat, $startLng, $locationLat, $locationLng)
{
    $earthRadius = 6371;

    $deltaLat = deg2rad($locationLat - $startLat);
    $deltaLng = deg2rad($locationLng - $startLng);

    $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos(deg2rad($startLat)) * cos(deg2rad($locationLat)) * sin($deltaLng / 2) * sin($deltaLng / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earthRadius * $c;

    return $distance;
}

$minDistance = INF;
$nearestLocation = null;

while ($row = mysqli_fetch_assoc($query_res)) {
    $locationLat = floatval($row["RLAT"]);
    $locationLng = floatval($row["RLNG"]);

    $distance = haversineDistanceres($startLat, $startLng, $locationLat, $locationLng);

    if ($distance < $minDistance) {
        $minDistance = $distance;
        $nearestLocation = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nearest Restaurant</title>
</head>
<body>
    <?php if ($nearestLocation): ?>
      <center><h2>ร้านอาหารใกล้เคียง <?= $result['travelling_name'] ?></h2>
       <div class="row"> <center>
            <div class="col-12 col-lg-6 p-4">
                <div class="card p-4">
                 <center>   <img src="member/upload/restaurant/<?= $nearestLocation['restuarant_image'] ?>" class="img-fluid rounded-start" style="width: 200px; max-width: 50%; max-height: 50%; height: 200px; width:100%;">
    </center>   <div class="card-body">
                        <h5 class="card-title"><?= $nearestLocation['restuarant_name'] ?></h5>
                        <?php if ($nearestLocation['RLAT'] === '' || $nearestLocation['RLNG'] === ''): ?>
                        <h5 class="card-title">ห่างจาก <?= $result['travelling_name'] ?> 0 กิโลเมตร เนื่องจากไม่มีข้อมูล ลิติจูต ลองติจูต</h5>
                          <?php else: ?>
                    <h5 class="card-title">ห่างจาก <?= $result['travelling_name'] ?> <?= number_format($minDistance, 2) ?> กิโลเมตร</h5>
                      <?php endif; ?>
                        <a href="restuarant_detail.php?id=<?= $nearestLocation['restuarant_id'] ?>" class="btn btn-dark">รายละเอียด</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>ไม่พบสถานที่ใกล้ที่สุด</p>
    <?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>


    <script type="text/javascript">
        function preview(src){
            //console.log(src)
            document.getElementById('preview').src = src;
        }
        </script>