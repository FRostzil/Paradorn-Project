<?php

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
         
            $travelling_type_id = $_POST['travelling_type_id'];
			$product_name =	$_POST['product_name'];	
			$product_details = $_POST['product_details'];
			$product_prices = $_POST['product_prices'];
			$product_address = $_POST['product_address'];
            $product_phone = $_POST ['product_phone'];
            $PLNG = $_POST ['PLNG'];
            $PLAT = $_POST['PLAT'];
         } 

         if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM product WHERE product_id  = '$id'";
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
			$product_name =	$_POST['product_name'];	
			$product_details = $_POST['product_details'];
			$product_prices = $_POST['product_prices'];
			$product_address = $_POST['product_address'];
            $product_phone = $_POST ['product_phone'];
            $LNG = $_POST ['LNG'];
            $LAT = $_POST['LAT'];
            $oldimage = $_POST['oldimage'];
                    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                        $extention = array("jpeg","jpg","png");
                        $target = '../member/upload/product/';
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
                                    $alert = '<script type="text/javascript">';
                                    $alert .= 'alert("เพิ่มไฟล์เข้า folder ไม่สำเร็จ");';
                                    $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                                    $alert .= '</script>';
                                echo $alert;
                                exit();
                                }
                            }
                        }else{
                            $alert = '<script type="text/javascript">';
                            $alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
                            $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                            $alert .= '</script>';
                            echo $alert;
                            exit();
            }
                    }else{
                        $filename = $oldimage;
                    }
                
                    /* echo $filename;
                    exit(); */
                    $sql = "UPDATE product SET type_product_id = '$travelling_type_id',product_name = '$product_name',product_details = '$product_details',product_prices = '$product_prices',product_address ='$product_address',product_phone ='$product_phone',PLAT = '$PLAT',PLNG ='$PLNG',product_image ='$filename' WHERE product_id = '$id'";              	
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
                $sql1 = "SELECT * FROM tb_travelling_type";
                $query1 = mysqli_query($conn,$sql1);
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
                    <div class="mb-3">
                            <label class="form-label"> รูปภาพ </label>
                            <div class="mb-3"> 
                                <img id="preview" src="../member/upload/product/<?=$result['product_image']?>" class="rounded" width="150" height="150">
                            </div>
                            <button onclick="return triggerFile();" class="btn btn-success text-white">เลือกรูปภาพ</button>
                            <input type="file" name="image" id="image" style="display:none;">
                            <input type="hidden" name="oldimage" value="<?=$result['product_image']?>">                          
                        </div>

                        <div class="mb-2 col-lg-6">
									    <label class="form-label"> ประเภทผลิตภัณฑ์ </label>
									   <select name ="travelling_type_id" class="form-control">
										<option value="" selected disabled>ประเภทผลิตภัณฑ์</option>
										<?php foreach ($query1 as $data):?>
											<option value="<?=$data['travelling_type_id']?>" <?=$result['type_product_id'] == $data['travelling_type_id'] ? 'selected' : '' ?>><?=$data['travelling_type_name']?></option>             
										<?php endforeach;?>
										</select>
									</div>

								    <div class="mb-2 col-lg-6">
									    <label class="form-label"> ชื่อผลิตภัณฑ์ </label>
									    <input type="text" class="form-control" name="product_name" placeholder="ชื่อผลิตภัณฑ์ :"
                                        value="<?=$result['product_name']?>" autocomplete="off" required>
									</div>
									<div class="mb-3 col-lg-6">
									    <label class="form-label">รายละเอียดผลิตภัณฑ์</label>
										<textarea name="product_details" class="form-control" style="height:100px"><?=$result['product_details']?></textarea>
									</div>
								    
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ราคาผลิตภัณฑ์</label>
									    <input type="text" class="form-control" name="product_prices" placeholder="ราคาผลิตภัณฑ์ :"
                                        value="<?=$result['product_prices']?>" autocomplete="off" required>
									</div>

									
									<div class="mb-3 col-lg-6">
									    <label class="form-label">ที่อยู่ผลิตภัณฑ์</label>
									    <input type="text" class="form-control" name="product_address" placeholder="ที่อยู่ผลิตภัณฑ์ :"
										value="<?=$result['product_address']?>" autocomplete="off" required>
									</div>

                                    <div class="mb-3 col-lg-6">
									    <label class="form-label">เบอณ์ติดต่อ</label>
									    <input type="text" class="form-control" name="product_phone" placeholder="ที่อยู่ผลิตภัณฑ์ :"
										value="<?=$result['product_phone']?>" autocomplete="off" required>
									</div>      

                                    <div class="mb-3 col-lg-6">
									    <label class="form-label">ลองติจูต</label>
									    <input type="text" class="form-control" name="PLNG" placeholder="ลองติจูต :"
										value="<?=$result['PLNG']?>" autocomplete="off" required>
									</div>         

                                    <div class="mb-3 col-lg-6">
									    <label class="form-label">ละติจูต</label>
									    <input type="text" class="form-control" name="PLAT" placeholder="ละติจูต :"
										value="<?=$result['PLAT']?>" autocomplete="off" required>
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