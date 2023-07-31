<?php
require_once 'F:/xampp/htdocs/Travelling/connect.php';
if(isset($_POST['submit'])){
/* echo '<pre>';
print_r($_FILES);
echo '</pre>'; */

        foreach ($_FILES['upload']['tmp_name'] as $key => $value ){
                $files_names = $_FILES['upload']['name'];
                $extention = strtolower(pathinfo($files_names[$key], PATHINFO_EXTENSION));
                $supported = array('jpg', 'png', 'jpeg');
                if( in_array($extention, $supported) ){
                        $newname = rand(0, microtime(true)).'.'.$extention;
                         if(move_uploaded_file($_FILES['upload']['tmp_name'][$key], "F:/xampp/htdocs/Travelling/img/imgtra/".$newname)){
                                $sql = "INSERT INTO tb_travelling_image (image, travelling_id, created_at)
                                         VALUES (:image, 1, :datetime)";
                                $stmt = $conn->prepare($sql);
                                $params = array(
                                        'image' => $newname,
                                        'datetime' => date("Y-m-d h:i:s")
       );
          $stmt->execute ($params);
          echo 'อัปรูปสำรเ็จแล้ว';
                }                               
 } else {
                        echo 'ไม่รองรับนามสกุลไฟล์นี้: '.$extention;
                }
        }
      


        }



        