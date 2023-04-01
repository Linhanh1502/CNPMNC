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
$sql = "SELECT * FROM SanPham limit 5" ;
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
  <link rel="stylesheet" href="./header.css">

  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./style-chitiet.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="./css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="/icon/fontawesome-free-6.3.0-web/css/all.css">

  <link rel="stylesheet" href="../css/email.css">
  <!-- ----chitiet---- -->
  <link rel="stylesheet" href="../css/chitiet.css">
  <link rel="stylesheet" href="../css/slide-chitiet.css">




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
    <!-- -------- -->




  </header>
  <div class="link">
    <div class="link-link">
      <ul>
        <li><a href="./Home.php">Trang chủ</a></li>
        <span> ></span>
        <li><a href="../IPhone/IPhone.html">IPhone</a></li>
        <span> ></span>
        <li><a href="../IPhone/chitiet.html">IPhone 14 Pro Max</a></li>
      </ul>
    </div>
  </div>
  <!-- ------main-body--- -->
  <div class="body-main">
    <div class="top">
      <div class="left">
        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../img/chitiet/ip14-2.jpeg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="../img/chitiet/ip14-2.jpeg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="../img/chitiet/ip14-3.jpeg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div class="slide-img">
     
            
       

        </div>

      </div>
      <div class="right">
        <div class="right-content">
          <h2>IPhone 14 Pro Max 128GB</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <div class="gach"></div>
          <div class="gia">
            <div class="giamoi" id="price">27000000</div>
            <div class="giacu" id="price">34000000</div>
          
          </div>
          <div class="dungluong">
            dung lượng
            <ul>
              <li>
                <label id="dl1" for="">128GB</label>
              </li>
              <li>
                <label id="dl2" for="">256GB</label>
              </li>
              <li>
                <label id="dl3" for="">512GB</label>
              </li>
              <li>                <label id="dl4" for="">1TB</label>
              </li>

            </ul>
          </div>
          <div class="mau">
            màu sắc
            <ul>
          <li><span style="background-color:#4C4B49 ;"></span></li>
          <li><span style="background-color: #E3E5E3;"></span></li>
          <li><span style="background-color: #FCEBD3;"></span></li>
          <li><span style="background-color: #61586B;"></span></li>
            </ul>
          </div>
          <div class="chuongtrinh">
            <div class="km">
             <p class="p-km"> <i class="fa-solid fa-gift"></i> khuyến mãi</p>
              <ul>
                
                  <input type="radio" id="muathang" name="fav_language" value="muathang">
                  <label for="muathang">Mua thẳng</label><br>
                  <input type="radio" id="gop" name="fav_language" value="gop">
                  <label for="gop">Trả góp</label><br>
                  <input type="radio" id="baohanh" name="fav_language" value="baohanh">
                  <label for="baohanh">giá ưu đãi mua kèm bảo hành kim cương</label><br><br>

              </ul>
            </div>
            <div class="uudai">
              <p class="p-km"> <i class="fa-solid fa-gift"></i> Ưu đãi</p>
              <p>Mừng khai trương (duy nhất 25.03 - 26.03 - SL có hạn)</p>
              <p>iPhone 14 Pro Max 128GB giảm 10.000.000đ chỉ còn 26.990.000đ</p>

            </div>
          </div>
          <div class="mua">
            <a href="">            <button class="btnmua">MUA NGAY</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="bot">

      <h2>Gợi ý phụ kiện đi kèm</h2>
      <div class="contain">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

          <?php foreach($data as $key=>$value): ?>

            <div class="swiper-slide">
              <div class="column">
                <div class="card">
                  <img class="imgPhone" src="../img/iphone/ip1.jpeg" >
                  <p class="NamePhone"><?= $value['Tensp']; ?></p>
                  <p class="price">
                  <?= $value['Giasp']; ?>
                  </p>
                  </p>
                </div>
              </div>
          
            </div>
            
          <?php endforeach; ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>
      
      </div>


    <!-- ----read-more-- -->

      <div  class="thongtin">
        <h2 style="text-align:center;">Thông Tin</h2>
        <p>iPhone 14 Pro Max. Bắt trọn chi tiết ấn tượng với Camera Chính 48MP. Trải nghiệm iPhone theo cách hoàn toàn mới với Dynamic Island và màn hình Luôn Bật. Công nghệ an toàn quan trọng –
           Phát Hiện Va Chạm  thay bạn gọi trợ giúp khi cần kíp <br>
           <span id="dots"></span>
           <span id="more">
            Tính năng nổi bật
      
          Màn hình Super Retina XDR 6,7 inch với tính năng Luôn Bật và ProMotion
          Dynamic Island, một cách mới tuyệt diệu để tương tác với iPhone
          Camera Chính 48MP cho độ phân giải gấp 4 lần
          Chế độ Điện Ảnh nay đã hỗ trợ 4K Dolby Vision tốc độ lên đến 30 fps
          Chế độ Hành Động để quay video cầm tay mượt mà, ổn định
          Công nghệ an toàn quan trọng – Phát Hiện Va Chạm thay bạn gọi trợ giúp khi cần kíp
          Thời lượng pin cả ngày và thời gian xem video lên đến 29 giờ
          A16 Bionic, chip điện thoại thông minh tuyệt đỉnh. Mạng di động 5G siêu nhanh
          Các tính năng về độ bền dẫn đầu như Ceramic Shield và khả năng chống nước
          iOS 16 đem đến thêm nhiều cách để cá nhân hóa, giao tiếp và chia sẻ
          Pháp lý
          
          SOS Khẩn Cấp sử dụng kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.
          Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình theo đường chéo là 6,69 inch. Diện tích hiển thị thực tế nhỏ hơn.
          Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập  để biết thêm thông tin.
          Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .
          iPhone 14 Pro Max có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt.
          Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.
          Một số tính năng không khả dụng tại một số quốc gia hoặc khu vực.</span>
            </p>
        <button class="readmore" onclick="myFunction()" id="myBtn">Xem Thêm</button>
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

  <!-- ---footer-- -->
  <div class="footer">
    <i class="cart-shopping-solid.svg"></i>
    saddd
  </div>





  <!-- --script -->
  <script src="../js/chitiet.js"></script>
  <script src="../script.js"></script>
  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="../js/swiper-bundle.min.js"></script>

  <script>
    var num = document.getElementsByName("giamoi").textContent; 
let text = num.toLocaleString();

document.getElementById("price").innerHTML = text;
  </script>

  <!-- ------goiy--- -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script src="../js/chitiet2.js"></script>
  <!-- -----readmore--- -->
  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Xem Thêm"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Thu Gọn"; 
        moreText.style.display = "inline";
      }
    }
    </script>
</body>

</html>