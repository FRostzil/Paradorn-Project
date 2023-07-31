<?php

				if(isset($_SESSION['memberlogin'])){
                    
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

				$travelling_type_id = $_POST['travelling_type_id'];
				$restuarant_name =	$_POST['restuarant_name'];	
				$restuarant_detail = $_POST['restuarant_detail'];
				$restuarant_address = $_POST['restuarant_address'];
				$restuarant_fb = $_POST['restuarant_fb'];
				$restuarant_phone = $_POST['restuarant_phone'];
				$RLAT = $_POST['RLAT'];
				$RLNG = $_POST['RLNG'];
}


					if(isset($_POST) && !empty($_POST)){ 
					//	echo '<pre>';	
					//	print_r($_POST);
						//print_r($_FILES);
					//	echo '/<pre>';	
				//		exit();
				
				$travelling_type_id = $_POST['travelling_type_id'];
				$restuarant_name =	$_POST['restuarant_name'];	
				$restuarant_detail = $_POST['restuarant_detail'];
				$restuarant_address = $_POST['restuarant_address'];
				$restuarant_fb = $_POST['restuarant_fb'];
				$restuarant_phone = $_POST['restuarant_phone'];
				$RLAT = $_POST['RLAT'];
				$RLNG = $_POST['RLNG'];		

				
				if(!empty($restuarant_name)){
					$sql_check = "SELECT * FROM restuarant WHERE restuarant_name = '$restuarant_name'";
					$query_check = mysqli_query($conn,$sql_check);
					$row_check = mysqli_num_rows($query_check);
					if($row_check > 0){
						$alert = '<script type="text/javascript">';
						$alert .= 'alert("มีร้านอาหารนี้อยู่ในระบบแล้ว");';
						$alert .= 'window.location.href = "?page=restuarant&function=add";';
						$alert .= '</script>';
						echo $alert;
						exit();
					}else{
						if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
							$extention = array("jpeg","jpg","png");
							$target = '../member/upload/restaurant/';
							$filename = $_FILES['image']['name'];
							$filetmp = $_FILES['image']['tmp_name'];
							$ext =pathinfo($filename,PATHINFO_EXTENSION);
							if(in_array($ext,$extention)){
								if(!file_exists($target.$filename)) {		
									if(move_uploaded_file($filetmp,$target.$filename)){
										$filename = $filename;
									}else{
										$alert = '<script type="text/javascript">';
										$alert .= 'alert("เพิ่มไฟล์เข้า folder ไม่สำเร็จ");';
										$alert .= 'window.location.href = "?page='.$_GET['page'].'";';
										$alert .= '</script>';
									echo $alert;
									exit();
									}
								}else{
									$newfilename = time().$filename;
									if(move_uploaded_file($filetmp,$target.$newfilename)){
									$filename = $newfilename;
										}else{	
										$alert = '<script type="text/javascript">';
										$alert .= 'alert("เพิ่มไฟล์gเข้า folder ไม่สำเร็จ");';
										$alert .= 'window.location.href = "?page=restuarant&function=add";';
										$alert .= '</script>';
									echo $alert;
									exit();
									}
								}
							}else{
								echo "<script>";
			echo "Swal.fire({
				icon: 'error',
				title: 'ประเภทไฟล์ไม่รองรับ',
				text: 'กรุณาอัปโหลดเฉพาะไฟล์ png jpeg jpeg',
				showConfirmButton: false,
			}).then((result) => {
				if(result){
					window.location.href = '?page=restaurantfunction=add';
				}
			  })";
			echo "</script>";
								exit();
				}
						}else{
							
							$filename = '';
							
						}
							
								/* echo $filename;
								exit(); */
			
								$sql = "INSERT INTO restuarant (type_restuarant_id,restuarant_name,restuarant_detail,restuarant_phone,restuarant_address,restuarant_fb,RLAT,RLNG,restuarant_image,restuarant_username) 
								VALUES('$travelling_type_id','$restuarant_name','$restuarant_detail','$restuarant_phone','$restuarant_address','$restuarant_fb','$RLAT','$RLNG','$filename','{$_SESSION["memberlogin"]}')";

						   if (mysqli_query($conn, $sql)) {
							//echo "บันทึกข้อมูลสำเร็จ";
							echo "<script>";
					echo "Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'บันทึกข้อมูลสำเร็จ',
						showConfirmButton: false,
					}).then((result) => {
						if(result){
							window.location.href = '?page=restuarant';
						}
					  })";
					echo "</script>";
							exit();							
						  } else {
							echo "บันทึกข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  
						  mysqli_close($conn);
							}
						}}

							$sql = "SELECT * FROM tb_travelling_type";
							$query = mysqli_query($conn,$sql);



		?>
<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">เพิ่มข้อมูลร้านอาหาร</h1>

			
</div>
	<div class="col-auto">
		<a href="?page=<?=$_GET['page']?>" class="btn btn-secondary">ย้อนกลับ</a>
</div>
	</div>
			<hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							    <form action="" method="post" enctype="multipart/form-data">
								<div class="mb-3">
									    <label class="form-label"> รูปภาพ </label>
									    <div class="mb-3"> 
											<img id="preview" name="preview" class="rounded" width="150" height="150">
										</div>
										<button onclick="return triggerFile();" class="btn btn-success text-white">เลือกรูปภาพ</button>
										<input type="file" name="image" id="image" style="display:none;" required>
								
									</div>


									<div class="mb-2 col-lg-6">
									    <label class="form-label">เทศบาลของร้านอาหาร</label>
									   <select name ="travelling_type_id" class="form-control" style="height: inset !important;" required>
										<option value="" selected disabled required>เทศบาลของร้านอาหาร</option>
										<?php foreach ($query as $data):?>
											<option value="<?=$data['travelling_type_id']?>"><?=$data['travelling_type_name']?></option>
										<?php endforeach;?>
										</select>
									</div>

								    <div class="mb-2 col-lg-6">
									    <label class="form-label">ชื่อร้านอาหาร</label>
									    <input type="text" class="form-control" name="restuarant_name" placeholder="ชื่ออาหาร :" autocomplete="off" required>
									</div>
									<div class="mb-3 col-lg-6">
									    <label class="form-label">รายละเอียดร้านอาหาร</label>
										<textarea name="restuarant_detail" class="form-control" style="height:100px" autocomplete="off" required></textarea>
									</div>
								    
									<!-- <div class="mb-3 col-lg-6">
									    <label class="form-label">ราคาอาหาร</label>
									    <input type="text" class="form-control" name="restuarant_price" placeholder="ราคาอาหาร :"
										autocomplete="off" required>
									</div> -->

									<div class="mb-3 col-lg-6">
									    <label class="form-label">เบอร์ติดต่อ</label>
									    <input type="text" class="form-control" name="restuarant_phone" placeholder="เบอร์ติดต่อ:"
										autocomplete="off" required></div>		
									
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ที่อยู่ร้านอาหาร</label>
									    <input type="text" class="form-control" name="restuarant_address" placeholder="ที่อยู่อาหาร :"
										autocomplete="off" required>
									</div>

									<div class="mb-3 col-lg-6">
									    <label class="form-label">ลิงค์แฟนเพจเฟซบุ๊ก</label>
									    <input type="text" class="form-control" name="restuarant_fb" placeholder="ลิงค์เฟซบุ๊ค :"
										autocomplete="off">
									</div>			


									<div class="mb-3 col-lg-6">
									    <label class="form-label">ละติจูต</label>
									    <input type="text" class="form-control" name="RLAT" placeholder="ที่อยู่อาหาร :"
										autocomplete="off" required>
										</div>

										<div class="mb-3 col-lg-6">
									    <label class="form-label">ลองติจูต</label>
									    <input type="text" class="form-control" name="RLNG" placeholder="ที่อยู่อาหาร :"
										autocomplete="off" required>
										</div>		


									<button type="submit" class="btn app-btn-primary">บันทึก</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->

				<script type="text/javascript">
					function triggerFile(){
						
						$("#image").trigger("click");
						return false;
					}
					function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

		$("#image").change(function() {
						readURL(this);
					});
					</script>
