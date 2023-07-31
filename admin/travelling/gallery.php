<?php 
 if (isset($_POST) && !empty($_POST)){ 
    $id_travelling = $_POST['id_travelling'];
    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
        $extention = array("jpeg","jpg","png");
        $target = '../member/upload/Travelling/'; // แก้
        $filecount = count($_FILES['image']['name']);

        // ตรวจสอบจำนวนรูปภาพก่อนการอัปโหลด
        $sql_check = "SELECT COUNT(*) AS count FROM travelling_gallery WHERE travelling_gallery_id = '$id_travelling'"; //แก้
        $query_check = mysqli_query($conn, $sql_check);
        $result_check = mysqli_fetch_assoc($query_check);
        $total_images = $result_check['count'] + $filecount;
        
        if ($total_images <= 20) { // ตรวจสอบว่ารูปเกิน 20 รูปหรือไม่
            for($i=0;$i<$filecount;$i++){
                $filename = $_FILES['image']['name'][$i];
                $filetmp = $_FILES['image']['tmp_name'][$i];
                $ext =pathinfo($filename,PATHINFO_EXTENSION);
                if(in_array($ext,$extention)){
                    if(!file_exists($target.$filename)) {		
                        if(move_uploaded_file($filetmp,$target.$filename)){
                            $filename = $filename;
                        }else{
                            $alert = '<script type="text/javascript">';
                            $alert .= 'alert("เพิ่มไฟล์เข้า folder ไม่สำเร็จ");';
                            $alert .= 'window.location.href = "?page=travel&function=add";'; //แก้
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                        }
                    }else{
                        $newfilename = time().$filename;
                        if(move_uploaded_file($filetmp,$target.$newfilename)){
                            $filename = $newfilename;
                        }else{	
                            $alert = '<script type="text/javascript">';
                            $alert .= 'alert("เพิ่มไฟล์gเข้า folder ไม่สำเร็จ");';
                            $alert .= 'window.location.href = "?page=travel&function=add";'; //แก้
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                        }
                    }
                }else{
                    $alert = '<script type="text/javascript">';
                    $alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
                    $alert .= 'window.location.href = "?page=travel&function=add";'; //แก้
                    $alert .= '</script>';
                    exit();
                    echo $alert;
                }
                $sql = "INSERT INTO travelling_gallery (travelling_gallery_id,travelling_gallery_image	)  
                        VALUES('$id_travelling','$filename')"; 
                if (!mysqli_query($conn, $sql)) {
                    echo "บันทึกข้อมูลไม่สำเร็จ: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            $alert = '<script type="text/javascript">';
            $alert .= 'alert("เพิ่มสำเร็จ");';
        $alert .= 'window.location.href = "?page='.$_GET['page'].'&function='.$_GET['function'].'&id='.$id_travelling.'";'; //แก้
        $alert .= '</script>';
        echo $alert;
        exit();
    } else {
        $alert = '<script type="text/javascript">';
        $alert .= 'alert("จำนวนรูปภาพต้องไม่เกิน 20 รูป");';
        $alert .= 'window.location.href = "?page=travel&function=gallery&id='.$id_travelling.'";'; //แก้
        $alert .= '</script>';          
        echo $alert;
        exit();
    }
      
      mysqli_close($conn);
 }}

$id = $_GET['id'];
$sql = "SELECT *,t.travelling_id,t.travelling_name,tt.travelling_type_name AS type_travel FROM tb_travelling t 
        LEFT JOIN tb_travelling_type tt ON t.type_travelling_id = tt.travelling_type_id WHERE t.travelling_id = '$id'";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($query);

    $sql = "SELECT * FROM travelling_gallery WHERE travelling_gallery_id = '$id'";
    $query = mysqli_query($conn,$sql);
?>
		<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">จัดการสินค้า <?=$result['travelling_name']?></h1>
</div>
	<div class="col-auto pt-3 p-md-3 p-lg-2">
    <a href="?page=<?=$_GET['page']?>" class="btn btn-secondary">ย้อนกลับ</a>

</div>
			<hr class="mb-4">
                <div class="row g-4 settings-section">
                <div class="col-12 col-md-4">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							    <form action="" method="post" enctype="multipart/form-data">
								<div class="mb-3">
									    <label class="form-label"> รูปภาพ </label>
									    <div class="mb-3"> 
											<img id="preview" name="preview" class="rounded" width="200" height="200">
										</div>
										<button onclick="return triggerFile();" class="btn btn-success text-white">เลือกรูปภาพ</button>
										<input type="file" name="image[]" id="image" style="display:none;" multiple required>
                                        <input type="hidden" name="id_travelling" value="<?=$id?>">
									</div>

								   
                   
					

									<button type="submit" class="btn app-btn-primary">บันทึก</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							
							<table id="myTable" class="table table-hover" style="width: 100%;">
  <thead> 
    <tr>
    <th class="text-center" scope="col">ลำดับ</th>
    <th class="text-center" scope="col">รูป</th>
      <th class="text-center" scope="col">เมนู</th>
    </tr>
  </thead>

  <tbody class="text-center">
		<?php 
        $i =1;
        foreach ($query as $data):?>
			<tr>
            <td class="align-middle"><?=$i?></td>
            <td class="align-middle"><img src="../member/upload/travelling/<?=$data['travelling_gallery_image']?>" class="rounded" width="100" height="100">
                <td class="align-middle">
				
					<a href="?page=<?=$_GET['page']?>&function=gallery_delete&id=<?=$data['id']?>&id_travelling=<?=$id?>" onclick="return confirm('คุณต้องการลบแกลเลอลี่ที่ : <?=$i?> หรือไม่')"; class="btn btn-sm btn-danger">ลบข้อมูล</a>                       
		</td>
			</tr>
			<?php $i++;endforeach;?>
		</tbody>
</table>
    <script>
      $(document).ready(function () {
            $("#myTable").DataTable({
				language : {
    "decimal":        "",
    "emptyTable":     "ไม่มีข้อมูล",
    "info":           "แสดง _START_ to _END_ จาก _TOTAL_ รายการ",
    "infoEmpty":      "แสดง 0 to 0 จาก 0 รายการ",
    "infoFiltered":   "(กรองจาก _MAX_ รายการทั้งหมด)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "แสดง _MENU_ รายการ",
    "loadingRecords": "Loading...",
    "processing":     "",
    "search":         "ค้นหา:",
    "zeroRecords":    "ค้นหาไม่เจอ",
    "paginate": {
        "first":      "หน้าแรก",
        "last":       "หน้าท้ายสุด",
        "next":       "ถัดไป",
        "previous":   "ก่อนหน้า"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
}
			});
        });
    </script>
<script type="text/javascript">
					function triggerFile(){
						
						$("#image").trigger("click");
						return false;
					}
					function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

		$("#image").change(function() {
						readURL(this);
					});
					</script>


				<?php
				mysqli_close($conn);
				?>