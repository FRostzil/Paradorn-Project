<?php include('../connect/conect.php')?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"> 
<?php include('include/head.php') ?>
<?php include('include/script.php') ?>
<?php if(isset($_SESSION['memberlogin']) && !empty($_SESSION['memberlogin'])):?>
<body class="app">   	
<?php include('include/header.php') ?>
    <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-l">
				<?php

				if(!isset($_GET['page']) && empty($_GET['page'])){
					include('profile/index.php');

				}elseif (isset($_GET['page']) && $_GET['page'] == 'logout'){
					include('logout/index.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'profile'){
					include('profile/index.php');	
				}elseif (isset($_GET['page']) && $_GET['page'] == 'product'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('product/insert.php');
					}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
							include('product/edit.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
							include('product/delete.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
							include('product/gallery.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
							include('product/gallery_delete.php');	
						}else{
							include('product/index.php');
							}


						}elseif (isset($_GET['page']) && $_GET['page'] == 'restuarant'){
							if(isset($_GET['function']) && $_GET['function'] == 'add'){
								include('restuarant/insert.php');
							}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
									include('restuarant/edit.php');
								}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
									include('restuarant/delete.php');
								}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
									include('restuarant/gallery.php');
								}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
									include('restuarant/gallery_delete.php');	
								}else{
									include('restuarant/index.php');
									}



						}elseif (isset($_GET['page']) && $_GET['page'] == 'hotel'){
						if(isset($_GET['function']) && $_GET['function'] == 'add'){
							include('hotel/insert.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
								include('hotel/edit.php');
							}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
								include('hotel/delete.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery'){
							include('hotel/gallery.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'gallery_delete'){
							include('hotel/gallery_delete.php');	
						}else{			
								include('hotel/index.php');
								}
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

