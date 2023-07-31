<?php

				if(isset($_SESSION['adminlogin'])){
                    
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

				$travelling_type_id = $_POST['travelling_type_id'];
				$travelling_name =	$_POST['travelling_name'];	
				$travelling_Details = $_POST['travelling_Details'];
				$travelling_Address = $_POST['travelling_Address'];
				$travelling_phone = $_POST['travelling_phone'];
				$travelling_open = $_POST['travelling_open'];
				$travelling_price = $_POST['travelling_price'];
				$LAT = $_POST['LAT'];
				$LNG = $_POST['LNG'];
}


					if(isset($_POST) && !empty($_POST)){ 
					//	echo '<pre>';	
					//	print_r($_POST);
						//print_r($_FILES);
					//	echo '/<pre>';	
				//		exit();
				$travelling_type_id = $_POST['travelling_type_id'];
				$travelling_name =	$_POST['travelling_name'];	
				$travelling_Details = $_POST['travelling_Details'];
				$travelling_Address = $_POST['travelling_Address'];
				$travelling_phone = $_POST['travelling_phone'];
				$travelling_price = $_POST['travelling_price'];
				$travelling_open = $_POST['travelling_open'];
				$LAT = $_POST['LAT'];
				$LNG = $_POST['LNG'];

			if(!empty($travelling_name)){
				$sql_check = "SELECT * FROM tb_travelling WHERE travelling_name = '$travelling_name'";
				$query_check = mysqli_query($conn,$sql_check);
				$row_check = mysqli_num_rows($query_check);
				if($row_check > 0){
					$alert = '<script type="text/javascript">';
					$alert .= 'alert("มีที่พักนี้อยู่ในระบบแล้ว");';
					$alert .= 'window.location.href = "?page=travel&function=add";';
					$alert .= '</script>';
					echo $alert;
					exit();
				}else{
						if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
							$extention = array("jpeg","jpg","png");
							$target = '../member/upload/Travelling/';
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
										$alert .= 'window.location.href = "?page=travel&function=add";';
										$alert .= '</script>';
									echo $alert;
									exit();
									}
								}
							}else{
								$alert = '<script type="text/javascript">';
								$alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
								$alert .= 'window.location.href = "?page=travel&function=add";';
								$alert .= '</script>';
								exit();
					echo $alert;
				}
						}else{
							
							$filename = '';
							
						}
							
								/* echo $filename;
								exit(); */
			
								$sql = "INSERT INTO tb_travelling (type_travelling_id,travelling_name,travelling_Details,travelling_Address,travelling_phone,travelling_open,travelling_price,LAT,LNG,travelling_img) 
								VALUES('$travelling_type_id','$travelling_name','$travelling_Details','$travelling_Address','$travelling_phone','$travelling_open','$travelling_price','$LAT','$LNG','$filename')";

						   if (mysqli_query($conn, $sql)) {
							//echo "บันทึกข้อมูลสำเร็จ";
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("บันทึกข้อมูลสำเร็จ");';
							$alert .= 'window.location.href = "?page=travel";';
							$alert .= '</script>';
							echo $alert;
							exit();
						  } else {
							echo "บันทึกข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  
						  mysqli_close($conn);
							}

						}
					}
							$sql = "SELECT * FROM tb_travelling_type";
							$query = mysqli_query($conn,$sql);



		?>
<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">เพิ่มสถานที่ท่องเที่ยว</h1>

			
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
									    <label class="form-label">เทศบาลของสถานที่ท่องเที่ยว</label>
									   <select name ="travelling_type_id" class="form-control" style="height: inset !important;" required>
										<option value="" selected disabled>เทศบาลของสถานที่ท่องเที่ยว</option>
										<?php foreach ($query as $data):?>
											<option value="<?=$data['travelling_type_id']?>"><?=$data['travelling_type_name']?></option>
										<?php endforeach;?>
										</select>
									</div>

								    <div class="mb-2 col-lg-6">
									    <label class="form-label">ชื่อสถานที่ท่องเที่ยว</label>
									    <input type="text" class="form-control" name="travelling_name" placeholder="ชื่อที่พัก :" autocomplete="off" required>
									</div>
									<div class="mb-3 col-lg-6">
									    <label class="form-label">รายละเอียด</label>
										<textarea name="travelling_Details" class="form-control" style="height:100px" autocomplete="off" required></textarea>
									</div>
								    
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ที่อยู่</label>
									    <input type="text" class="form-control" name="travelling_Address" placeholder="ที่อยู่"
										autocomplete="off" required>
									</div>	

									<div class="mb-3 col-lg-6">
									    <label class="form-label">เบอร์ติดต่อ</label>
									    <input type="text" class="form-control" name="travelling_phone" placeholder="เบอร์ติดต่อ"
										autocomplete="off" required>
									</div>	
									
									<div class="mb-3 col-lg-6">
									    <label class="form-label">เวลาเปิด-ปิด</label>
									    <input type="text" class="form-control" name="travelling_open" placeholder="เวลาเปิด-ปิด"
										autocomplete="off" required>
									</div>	

									<div class="mb-3 col-lg-6">
									    <label class="form-label">ค่าใช้จ่าย</label>
									    <input type="text" class="form-control" name="travelling_price" placeholder="ค่าใช้จ่าย"
										autocomplete="off" required>
									</div>			
		
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ละติจูต</label>
									    <input type="text" class="form-control" name="LAT" placeholder="ละติจูต"
										autocomplete="off" required>
									</div>

									<div class="mb-3 col-lg-6">
									    <label class="form-label">ลองติจูต</label>
									    <input type="text" class="form-control" name="LNG" placeholder="ลองติจูต"
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
