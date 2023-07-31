<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'];
            $sql = "DELETE FROM product WHERE product_id ='$id'";                    	
						   if (mysqli_query($conn, $sql)) {
							//echo "แก้ไขบันทึกข้อมูลสำเร็จ";
							echo "<script>";
							echo "Swal.fire({
								position: 'center',
								icon: 'success',
								title: 'ลบข้อมูลสำเร็จ',
								showConfirmButton: false,
							}).then((result) => {
								if(result){
									window.location.href = '?page=product';
								}
							  })";
							echo "</script>";
							exit();	
						  } else {
							echo "ลบข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
        
}

?>