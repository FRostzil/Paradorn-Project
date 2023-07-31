<?php
session_destroy();
/* unset($_SESSION['admin_login']);
unset($_SESSION['adminprofiles']); */
$alert = '<script type="text/javascript">';
echo "<script>";
echo "Swal.fire({
	position: 'center',
	icon: 'success',
	title: 'ออกจากระบบแล้ว',
	showConfirmButton: false,
}).then((result) => {
	if(result){
		window.location.href = '../index.php';
	}
  })";
echo "</script>";

						exit();

?>