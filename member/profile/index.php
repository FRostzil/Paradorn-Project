<?php 
    $user = $_SESSION['memberlogin'];
    $sql = "SELECT * FROM memberuser WHERE member_username = '$user'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

    if(isset($_POST) && !empty($_POST)){ 
        if(isset($_POST['profile'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $oldimage = $_POST['oldimage'];
        if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
            $extention = array("jpeg","jpg","png");
            $target = 'upload/member/';
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
                        $alert .= 'window.location.href = "?page=profile&function=add";';
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
                        $alert .= 'window.location.href = "?page=profile&function=add";';
                        $alert .= '</script>';
                    echo $alert;
                    exit();
                    }
                }
            }else{
                $alert = '<script type="text/javascript">';
                $alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
                $alert .= 'window.location.href = "?page=profile&function=add";';
                $alert .= '</script>';
                echo $alert;
                exit();
}
        }else{
            $filename = $oldimage;
        }
        
        $sql = "UPDATE memberuser SET 	member_firstname = '$firstname',member_lastname = '$lastname',member_email = '$email',member_phone = '$phone',member_images ='$filename' WHERE member_username = '$user'";                    	
           if (mysqli_query($conn, $sql)) {
            $_SESSION['memberprofiles'] = $filename;
            //echo "แก้ไขบันทึกข้อมูลสำเร็จ";
            $alert = '<script type="text/javascript">';
            $alert .= 'alert("อัปเดตข้อมูลสำเร็จ");';
            $alert .= 'window.location.href = "?page=profile";';
            $alert .= '</script>';
            echo $alert;
            exit();
          } else {
            echo "บันทึกข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
          }
          mysqli_close($conn);

        

            }
            if(isset($_POST['changepassword'])){
/*                 echo '<pre>';
                print_r($_POST);
                echo '</pre>'; */
                $oldpassword = $_POST['oldpassword'];
                $newpassword = $_POST['newpassword'];
                $confirmpassword = $_POST['confirmpassword'];
                if(isset($oldpassword) && !empty($oldpassword)){
                    $sql_check = " SELECT * FROM memberuser WHERE member_username = '$user' AND member_password = '$oldpassword'";
                    $query_check = mysqli_query($conn,$sql_check);
                    $row_check = mysqli_num_rows($query_check);
                    echo $row_check;
                    if($row_check == 0){
                        $alert = '<script type="text/javascript">';
                        $alert .= 'alert("รหัสผ่านเก่าไม่ถูกต้อง");';
                        $alert .= 'window.location.href = "?page=profile&function=add";';
                        $alert .= '</script>';
                        echo $alert;
                        exit();
                    }else{
                        if($newpassword != $confirmpassword){
                            $alert = '<script type="text/javascript">';
                        $alert .= 'alert("ยืนยันรหัสผ่านใหม่ไม่ถูกต้อง");';
                        $alert .= 'window.location.href = "?page=profile&function=add";';
                        $alert .= '</script>';
                        echo $alert;
                        exit();
                        }else{
                            $sql = "UPDATE memberuser SET member_password = '$newpassword' WHERE member_username = '$user'";
                            if(mysqli_query($conn,$sql)) {
                           
                            //echo "แก้ไขบันทึกข้อมูลสำเร็จ";
                            $alert = '<script type="text/javascript">';
                            $alert .= 'alert("เปลี่ยนรหัสผ่านสำเร็จ");';
                            $alert .= 'window.location.href = "?page=profile";';
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
            }
    }      
                
?>
<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">บัญชีของฉัน</h1>
</div>
	<div class="col-auto">
</div>
<hr class="mb-4">
                <div class="row gy-4">
	                <div class="col-12 col-lg-6">
                    <form action="" method="post" enctype="multipart/form-data">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">โปรไฟล์</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
                           
						    <div class="app-card-body px-4 w-100">
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label mb-2"><strong>รูปภาพ</strong></div>

										    <div class="item-data">
 
                                            <img id ="preview" class="profile-image rounded-circle" src="upload/member/<?=$_SESSION['memberprofiles']?>" alt=""></div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" onclick="return triggerFile();" href="#">เปลี่ยน</a>
                                            <input type="file" name="image" id="image" style="display:none;">
                                            <input type="hidden" name="oldimage" value="<?=$result['member_images']?>">
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="">
										    <div class="item-label" mb-2><strong>ชื่อ</strong></div>
									        <div class="item-data" mb-2><input type="text" class="form-control" name="firstname" value="<?=$result['member_firstname']?>"></div>
									    </div><!--//col-->
									
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="">
										    <div class="item-label"><strong>นามสกุล</strong></div>
									        <div class="item-data"><input type="text" class="form-control" name="lastname" value="<?=$result['member_lastname']?>"></div>
									    </div><!--//col-->
									    
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="">
										    <div class="item-label"><strong>เบอร์ติดต่อ</strong></div>
									        <div class="item-data"><input type="text" class="form-control" name="phone" value="<?=$result['member_phone']?>">
									        </div>
									    </div><!--//col-->
									    
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="">
										    <div class="item-label"><strong>อีเมล์</strong></div>
									        <div class="item-data"><input type="text" class="form-control" name="email" value="<?=$result['member_email']?>">
										 
									        </div>
									    </div><!--//col-->
									  
								    </div><!--//row-->
							    </div><!--//item-->
						    </div><!--//app-card-body-->
						    <div class="app-card-footer p-4 mt-auto">
                                <input type="hidden" name="profile">
							   <input type="submit" class="btn app-btn-secondary" value="อัปเดตข้อมูล" />
                              
						    </div><!--//app-card-footer-->
                            
						</div><!--//app-card-->
                        </form> 
	                </div><!--//col-->
	               
	                <div class="col-12 col-lg-6">
                    <form action="" method="post">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
  <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">เปลี่ยนรหัสผ่าน</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">
							    
							    <div class="item  py-3">
                                <div class="">
										    <div class="item-label" mb-2><strong>รหัสผ่านเก่า</strong></div>
									        <div class="item-data" mb-2><input type="text" placeholder="รหัสผ่านเก่า" name="oldpassword" class="form-control"></div>
									    </div><!--//col-->
                                        <div class="item  py-3">
                                        <div class="">
										    <div class="item-label" mb-2><strong>รหัสผ่านใหม่</strong></div>
									        <div class="item-data" mb-2><input type="text" placeholder="รหัสผ่านใหม่" name="newpassword" class="form-control"></div>
									    </div><!--//col-->
                                        <div class="item -bottom py-3">
                                        <div class="">
										    <div class="item-label" mb-2><strong>ยืนยันรหัสผ่านใหม่</strong></div>
									        <div class="item-data" mb-2>
                                                <input type="text" placeholder="ยืนยันรหัสผ่านใหม่" name="confirmpassword" class="form-control"></div>
									            <input type="hidden" name="changepassword">
                                        </div><!--//col-->
                                        </div>

						    </div><!--//app-card-body-->
						    
						    <div class="app-card-footer p-4 mt-auto">
                            <input type="submit" class="btn app-btn-secondary" value="ยืนยันเปลี่ยนรหัสผ่าน" /></a>
						    </div><!--//app-card-footer-->
</form>
						</div><!--//app-card-->
	           

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