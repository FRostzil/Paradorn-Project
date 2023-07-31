<?php
         if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM contract WHERE id  = '$id'";
            $query = mysqli_query($conn,$sql);
            $result = mysqli_fetch_assoc($query);
        }  

					if(isset($_POST) && !empty($_POST)){ 
						//print_r($_POST);
						/* echo '<pre>';
						print_r($_FILES);
						echo '</pre>';
						exit(); */
						$firstname = $_POST['firstname'];
						$lastname = $_POST['lastname'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						
							
								$sql = "UPDATE contract SET firstname = '$firstname',lastname = '$lastname',email = '$email',phone = '$phone' WHERE id = '$id'";                    	
						   if (mysqli_query($conn, $sql)) {
							//echo "แก้ไขบันทึกข้อมูลสำเร็จ";
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("แก้ไขข้อมูลสำเร็จ");';
							$alert .= 'window.location.href = "?page=contract";';
							$alert .= '</script>';
							echo $alert;
							exit();
						  } else {
							echo "บันทึกข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
							}
					
               
		?>
<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">แก้ไขข้อมูลผู้ดูแลระบบ</h1>

			
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
								
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ชื่อจริง</label>
									    <input type="text" class="form-control" name="firstname" placeholder="ชื่อจริง : ภราดร"
										value ="<?=$result['firstname']?>" autocomplete="off" required>
									</div>

									<div class="mb-3 col-lg-6">
									    <label class="form-label">นามสกุล</label>
									    <input type="text" class="form-control" name="lastname" placeholder="นามสกุล : สายพิรุณ" 
										value ="<?=$result['lastname']?>" autocomplete="off" required>
									</div>

									<div class="mb-3 col-lg-6">
									    <label class="form-label">อีเมล</label>
									    <input type="email" class="form-control" name="email" placeholder="อีเมล์ : paradorn63120@gmail.com" 
										value ="<?=$result['email']?>" autocomplete="off" required>
									</div>


									<div class="mb-3 col-lg-6">
									    <label class="form-label">เบอร์ติดต่อ</label>
									    <input type="text" class="form-control" name="phone" placeholder="เบอร์ติดต่อ : 0918379600"
										value ="<?=$result['phone']?>" autocomplete="off" required>
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
