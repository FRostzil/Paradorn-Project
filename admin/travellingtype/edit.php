<?php
         if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM tb_travelling_type WHERE travelling_type_id  = '$id'";
            $query = mysqli_query($conn,$sql);
            $result = mysqli_fetch_assoc($query);
        }  

					if(isset($_POST) && !empty($_POST)){ 
						//print_r($_POST);
						/* echo '<pre>';
						print_r($_FILES);
						echo '</pre>';
						exit(); */
						$travellingtypename = $_POST['travellingtypename'];
                        if(!empty($travellingtypename)){
							$sql_check = "SELECT * FROM tb_travelling_type WHERE travelling_type_name = '$travellingtypename' AND travelling_type_id != '$id'";
							$query_check = mysqli_query($conn,$sql_check);
							$row_check = mysqli_num_rows($query_check);
							if($row_check > 0){
								$alert = '<script type="text/javascript">';
								$alert .= 'alert("ชื่อเทศบาลนี้มีอยู่แล้ว");';
								$alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
								$alert .= '</script>';
								echo $alert;
								exit();
							}else{



								$sql = "UPDATE tb_travelling_type SET travelling_type_name = '$travellingtypename' WHERE travelling_type_id = '$id'";                    	
						   if (mysqli_query($conn, $sql)) {
							//echo "แก้ไขบันทึกข้อมูลสำเร็จ";
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("แก้ไขข้อมูลสำเร็จ");';
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
			<h1 class="app-page-title mb-0">แก้ไขเทศบาล</h1>

			
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
									    
								    <div class="mb-2 col-lg-6">
									    <label class="form-label">ชื่อเทศบาล</label>
									    <input type="text" class="form-control" name="travellingtypename" placeholder="ชื่อเทศบาล : ทุ่งหลวง" 
										value ="<?=$result['travelling_type_name']?>" autocomplete="off" required>
									</div>

									<button type="submit" class="btn app-btn-primary" >บันทึก</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->

                        