<?php include('adminconnect/dbcon.php')?>
<?php 
$sql = "SELECT * FROM adminuser";
$query = mysqli_query($conn,$sql);
?>
		<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">ตารางผู้ดูแลระบบ</h1>
</div>
	<div class="col-auto">
</div>
			<hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							<a href="?page=<?=$_GET['page']?>&function=add" class="btn btn-primary text-white mb-2 float-right">เพิ่มข้อมูลผู้ดูแลระบบ</a>
							<table id="myTable" class="table table-hover" style="width: 100%;">
  <thead> 
    <tr>
      <th class="text-center" scope="col">รูปภาพ</th>
      <th class="text-center" scope="col">ชื่อผู้ใช้</th>
      <th class="text-center" scope="col">ชื่อ - นามสกุล</th>
      <th class="text-center" scope="col">อีเมล์</th>
	  <th class="text-center" scope="col">เบอร์ติดต่อ</th>
	  <th class="text-center" scope="col">เมนู</th>
    </tr>
  </thead>

  <tbody class="text-center">
		<?php foreach ($query as $data):?>
			<tr>
				<td class="align-middle"><img src="../admin/upload/admin/<?=$data['admin_image']?>" class="rounded" width="100" height="100">
				</td>
				<td class="align-middle"><?=$data['admin_user']?></td>
				<td class="align-middle"><?=$data['admin_firstname'].' '.$data['admin_lastname']?></td>
				<td class="align-middle"><?=$data['admin_email']?></td>
				<td class="align-middle"><?=$data['admin_phone']?></td>

				<td class="align-middle">
					<a href="?page=<?=$_GET['page']?>&function=update&id=<?=$data['admin_id']?>" class="btn btn-sm btn-warning">แก้ไขข้อมูล</a>
					<a href="?page=<?=$_GET['page']?>&function=delete&id=<?=$data['admin_id']?>" onclick="return confirm('คุณต้องการลบผู้ดูแลระบบ : <?=$data['admin_user']?> หรือไม่')"; class="btn btn-sm btn-danger">ลบข้อมูล</a>
		</td>
			</tr>
			<?php endforeach;?>
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


				<?php
				mysqli_close($conn);
				?>