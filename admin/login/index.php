<?php
	if(isset($_POST) && !empty($_POST)){
		/* echo '<pre>'; // check ว่ามีข้อมูลไหม ถ้าไม่มี จะแสดง 0 if มี = 1
		print_r($_POST);
		echo '</pre>'; */
		$user = $_POST['adminuser'];
		$pass = $_POST['adminpass'];
		$sql = "SELECT * FROM adminuser WHERE admin_user ='$user' AND admin_pass = '$pass'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($query);
		echo $row;
		if($row > 0){
			$result = mysqli_fetch_assoc($query);
			$_SESSION['adminlogin'] = $result['admin_user'];
			$_SESSION['adminprofiles'] = $result['admin_image'];

			echo "<script>";
			echo "Swal.fire({
				position: 'center',
				icon: 'success',
				title: 'เข้าสู่ระบบสำเร็จ',
				showConfirmButton: false,
			}).then((result) => {
				if(result){
					window.location.href = '';
				}
			  })";
			echo "</script>";
						exit();;
		}else{
			echo "<script>";
			echo "Swal.fire({
				icon: 'error',
				title: 'เข้าสู่ระบบไม่าำเร็จ',
				text: 'กรุณาตรวจชื่อผู้ใช้ หรือ รหัสผ่านให้ถูกต้อง',
				showConfirmButton: false,
			}).then((result) => {
				if(result){
					window.location.href = '';
				}
			  })";
			echo "</script>";				
						exit();;
		}
	}
	
?>
<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"></div>
					<h2 class="auth-heading text-center mb-5">เข้าสู่ระบบผู้ดูแลระบบ</h2>
			        <div class="auth-form-container text-start">
						<form action="" method="post" class="auth-form login-form">         
							<div class="email mb-3">
								
								<input name="adminuser" type="text" class="form-control signin-email" placeholder="ชื่อผู้ใช้" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								
								<input name="adminpass" type="password" class="form-control signin-password" placeholder="รหัสผ่าน" required="required">
								<div class="extra mt-3 row justify-content-between">
									
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">เข้าสู่ระบบ</button>
							</div>
						</form>
						
						
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						 <small class="copyright">ภราดร สายพิรุณ & จิรศักดิ จันทร์ฝอย <span class="sr-only"></span><i class="fas fa-heart" style="color: #fb866a;"></i></small>
		         
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <!-- <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div> -->
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

