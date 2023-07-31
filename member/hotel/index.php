<?php 
    $sql = "SELECT *,h.hotel_name FROM product h
            LEFT JOIN tb_travelling_type ph ON h.type_hotel_id = ph.travelling_type_id";
?>

 <?php 
$sql = "SELECT * FROM hotel where hotel_user= '". $_SESSION['memberlogin'] ."' ";
$query = mysqli_query($conn,$sql);
?>
		<div class="row justify-content-between">
			<div class="col-auto">
			<h1 class="app-page-title mb-0">จัดการห้องพัก</h1>
</div>
	<div class="col-auto">
</div>
			<hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							<a href="?page=<?=$_GET['page']?>&function=add" class="btn btn-primary text-white mb-2 float-right">เพิ่มข้อมูลห้องพัก</a>
							<table id="myTable" class="table table-hover" style="width: 100%;">
  <thead> 
    <tr>
    <th class="text-center" scope="col">ลำดับ</th>
    <th class="text-center" scope="col">รูป</th>
      <th class="text-center" scope="col">ชื่อที่พัก</th>
      <th class="text-center" scope="col">จำนวนการเข้าชม</th>  
      <th class="text-center" scope="col">เมนู</th>
    </tr>
  </thead>

  <tbody class="text-center">
		<?php 
        $i =1;
        foreach ($query as $data):?>

			<tr>
            <td class="align-middle"><?=$i++?></td>
            <td class="align-middle"><img src="../member/upload/hotel/<?=$data['hotel_image']?>" class="rounded" width="100" height="100">

				<td class="align-middle"><?=$data['hotel_name']?></td>
                <td class="align-middle"><?=$data['view']?></td>
                <td class="align-middle">
					<a href="?page=<?=$_GET['page']?>&function=update&id=<?=$data['hotel_id']?>" class="btn btn-sm btn-warning">แก้ไขข้อมูล</a>
                    <a href="?page=<?=$_GET['page']?>&function=gallery&id=<?=$data['hotel_id']?>" class="btn btn-sm btn-info">แกลลอรี่</a>
					<a href="?page=<?=$_GET['page']?>&function=delete&id=<?=$data['hotel_id']?>" onclick="showConfirmDialog(event)" class="btn btn-sm btn-danger">ลบข้อมูล</a>



                    <script>
function showConfirmDialog(event) {
  event.preventDefault(); // ป้องกันการเปลี่ยนเส้นทาง URL ของลิงก์

  const hotelId = <?=$data['hotel_id']?>;

  Swal.fire({
    title: 'คุณต้องการลบสินค้า',
    text: `คุณต้องการลบสินค้า : ${hotelId} หรือไม่`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'ยืนยัน',
    cancelButtonText: 'ยกเลิก',
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      // ถ้าผู้ใช้กด "ยืนยัน" ให้ดำเนินการลบข้อมูล
      window.location.href = event.target.href;
    }
  });
}
</script>

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
    "info":           "แสดง _START_ ถึง _END_ ทั้งหมด _TOTAL_ รายการ",
    "infoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
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