<?php
			
			
			
					if(isset($_POST) && !empty($_POST)){ 
						//echo '<pre>';
						//print_r($_POST); 
						//print_r($_FILES);
						//echo '</pre>';
						//exit(); 

						

						$firstname = $_POST['firstname'];
						$lastname = $_POST['lastname'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						if(!empty($firstname)){
							$sql_check = "SELECT * FROM contract WHERE firstname = '$firstname'";
							$query_check = mysqli_query($conn,$sql_check);
							$row_check = mysqli_num_rows($query_check);
							if($row_check > 0){
								$alert = '<script type="text/javascript">';
								$alert .= 'alert("มีชื่อผู้ใช้นี้อยู่แล้ว");';
								$alert .= 'window.location.href = "?page=contract&function=add";';
								$alert .= '</script>';
								echo $alert;
								exit();
							}else{
								
							
								/* echo $filename;
								exit(); */
		
								$sql = "INSERT INTO contract (firstname,lastname,email,phone) 
										VALUES('$firstname','$lastname','$email','$phone')";
						   if (mysqli_query($conn, $sql)) {
							//echo "บันทึกข้อมูลสำเร็จ";
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("บันทึกข้อมูลสำเร็จ");';
							$alert .= 'window.location.href = "?page=contract";';
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
		?>
<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">เพิ่มช่องทางการติดต่อ</h1>

			
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

									<div class="mb-3 col-lg-6">
									    <label class="form-label">ชื่อจริง</label>
									    <input type="text" class="form-control" name="firstname" placeholder="ชื่อจริง : ภราดร"
										value="<?=(isset($_POST['firstname']) && !empty($_POST['firstname']) ? $_POST['firstname'] : '' )?>" autocomplete="off" required>
									</div>

									<div class="mb-3 col-lg-6">
									    <label class="form-label">นามสกุล</label>
									    <input type="text" class="form-control" name="lastname" placeholder="นามสกุล : สายพิรุณ" 
										value="<?=(isset($_POST['lastname']) && !empty($_POST['lastname']) ? $_POST['lastname'] : '' )?>" autocomplete="off" required>
									</div>


									<div class="mb-3 col-lg-6">
									    <label class="form-label">อีเมล</label>
									    <input type="email" class="form-control" name="email" placeholder="อีเมล์ : paradorn63120@gmail.com"
										value="<?=(isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '' )?>" autocomplete="off" required>
									</div>


									<div class="mb-3 col-lg-6">
									    <label class="form-label">เบอร์ติดต่อ</label>
									    <input type="text" class="form-control" name="phone" placeholder="เบอร์ติดต่อ : 0918379600"
										value="<?=(isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : '' )?>" autocomplete="off" required>
									</div>

									<button type="submit" class="btn app-btn-primary" >บันทึก</button>
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
