<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$showMaps=mysqli_fetch_array(mysqli_query($conn,'SELECT * FROM hotel WHERE hotel_id= '.$_GET['mapsId'])); //มีการส่งค่า id ที่ถูกเก็บไว้ในค่า mapId ผ่านทาง URL , โดยเอามาเปรียบเทียบว่า ตรงกับ id  ในตาราง airports หรือเปล่า , ถ้าตรงกันก็ทำให้แสดงข้อมูล array มาเป็นแถวๆออกมา , แล้วเก็บไว้ในตัวแปร $showMaps

$name=$showMaps['hotel_name']; //ดึงค่า name ที่มาจาก Fleid name ใน database จากตาราง airports มาเก็บไว้ในตัวแปร $name
$lati=$showMaps['LAT']; //ดึงค่า lati ที่มาจาก Fleid lati ใน database จากตาราง airports มาเก็บไว้ในตัวแปร $lati
$longti=$showMaps['LONG']; //ดึงค่า longti ที่มาจาก Fleid longti ใน database จากตาราง airports มาเก็บไว้ในตัวแปร $longti


?>