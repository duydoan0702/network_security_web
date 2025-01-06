<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{asset('public/frontend/css/start.css')}}" rel="stylesheet"> 


</head>
<body>
  <!-- Sidebar -->
  @include("users.elements.sidebar")

  <!-- Content -->
  <div class="content">
    <h1><center>KHÁI NIỆM MẠNG MÁY TÍNH</center></h1>

    <h2>NỘI DUNG CỦA BÀI</h2>
    <ul>
      <li><a href="#khai-niem">1. Khái niệm mạng máy tính</a></li>
      <li><a href="#thiet-bi-dau-cuoi">2. Thiết bị đầu cuối</a></li>
      <li><a href="#moi-truong-truyen-dan">3. Môi trường truyền dẫn</a></li>
      <li><a href="#thiet-bi-mang">4. Thiết bị mạng</a></li>
      <li><a href="#giao-thuc-mang">5. Giao thức mạng</a></li>
      <li><a href="#mo-hinh-mang">6. Mô hình mạng</a></li>
    </ul>

    <h2 id="khai-niem">Khái niệm mạng máy tính</h2>
    <p>
      Mạng máy tính là một hệ thống bao gồm ít nhất hai máy tính được kết nối
      với nhau để trao đổi thông tin và chia sẻ tài nguyên.
    </p>
    <p>
      Một mạng máy tính bao gồm các thiết bị đầu cuối, môi trường truyền dẫn,
      các thiết bị mạng, và các giao thức mạng.
    </p>
    <h2 id="thiet-bi-dau-cuoi">Thiết bị đầu cuối</h2>
    <p>
      Các máy tính trong mạng máy tính có tên gọi khác tổng quát hơn là thiết
      bị đầu cuối (end device) hoặc host. Thiết bị đầu cuối là bất kỳ thiết bị
      tính toán nào có thể làm phát sinh dữ liệu người dùng hoặc là đích đến
      của dữ liệu người dùng.
    </p>
    <h2 id="moi-truong-truyen-dan">Môi trường truyền dẫn</h2>
    <p>
      Môi trường truyền dẫn (transmission media) giúp tín hiệu vật lý có thể
      truyền từ thiết bị này tới thiết bị khác.
    </p>
    <p>Các loại môi trường truyền dẫn phổ biến:</p>
    <p>Đường truyền không dây (wireless media)</p>
    <p>Cáp đồng (copper cable)</p>
    <p>Cáp quang (optical fiber)</p>
    <h2 id="thiet-bi-mang">Thiết bị mạng</h2>
    <p>
      Thiết bị mạng là những máy tính chuyên dụng nằm trên đường đi của thông
      tin và đảm nhiệm nhiều vai trò khác nhau.
    </p>
    <p>Hub, repeater, switch, bridge</p>
    <p>Router</p>
    <p>Modem</p>
    <p>Access point</p>
    <p>Firewall</p>
    <h2 id="giao-thuc-mang">Giao thức mạng</h2>
    <p>
      Giao thức mạng (network protocol) là tập hợp các quy tắc điều khiển quá
      trình truyền thông tin trong mạng.
    </p>
    <p>Các giao thức phổ biến bao gồm TCP/IP, UDP, HTTP, FTP.</p>
    <h2 id="mo-hinh-mang">Mô hình mạng</h2>
    <p>Hiện nay có hai mô hình mạng được sử dụng rộng rãi:</p>
    <p>Mô hình kết nối các hệ thống mở (OSI)</p>
    <p>Mô hình TCP/IP</p>
  </div>

  <script src="{{asset('public/frontend/js/start.js')}}"></script>
</body>
</html>
