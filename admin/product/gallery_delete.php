<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){    
    $id = $_GET['id'];
    $id_product = $_GET['id_product'];
    $sql = "DELETE FROM product_gallery WHERE id = '$id'";                	
						   if (mysqli_query($conn, $sql)) {
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("ลบข้อมูลสำเร็จ");';
							$alert .= 'window.location.href = "?page=product&function=gallery&id='.$id_product.'";';
							$alert .= '</script>';
							echo $alert;
							exit();
						  } else {
							echo "ลบข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
        
 
                        }
?>