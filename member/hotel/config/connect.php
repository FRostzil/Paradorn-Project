<?php
$servername = "localhost";   //ให้มีการเชื่อมต่อไปที่ localhost phpmyamdin
$username = "root";          // Username แต่ละคนไม่เหมือนกัน , แต่ปกติจะเป็น root
$password = "";              //Password ถ้ามีก็ใส่ , ถ้าไม่มี ก็กำหนดให้เป็นค่าว่าง ""
$dbname = "travelling";  //กำหนดในการเชื่อมต่อไปที่ฐานข้อมูล table_airport


$conn = new mysqli($servername, $username, $password, $dbname); //ทำการเชื่อมต่อฐานข้อมูล
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {                             //ตรวจสอบว่ามีการเชื่อมต่อฐานข้อมูลหรือยัง
  die("Connection failed: " . $conn->connect_error); 
}



?> 