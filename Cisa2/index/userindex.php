<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="index_img/logo.png">
        <title>Your Game Store</title>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <style>
          .footer{
            width: 100%;
            height: 100px;
            background-color:#929292;
          }
        </style>
        <body>
  <!-- ส่วนเริ่มต้นเมนูบาร์ -->
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="userindex.php">
        <img src="../index_img/logo.png" alt="" width="30" height="30n" class="d-inline-block align-text-top">Your Game Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">สินค้า</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            หมวดหมู่
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../typegame/type1.php">เกมจำลอง</a></li>
            <li><a class="dropdown-item" href="#">เกมเอาชีวิตรอด</a></li>
            <li><a class="dropdown-item" href="#">เกมกีฬา</a></li>
            <li><a class="dropdown-item" href="#">เกมเนื้อเรื้อง</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../addlists/index.php">จัดการ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../sign-in/index.php">เข้าสู่ระบบ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- ส่วนสิ่นสุดเมนูบาร์ -->
<!-- ส่วนเริ่มต้นแบนเดอร์ -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../index_img/Your_Game_Store1.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="../index_img/Your_Game_Store1.png" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- ส่วนสิ่นสุดแบนเดอร์ -->
<!-- ส่วนเริ่มต้น Body -->
    <div class="co2-md-6">
      <?php include "body.php"; ?>
      <?php include "showgame.php"; ?>

<!-- ส่วนสิ่นสุด Body -->
<!-- ส่วนเริ่มต้น Footer --> 
    <div class="footer">
      <p align="center" style="margin-top:10px">
        &copy: จัดทำโดย | นักศึกษาวิทยาลัยเทคนิคพะเยา
      </p>
    </div>
<!-- ส่วนสิ่นสุด Footer -->
        </body>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>
</html>
