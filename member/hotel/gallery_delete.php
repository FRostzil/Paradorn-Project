<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){    
    $id = $_GET['id'];
    $id_hotel = $_GET['id_hotel'];
    $sql = "DELETE FROM hotel_gallery WHERE id = '$id'";                	
						   if (mysqli_query($conn, $sql)) {
							echo "<script>";
		echo "Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'ลบข้อมูลสำเร็จ',
			showConfirmButton: false,
		}).then(() => {
			window.location.href = '?page=hotel&function=gallery&id=".$id_hotel."';
		});";
		echo "</script>";					
						  } else {
							echo "ลบข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
        
 
                        }
?>