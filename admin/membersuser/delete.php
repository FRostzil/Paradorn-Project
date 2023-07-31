<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM memberuser WHERE member_id ='$id'";                    	
						   if (mysqli_query($conn, $sql)) {
							//echo "แก้ไขบันทึกข้อมูลสำเร็จ";
							$alert = '<script type="text/javascript">';
							$alert .= 'alert("ลบข้อมูลสำเร็จ");';
							$alert .= 'window.location.href = "?page=memberusers";';
							$alert .= '</script>';
							echo $alert;
							exit();
						  } else {
							echo "ลบข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
						  }
						  mysqli_close($conn);
        
}

?>