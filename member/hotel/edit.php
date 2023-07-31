<?php

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $travelling_type_id = $_POST['travelling_type_id'];
			$hotel_name =	$_POST['hotel_name'];	
			$hotel_details = $_POST['hotel_details'];
			$hotel_Price = $_POST['hotel_Price'];
			$hotel_address = $_POST['hotel_address'];
            $hotel_Phone = $_POST['hotel_Phone'];
            $HLAT = $_POST['HLAT'];
			$HLNG = $_POST['HLNG'];
         } 

         if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM hotel WHERE hotel_id  = '$id'";
            $query = mysqli_query($conn,$sql);
            $result = mysqli_fetch_assoc($query);
        }  



        if(isset($_POST) && !empty($_POST)){ 
            //print_r($_POST);
            /* echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            exit(); */
            $travelling_type_id = $_POST['travelling_type_id'];
			$hotel_name =	$_POST['hotel_name'];	
			$hotel_details = $_POST['hotel_details'];
			$hotel_Price = $_POST['hotel_Price'];
			$hotel_address = $_POST['hotel_address'];
            $hotel_Phone = $_POST['hotel_Phone'];
            $HLAT = $_POST['HLAT'];
			$HLNG = $_POST['HLNG'];
            $oldimage = $_POST['oldimage'];
                    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                        $extention = array("jpeg","jpg","png");
                        $target = '../member/upload/hotel/';
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
                                    $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                                    $alert .= '</script>';
                                echo $alert;
                                exit();
                                }
                            }else{
                                $newfilename = time().$filename;
                                if(move_uploaded_file($filetmp,$target.$newfilename)){
                                $filename = $newfilename;
                                    }else{
                                        echo "<script>";
                            echo "Swal.fire({
                                icon: 'error',
                                title: 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ',
                                showConfirmButton: false,
                            }).then((result) => {
                                if(result){
                                    window.location.href = '?page=" . $_GET['page'] . "&function=update&id=" . $id . "';
                                }
                            })";
                            echo "</script>";

                                                exit();                                    
                                echo $alert;
                                exit();
                                }
                            }
                        } else {
                            echo "<script>";
                            echo "Swal.fire({
                                icon: 'error',
                                title: 'ประเภทไฟล์ไม่รองรับ',
                                text: 'กรุณาอัปโหลดเฉพาะไฟล์ png jpeg jpeg',
                                showConfirmButton: false,
                            }).then((result) => {
                                if(result){
                                    window.location.href = '?page=" . $_GET['page'] . "&function=update&id=" . $id . "';
                                }
                            })";
                            echo "</script>";
                                                exit();
            }
                    }else{
                        $filename = $oldimage;
                    }
                
                    /* echo $filename;
                    exit(); */
                    $sql = "UPDATE hotel SET type_hotel_id = '$travelling_type_id',hotel_name = '$hotel_name',hotel_details = '$hotel_details',hotel_Price = '$hotel_Price',hotel_address = '$hotel_address',hotel_Phone = '$hotel_Phone',HLAT ='$HLAT',HLNG = '$HLNG',hotel_image ='$filename' WHERE hotel_id = '$id'";              	
               if (mysqli_query($conn, $sql)) {
                //echo "แก้ไขบันทึกข้อมูลสำเร็จ";
                echo "<script>";
					echo "Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'แก้ไขข้อมูลสำเร็จ',
						showConfirmButton: false,
					}).then((result) => {
						if(result){
							window.location.href = '?page=" . $_GET['page'] . "';
						}
					  })";
					echo "</script>";
							exit();
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
                $sql1 = "SELECT * FROM tb_travelling_type";
                $query1 = mysqli_query($conn,$sql1);
?>
<div class="row justify-content-between">
<div class="col-auto">
<h1 class="app-page-title mb-0">แก้ไขข้อมูลที่พัก</h1>


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
                                <img id="preview" src="../member/upload/hotel/<?=$result['hotel_image']?>" class="rounded" width="150" height="150">
                            </div>
                            <button onclick="return triggerFile();" class="btn btn-success text-white">เลือกรูปภาพ</button>
                            <input type="file" name="image" id="image" style="display:none;">
                            <input type="hidden" name="oldimage" value="<?=$result['hotel_image']?>">                          
                        </div>

                        <div class="mb-2 col-lg-6">
									    <label class="form-label"> ประเภทผลิตภัณฑ์ </label>
									   <select name ="travelling_type_id" class="form-control">
										<option value="" selected disabled>ประเภทผลิตภัณฑ์</option>
										<?php foreach ($query1 as $data):?>
											<option value="<?=$data['travelling_type_id']?>" <?=$result['type_hotel_id'] == $data['travelling_type_id'] ? 'selected' : '' ?>><?=$data['travelling_type_name']?></option>             
										<?php endforeach;?>
										</select>
									</div>

								    <div class="mb-2 col-lg-6">
									    <label class="form-label"> ชื่อที่พัก </label>
									    <input type="text" class="form-control" name="hotel_name" placeholder="ชื่อที่พัก :"
                                        value="<?=$result['hotel_name']?>" autocomplete="off" required>
									</div>
									<div class="mb-3 col-lg-6">
									    <label class="form-label">รายละเอียดที่พัก</label>
										<textarea name="hotel_details" class="form-control" style="height:100px"><?=$result['hotel_details']?></textarea>
									</div>
								    
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ราคาที่พัก</label>
									    <input type="text" class="form-control" name="hotel_Price" placeholder="ราคาที่พัก :"
                                        value="<?=$result['hotel_Price']?>" autocomplete="off" required>
									</div>

									
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ที่อยู่ผลิตภัณฑ์</label>
									    <input type="text" class="form-control" name="hotel_address" placeholder="ที่อยู่ผลิตภัณฑ์ :"
										value="<?=$result['hotel_address']?>" autocomplete="off" required>
									</div>

                                    <div class="mb-3 col-lg-6">
									    <label class="form-label">เบอร์ติดต่อ</label>
									    <input type="text" class="form-control" name="hotel_Phone" placeholder="ที่อยู่ผลิตภัณฑ์ :"
										value="<?=$result['hotel_Phone']?>" autocomplete="off" required>
									</div>		       

                                    <div class="mb-3 col-lg-6">
									    <label class="form-label">ละติจูต</label>
									    <input type="text" class="form-control" name="HLAT" placeholder="ละติจูต:"
										value="<?=$result['HLAT']?>" autocomplete="off" required>
									</div>

									<div class="mb-3 col-lg-6">
									    <label class="form-label">ลองติจูต</label>
									    <input type="text" class="form-control" name="HLNG" placeholder="ลองติจูต:"
										value="<?=$result['HLNG']?>" autocomplete="off" required>
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