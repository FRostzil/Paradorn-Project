<?php
					
					if(isset($_POST) && !empty($_POST)){ 
						//print_r($_POST);
						/* echo '<pre>';
						print_r($_FILES);
						echo '</pre>';
						exit(); */
						$travelling_type_name = $_POST['travelling_type_name'];
						if(!empty($travelling_type_name)){
							$sql_check = "SELECT * FROM tb_travelling_type WHERE travelling_type_name = '$travelling_type_name'";
							$query_check = mysqli_query($conn,$sql_check);
							$row_check = mysqli_num_rows($query_check);
							if($row_check > 0){
								$alert = '<script type="text/javascript">';
								$alert .= 'alert("ชื่อเทศบาลนี้มีอยู่แล้ว");';
								$alert .= 'window.location.href = "?page='.$_GET['page'].'&function=add";';
								$alert .= '</script>';
								echo $alert;
								exit();
							}else{
								
		
								$sql = "INSERT INTO tb_travelling_type (travelling_type_name) 
										VALUES('$travelling_type_name') ";
						   if (mysqli_query($conn, $sql)) {
							//echo "บันทึกข้อมูลสำเร็จ";
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("เพิ่มเทศบาลสำเร็จ");';
							$alert .= 'window.location.href = "?page='.$_GET['page'].'";';
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
			<h1 class="app-page-title mb-0">เพิ่มข้อมูลเทศบาล</h1>

			
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
								
								    <div class="mb-2 col-lg-6">
									    <label class="form-label"> ชื่อเทศบาล </label>
									    <input type="text" class="form-control" name="travelling_type_name" placeholder="ชื่อเทศบาล : ทุ่งหลวง" autocomplete="off" required>
									</div>
									

									<button type="submit" class="btn app-btn-primary" >บันทึก</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->

