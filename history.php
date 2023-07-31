<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Blog Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 1.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5aa628">
  <div class="container-fluid">
    <a style ="color: #3c6afc" class="navbar-brand" href="#">สถานที่ท่องเที่ยวแม่ระมาด</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ความเป็นมา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">สถานที่ท่องเที่ยว</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ที่พัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ร้านอาหาร</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        
      </ul>
      <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
    </div>
  </div>
</nav>



</div>




<main class="container">
 

  

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        ความเป็นมา
      </h3>
      อำเภอแม่ระมาดสันนิษฐานว่า  เดิมทีเป็นที่อยู่อาศัยของชาวกะเหรี่ยงมาเป็นเวลากว่า  100 ปี ต่อมามีประชาชนในจังหวัดภาคเหนือหลายจังหวัด
        อาทิ  ลำพูน  เชียงใหม่  ลำปาง แพร่  น่าน  พากันอพยพมาหาพื้นที่ทำมาหากิน โดยอาศัยลำห้วยแม่ระมาดในการประกอบอาชีพและตั้งถิ่นฐานบ้านเรือน   เมื่อปรากฏว่าเป็นท้องที่อุดมสมบูรณ์ดี  
        ประกอบอาชีพเกษตรกรรมได้ผลดี  จึงได้ชักชวนญาติพี่น้องอพยพลงมาตั้งถิ่นฐานเพิ่มมากขึ้น  จนกระทั่งเป็นหมู่บ้านใหญ่ เรียกกันว่า “บ้านแม่ระมาด” ตามชื่อลำห้วย  และในขณะนั้นก็มีฐานะเป็นเพียงเมืองหน้าด่านขึ้นกับอำเภอแม่สอด  
        จังหวัดตาก ต่อมาพญาอินทรคีรี  นายอำเภอแม่สอดสมัยนั้นได้พิจารณาเห็นว่า  ตำบลแม่ระมาดได้มีการขยายตัวเติบโตอย่างรวดเร็วและอยู่ห่างไกลจากอำเภอแม่สอดมาก  การคมนาคมไม่สะดวก  เพื่อประโยชน์แก่การปกครอง
         จึงได้จัดตั้งกิ่งอำเภอแม่ระมาดขึ้น เมื่อปี พ.ศ.๒๔๔๐  จนกระทั่งเมื่อวันที่ ๑ มกราคม พ.ศ.๒๔๙๔  ทางราชการจึงได้ยกฐานะเป็นอำเภอแม่ระมาด  โดยมีขุนโสภิตบรรณลักษณ์  หรือนายอำพัน  กิตติขจรเป็นนายอำเภอคนแรก<br><br>
     
      <img src="https://www.maeramat.com/images/editor_images/images/1.png"><br>สภาพตัวเมืองของอำเภอแม่ระมาด

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 10rem;">
       

      

      
      </div>
    </div>
  </div>

</main>


<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">หน้าหลัก</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted"><center> &copy; <?php echo date("Y"); ?> Jirasak & Paradorn

<a href="#">Back to top</a>
  </footer>
</div>
      <p class="text-muted">
    






    
  

<div id="fatkun-drop-panel">
        <a id="fatkun-drop-panel-close-btn">×</a>
            <div id="fatkun-drop-panel-inner">
                <div class="fatkun-content">
                    <svg class="fatkun-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5892"><path d="M494.933333 782.933333c2.133333 2.133333 4.266667 4.266667 8.533334 6.4h8.533333c6.4 0 10.666667-2.133333 14.933333-6.4l2.133334-2.133333 275.2-275.2c8.533333-8.533333 8.533333-21.333333 0-29.866667-8.533333-8.533333-21.333333-8.533333-29.866667 0L533.333333 716.8V128c0-12.8-8.533333-21.333333-21.333333-21.333333s-21.333333 8.533333-21.333333 21.333333v588.8L249.6 475.733333c-8.533333-8.533333-21.333333-8.533333-29.866667 0-8.533333 8.533333-8.533333 21.333333 0 29.866667l275.2 277.333333zM853.333333 874.666667H172.8c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333333H853.333333c12.8 0 21.333333-8.533333 21.333334-21.333333s-10.666667-21.333333-21.333334-21.333333z" p-id="5893"></path></svg>
                    <div class="fatkun-title">Drag and Drop</div>
                    <div class="fatkun-desc">The image will be downloaded</div>
                </div>
            </div>
    </div></body></html>