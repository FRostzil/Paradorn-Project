<?php 
$sql = "SELECT *,t.travelling_name FROM tb_travelling t
LEFT JOIN tb_travelling_type tt ON t.type_travelling_id = tt.travelling_type_id";
$query = mysqli_query($conn,$sql);
?>

		<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">จัดการสถานที่ท่องเที่ยว</h1>
</div>
	<div class="col-auto">
</div>
			<hr class="mb-4">
                <div class="row g-20 settings-section">
	                <div class="col-100 col-md-100">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							<a href="?page=<?=$_GET['page']?>&function=add" class="btn btn-primary text-white mb-2 float-right">เพิ่มสถานที่ท่องเที่ยว</a>
							<table id="myTable" class="table table-hover" style="width: 100%;">
  <thead> 
    <tr>
    <th class="text-center" scope="col">ลำดับ</th>
    <th class="text-center" scope="col">รูป</th>
      <th class="text-center" scope="col">ชื่อสถานที่ท่องเที่ยว</th>
      <th class="text-center" scope="col">เมนู</th>

    </tr>
  </thead>

  <tbody class="text-center">
		<?php 
        $i =1;
        foreach ($query as $data):?>

			<tr>
            <td class="align-middle"><?=$i++?></td>
            <td class="align-middle"><img src="../member/upload/travelling/<?=$data['travelling_img']?>" class="rounded" width="100" height="100">

				<td class="align-middle"><?=$data['travelling_name']?></td>
                <td class="align-middle">
					<a href="?page=<?=$_GET['page']?>&function=update&id=<?=$data['travelling_id']?>" class="btn btn-sm btn-warning">แก้ไขข้อมูล</a>
          <a href="?page=<?=$_GET['page']?>&function=gallery&id=<?=$data['travelling_id']?>" class="btn btn-sm btn-info">แกลลอรี่</a>
					<a href="?page=<?=$_GET['page']?>&function=delete&id=<?=$data['travelling_id']?>" onclick="return confirm('คุณต้องการลบสถานที่ท่องเที่ยว ID : <?=$data['travelling_id']?> หรือไม่')"; class="btn btn-sm btn-danger">ลบข้อมูล</a>
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