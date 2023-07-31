<?php include('../adminconnect/dbcon.php');

        if(isset($_REQUEST['btn'])){
                $image =$_FILES["image"];
             
                  $file_name =$_FILES["image"]["name"];
                  $target = "../member/upload/test/";
                  $image_name =implode(",",$file_name);

                  if(!empty($image_name)){

                        foreach ($image_name as $key => $val) {
                                
                                $targetPath = $target .$val;

                                move_uploaded_file($_FILES["image"]["tmp_name"][$key],$targetPath);

                                

                        }

                  }
        }   
                

          /*    echo "<pre>";
       print_r($image);      
             echo "</pre>"; */

                // $image_name = $_FILES['image']["name"];

            

        
?>


<form action="" method="post" enctype="multipart/form-data">
										<input type="file" name="image[]" multiple="">
                                        <input type="submit" name="btn" value="Upload">
								
							    </form>
