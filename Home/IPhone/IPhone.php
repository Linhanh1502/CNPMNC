<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CNPM";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//truyvan
$sql = "SELECT * FROM SanPham limit 4" ;
$result = $conn->query($sql);
$data=array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $data[]=$row;
  }
} else {
  echo "0 results";
}
////
// echo " <pre>";
// var_dump($data);
// echo " </pre>";
// // die;

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>danh muc</title>
  <link rel="stylesheet" href="../header.css">
  <link rel="stylesheet" href="/banner-chitiet.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../style-chitiet.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="../footer.css">
  <link rel="stylesheet" href="../css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="/icon/fontawesome-free-6.3.0-web/css/all.css">

  <link rel="stylesheet" href="/..css/khuyenmai.css">
  <link rel="stylesheet" href="../css/email.css">
  
</head>

<body>
  <header>
    <a href="" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

    <ul class="navbar">
      <li><a href="" class="active">IPhone</a></li>
      <li><a href="">IPad</a></li>
      <li><a href="">Mac</a></li>
      <li><a href="">Watch</a></li>
      <li><a href="">Âm thnah</a></li>
      <li><a href="">Phụ kiện</a></li>
      <li><a href="">Khuyến mãi</a></li>
    </ul>

    <div class="main">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>

      <a href="" class="Cart">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
      <a href="" class="User"> <i class="fa-solid fa-user"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>
     
    </div>


  </header>
<div class="link">
    <div class="link-link">
        <ul>
            <li><a href="../Home.html">Trang chủ</a></li>
            <span> ></span>
            <li><a href="../IPhone/IPhone.html">IPhone</a></li>

        </ul>
    </div>
</div>
  <h1 class="CateName">IPhone</h1>

  <div class="main-body">

<!-- --banner-- -->
    <section class="main-banner swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img class="img" src="./img/banner/ban1.jpeg" alt="">
        </div>

        <div class="slide swiper-slide">
          <img class="img" src="../img/banner/b2.jpeg" alt="">
        </div>
      </div>


      <div class="swiper-button-next "></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>



</div>
  <!-- ---body -->
<div class="loai">
    <ul>
        <li> <a style="color: #0066CC;" href="./IPhone.html">Tất cả</a></li>
        <li><a href="./IPhone14.html">IPhone 14 Series</a></li>
        <li><a href="">IPhone 13 Series</a></li>
        <li><a href="">IPhone 12 Series</a></li>
    </ul>
</div>
<!-- ---danh-sach-dien thoai-- -->


  <div class="row">
    <div class="column">
      <div class="card">
        <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
        <p class="NamePhone">IPhone 12 Pro Max</p>
        <p class="price">
       29.000.000d
        </p>
        </p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
        <p class="NamePhone">IPhone 14 Pro Max</p>
        <p class="price">
       29.000.000d
        </p>
        </p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
        <p class="NamePhone"> IPhone 13 Pro Max</p>
        <p class="price">
       29.000.000d
       
        </p>
        </p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
        <p class="NamePhone">IPhone 12 Pro Max</p>
        <p class="price">
       29.000.000d
        </p>
        </p>
      </div>
    </div>

    <div class="column">
        <div class="card">
          <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
          <p class="NamePhone">IPhone 11 Pro Max</p>
          <p class="price">
         29.000.000d
          </p>
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
          <p class="NamePhone">IPhone 14 Pro </p>
          <p class="price">
         29.000.000d
          </p>
          </p>
        </div>
      </div>
    <div class="column">
        <div class="card">
          <img class="imgPhone" src="/img/iphone/ip1.jpeg" >
          <p class="NamePhone">IPhone 13 Pro</p>
          <p class="price">
         29.000.000d
          </p>
          </p>
        </div>
      </div>
  
  </div>
  


  
 <!-- ---Email-- -->
<div class="email">
 <h2>Đăng ký nhận thông tin từ ShopX</h2>
 <p>Thông tin sản phẩm mới nhất và chương trình khuyến mãi</p>
 <div class="sub">
 <input type="text" name="" placeholder="Nhập email của bạn... " id="email">
 <button>Subscribe</button>
</div>
</div>



</div>
<!-- ---footer-- -->
<div class="footer">
  <i class="cart-shopping-solid.svg"></i>
  saddd
</div>





  <!-- --script -->
  
  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="../js/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>