<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){    
    $id = $_GET['id'];
    $id_tra = $_GET['id_travelling'];
    $sql = "DELETE FROM travelling_gallery WHERE id = '$id'";                	
						   if (mysqli_query($conn, $sql)) {
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("ลบข้อมูลสำเร็จ");';
							$alert .= 'window.location.href = "?page=travel&function=gallery&id='.$id_tra.'";';
							$alert .= '</script>';
							echo $alert;
							exit();
						  } else {
							echo "ลบข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
        
 
                        }
?>