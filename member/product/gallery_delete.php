<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){    
    $id = $_GET['id'];
    $id_product = $_GET['id_product'];
    $sql = "DELETE FROM product_gallery WHERE id = '$id'";                	
						   if (mysqli_query($conn, $sql)) {
							echo "<script>";
							echo "Swal.fire({
								position: 'center',
								icon: 'success',
								title: 'ลบข้อมูลสำเร็จ',
								showConfirmButton: false,
							}).then(() => {
								window.location.href = '?page=product&function=gallery&id=".$id_product."';
							});";
							echo "</script>";					

							
						  } else {
							echo "ลบข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
        
 
                        }
?>