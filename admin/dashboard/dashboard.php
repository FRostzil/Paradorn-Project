<?php 
	$sql_view = "SELECT SUM(view) as all_view FROM tb_travelling";
	$query_view = mysqli_query($conn,$sql_view);
	$result_view = mysqli_fetch_assoc($query_view);
?>

<?php 
	$sql_product_view = "SELECT SUM(view) as all_view FROM product";
	$query_product_view = mysqli_query($conn,$sql_product_view);
	$result_product_view = mysqli_fetch_assoc($query_product_view);
?>

<?php 
	$sql_hotel_view = "SELECT SUM(view) as all_view FROM hotel";
	$query_hotel_view = mysqli_query($conn,$sql_hotel_view);
	$result_hotel_view = mysqli_fetch_assoc($query_hotel_view);
?>

<?php 
	$sql_restuarant_view = "SELECT SUM(view) as all_view FROM restuarant";
	$query_restuarant_view = mysqli_query($conn,$sql_restuarant_view);
	$result_restuarant_view = mysqli_fetch_assoc($query_restuarant_view);
?>




<h1 class="app-page-title">หน้าหลัก</h1>
<hr class="mb-6">
<div class="row g-6 settings-section">

	<div class="app-card alert alert-dismissible shadow-sm mb-0 border-left-decoration" role="alert">
			
		<div class="inner">
			<div class="app-card-body p-3 p-lf-4">
				<h3>ยินดีต้อนรับ <?=$_SESSION['adminlogin']?></h3>
				<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>

			    <div class="row g-4 mb-4">
				    <div class="col-6 col-lg-6">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">ยอดการเข้าชมผลิตภัณฑ์ทั้งหมด</h4>
							    <div class="stats-figure"><?=$result_product_view['all_view']?></div>
							    <div class="stats-meta text-success">ดู</div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    
				    <div class="col-6 col-lg-6">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">ยอดการเข้าชมห้องพักทั้งหมด</h4>
							    <div class="stats-figure"><?=$result_hotel_view['all_view']?></div>
							    <div class="stats-meta text-success">ดู</div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-6 col-lg-6">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">ยอดการเข้าชมร้านอาหารทั้งหมด</h4>
							    <div class="stats-figure"><?=$result_restuarant_view['all_view']?></div>
							    <div class="stats-meta text-success">ดู</div>
						    </div><!--//app-card-body-->											
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-6 col-lg-6">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">ยอดการเข้าชมสถานที่ท่องเที่ยวทั้งหมด</h4>
							    <div class="stats-figure"><?=$result_view['all_view']?></div>
							    <div class="stats-meta text-success">ดู</div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="#"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->


		                <div class="app-card app-card-settings shadow-sm p-4" >
						    <div class="app-card-body">



				</div>
				</div>
    </div>   