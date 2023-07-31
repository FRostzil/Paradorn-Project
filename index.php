<?php 
include('connect/conect.php');




?>




<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="slide.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@200&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        @media only screen and (min-width: 992px) {
          .menu-custom:hover{
              background-color: gray;
              border-radius: 5px;
          }
          .active-menu-custom{
              border-bottom: 1px solid white;
          }

        }

  </style>


<body>
  
<?php require ("navbar.php") ?>



<div class="container"></div>
<section>
  <img src="img/stars.png" id="stars">
  <img src="img/moon.png" id="moon">
  <img src="img/moutains_behind.png" id="moutains_behind">
  <h2 id="text">เเม่ระมาด</h2>
  <a href="#sec" id ="btn">ความเป็นมา</a>
  <img src="img/moutains_front.png" id="moutains_front">
</section>
<div class="sec" id="sec">
  <h2>อำเภอเเม่ระมาด</h2>
  <p>อำเภอแม่ระมาดสันนิษฐานว่า  เดิมทีเป็นที่อยู่อาศัยของชาวกะเหรี่ยงมาเป็นเวลากว่า  100 ปี ต่อมามีประชาชนในจังหวัดภาคเหนือหลายจังหวัด 
     อาทิ  ลำพูน  เชียงใหม่  ลำปาง แพร่  น่าน  พากันอพยพมาหาพื้นที่ทำมาหากิน โดยอาศัยลำห้วยแม่ระมาดในการประกอบอาชีพและตั้งถิ่นฐานบ้านเรือน 
       เมื่อปรากฏว่าเป็นท้องที่อุดมสมบูรณ์ดี  ประกอบอาชีพเกษตรกรรมได้ผลดี  จึงได้ชักชวนญาติพี่น้องอพยพลงมาตั้งถิ่นฐานเพิ่มมากขึ้น  จนกระทั่งเป็นหมู่บ้านใหญ่
        เรียกกันว่า “บ้านแม่ระมาด” ตามชื่อลำห้วย  และในขณะนั้นก็มีฐานะเป็นเพียงเมืองหน้าด่านขึ้นกับอำเภอแม่สอด  จังหวัดตาก ต่อมาพญาอินทรคีรี  
        นายอำเภอแม่สอดสมัยนั้นได้พิจารณาเห็นว่า  ตำบลแม่ระมาดได้มีการขยายตัวเติบโตอย่างรวดเร็วและอยู่ห่างไกลจากอำเภอแม่สอดมาก  การคมนาคมไม่สะดวก
          เพื่อประโยชน์แก่การปกครอง จึงได้จัดตั้งกิ่งอำเภอแม่ระมาดขึ้น เมื่อปี พ.ศ.๒๔๔๐  จนกระทั่งเมื่อวันที่ ๑ มกราคม พ.ศ.๒๔๙๔  ทางราชการจึงได้ยกฐานะเป็นอำเภอแม่ระมาด
            โดยมีขุนโสภิตบรรณลักษณ์  หรือนายอำพัน  กิตติขจรเป็นนายอำเภอคนแรก<br><br>
            <img src="img/map.png"><br><br>
    อำเภอแม่ระมาดแบ่งเขตการปกครองย่อยออกเป็น 6 ตำบล 57 หมู่บ้าน ได้แก่<br>
1. ตำบลแม่ระมาด (Mae Ramat)  8 หมู่บ้าน<br>
2. แม่จะเรา (Mae Charao)  9 หมู่บ้าน<br>
3. ขะเนจื้อ (Khane Chue)  14 หมู่บ้าน<br>
4. แม่ตื่น (Mae Tuen)  13 หมู่บ้าน<br>
5. สามหมื่น (Sam Muen)  5 หมู่บ้าน<br>
6. พระธาตุ (Phra That)  8 หมู่บ้าน</p>
</div>

<?php require ("footer.php")?>

<script>
  let stars = document.getElementById('stars');
  let moon = document.getElementById('moon');
  let moutains_behind = document.getElementById('moutains_behind');
  let text = document.getElementById('text');
  let btn = document.getElementById('btn');
  let moutains_front = document.getElementById('moutains_front');

  window.addEventListener('scroll', function(){
    let value = window.scrollY;
    stars.style.left = value * 0.25 + 'px';
    moon.style.top = value * 1.05 + 'px';
    moutains_behind.style.top = value * 0.5 + 'px';
    moutains_front.style.top = value * 0 + 'px';
    text.style.marginRight = value * 4 + 'px';
    text.style.marginTop = value * 1.5 + 'px';
    btn.style.marginTop = value * 1.5 + 'px';
  })
</script>

