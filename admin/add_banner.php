<?php include 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลสินค้า</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="sb-nav-fixed">
<?php require ("menu.php") ?>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6 col-lg-7 d-flex align-items-center bg-white" style="border-radius: 12px;">
              <div class="card-body p-4 p-lg-5 text-black">
                <div class="alert alert-success h4 text-center">เพิ่มข้อมูลสินค้า</div>
                <form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">

                    <label class="form-label">รหัสสินค้า :</label>
                    <input type="text" name="pid" class="form-control" placeholder="รหัสสินค้า..." required/>  

                    <label class="form-label">ชื่อสินค้า :</label>
                    <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า..." required/>
                  
                    <label class="form-label">รายละเอียดสินค้า :</label>
                    <textarea class="form-control" name="detail" placeholder="รายละเอียดสินค้า..." required ></textarea>

                  <label class="form-label">ประเภทสินค้า :</label>
                    <select class="form-select" name="typeID" >
                      <?php 
                      $sql="SELECT * FROM product_type ORDER BY type_name";
                      $hand=mysqli_query($conn,$sql);
                      while($row=mysqli_fetch_array($hand)){
                      ?>
                      <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
                      <?php
                      }
                      mysqli_close($conn)
                      ?>
                    </select>

                    <label class="form-label">ราคานำเข้า :</label>
                    <input type="number" name="imprice" class="form-control" placeholder="ราคา..." required/>

                    <label class="form-label">ราคาขาย :</label>
                    <input type="number" name="price" class="form-control" placeholder="ราคา..." required/>
                  
                    <label class="form-label">จำนวน :</label>
                    <input type="number" name="pnum" class="form-control" placeholder="จำนวน..." required/>
                  
                    <label class="form-label mt-4">รูปภาพ :</label>
                    <input type="file" name="file1" required/> <br><br>

                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <a class="btn btn-danger" role="button" href="show_product.php">ยกเลิก</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script> 