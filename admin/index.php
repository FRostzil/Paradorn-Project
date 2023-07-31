<?php include('../connect/conect.php')?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"> 
<?php include('include/head.php') ?>
<?php include('include/script.php') ?>
<?php if(isset($_SESSION['adminlogin']) && !empty($_SESSION['adminlogin'])):?>
<body class="app">   	
<?php include('include/header.php') ?>
    <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-l">
				<?php
				if(!isset($_GET['page']) && empty($_GET['page'])){
					include('dashboard/dashboard.php');
				
				}elseif (isset($_GET['page']) && $_GET['page'] == 'travellingtype'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('travellingtype/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('travellingtype/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('travellingtype/delete.php');
					}else{
						include('travellingtype/index.php');
					}

				}elseif (isset($_GET['page']) && $_GET['page'] == 'contract'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('contract/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('contract/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('contract/delete.php');
					}else{
						include('contract/index.php');
					}	





				}elseif (isset($_GET['page']) && $_GET['page'] == 'memberusers'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('./membersuser/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('./membersuser/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('./membersuser/delete.php');
					}else{
						include('membersuser/index.php');
						}
					}elseif(isset($_GET['page']) && $_GET['page'] == 'logout'){
							include('logout/index.php');
					
				}elseif (isset($_GET['page']) && $_GET['page'] == 'product'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('./product/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('./product/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('./product/delete.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
							include('./product/gallery.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
							include('./product/gallery_delete.php');		
					}else{
						include('./product/index.php');
						}
					
					}elseif (isset($_GET['page']) && $_GET['page'] == 'restuarant'){
						if(isset($_GET['function']) && $_GET['function'] == 'add'){
							include('./restuarant/insert.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
								include('./restuarant/edit.php');
							}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
								include('./restuarant/delete.php');
							}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
								include('./restuarant/gallery.php');
							}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
								include('./restuarant/gallery_delete.php');		
						}else{
							include('./restuarant/index.php');
							}



				}elseif (isset($_GET['page']) && $_GET['page'] == 'hotel'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('./hotel/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('./hotel/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('./hotel/delete.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
							include('./hotel/gallery.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
							include('./hotel/gallery_delete.php');		
						}else{
						include('./hotel/index.php');
						}



				}elseif (isset($_GET['page']) && $_GET['page'] == 'admin'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('admin/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('admin/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('admin/delete.php');
					}else{
						include('admin/index.php');
						}
					}elseif(isset($_GET['page']) && $_GET['page'] == 'logout'){
							include('logout/index.php');

					}elseif (isset($_GET['page']) && $_GET['page'] == 'travel'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('travelling/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('travelling/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('travelling/delete.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
							include('travelling/gallery.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
							include('travelling/gallery_delete.php');	

					}else{
						include('travelling/index.php');
						}
					}elseif(isset($_GET['page']) && $_GET['page'] == 'profile'){
						include('profile/index.php');	
					}elseif(isset($_GET['page']) && $_GET['page'] == 'logout'){
							include('logout/index.php');
					}	



				?>
		</div>
	    <!--//app-wrapper--> 
				</div>
		
				</div>
				<?php include('include/footer.php')?>
		</body>
		<?php else:?>
			<?php include('login/index.php')?>
		<?php endif;?>

		</html> 

