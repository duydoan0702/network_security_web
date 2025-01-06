<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phân loại mạng máy tính</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/start.css')}}" />
  </head>
  <body>

    <!-- Sidebar -->
    @include("users.elements.sidebar")

    <!-- Main content -->
    <div class="content">
      <h1><center>PHÂN LOẠI MẠNG MÁY TÍNH</center></h1>

      <h2>NỘI DUNG CỦA BÀI</h2>
      <ul>
        <li><a href="#mang-ca-nhan-pan">1. Mạng cá nhân PAN</a></li>
        <li><a href="#mang-cuc-bo-lan">2. Mạng cục bộ LAN</a></li>
        <li><a href="#mang-dien-rong-wan">3. Mạng diện rộng WAN</a></li>
        <li><a href="#mang-toan-cau-internet">4. Mạng toàn cầu Internet</a></li>
        <li><a href="#ket-luan">5. Kết luận</a></li>
      </ul>

      <h2 id="mang-ca-nhan-pan">Mạng Cá Nhân PAN</h2>
      <p>
        Mạng cá nhân PAN (Personal Area Network) cho phép các thiết bị giao tiếp
        qua phạm vi của một người. Một ví dụ phổ biến là mạng không dây kết nối
        máy tính với các thiết bị ngoại vi của nó.
      </p>
      <p>
        Hầu hết mọi máy tính đều có màn hình, bàn phím, chuột và máy in kèm
        theo. Một số công ty đã cùng nhau thiết kế một mạng không dây tầm ngắn
        gọi là Bluetooth để kết nối các thành phần này với máy tính.
      </p>
      <p>
        Một loại PAN hoàn toàn khác được hình thành khi một thiết bị y tế nhúng
        như máy điều hòa nhịp tim, máy bơm insulin hoặc máy trợ thính nói chuyện
        với điều khiển từ xa do người dùng vận hành.
      </p>
      <p>
        PAN cũng có thể được xây dựng với các công nghệ khác giao tiếp trong
        phạm vi ngắn, chẳng hạn như RFID trên thẻ thông minh và sách thư viện.
      </p>

      <h2 id="mang-cuc-bo-lan">Mạng cục bộ LAN</h2>
      <p>
        Mạng cục bộ, viết tắt theo tiếng Anh là LAN (Local Area Network), là
        mạng tư nhân triển khai trong phạm vi một tòa nhà, một khu vực (trường
        học hay cơ quan chẳng hạn) có cỡ chừng vài km.
      </p>
      <p>
        Mạng LAN sử dụng một số công nghệ mạng LAN riêng biệt, bao gồm môi
        trường truyền dẫn và thiết bị mạng dành riêng cho LAN.
      </p>
      <p>Giới hạn về phạm vi hoạt động từ vài mét cho đến vài trăm mét.</p>
      <p>
        Vận tốc truyền dữ liệu thông thường là 100 Mbps, 1 Gbps, và gần đây là
        100 Gbps.
      </p>
      <p>
        Thường là mạng tư nhân, tức là thuộc sở hữu của các gia đình, trường
        học, cơ quan, v.v.
      </p>
      <p>
        Cần lưu ý rằng, phạm vi hoạt động và tốc độ truyền dữ liệu do công nghệ
        LAN quyết định. Các công nghệ LAN thường ưu tiên tốc độ truyền thay vì
        khoảng cách truyền.
      </p>

      <h2 id="mang-dien-rong-wan">Mạng diện rộng WAN</h2>
      <p>
        Mạng diện rộng WAN (Wide Area Network) là loại mạng có thể triển khai
        trên vùng địa lý rộng lớn, từ phạm vi 1 tỉnh, 1 khu vực, 1 quốc gia, hay
        cả lục địa.
      </p>
      <p>
        Sử dụng rất nhiều công nghệ mạng khác nhau và khác biệt với các công
        nghệ LAN.
      </p>
      <p>
        Phạm vi gần như không giới hạn, từ vài trăm mét cho đến vài ngàn km.
      </p>
      <p>Tốc độ truyền dữ liệu thường thấp hơn so với LAN.</p>
      <p>
        Thường do các công ty cung cấp dịch vụ mạng / Internet sở hữu và vận
        hành.
      </p>
      <p>
        Các công nghệ WAN thường ưu tiên khoảng cách truyền và độ ổn định, thay
        vì tốc độ truyền.
      </p>

      <h2 id="mang-toan-cau-internet">Mạng toàn cầu Internet</h2>
      <p>
        Mạng toàn cầu Internet (chữ I viết hoa) có thể xem là một mạng WAN có
        phạm vi la toàn thế giới. Tuy nhiên, mạng Internet có một số điểm khác
        biệt với WAN thông thường:
      </p>
      <p>
        Mạng Internet có thể kết nối tất cả các mạng LAN và WAN trên toàn thế
        giới.
      </p>
      <p>Mạng Internet không do một tổ chức hoặc cá nhân nào sở hữu.</p>
      <p>
        Đôi khi chúng ta có thể gặp thuật ngữ "internet" (chữ i viết thường).
        Đây là từ viết tắt của "internetwork", thường dịch là liên mạng. Liên
        mạng internet là một mạng của các mạng. Hiểu một cách đơn giản, nếu có
        nhiều mạng khác nhau kết nối lại thành một mạng lớn hơn, đó là một liên
        mạng internet.
      </p>

      <h2 id="ket-luan">Kết luận</h2>
      <p>
        Các loại mạng máy tính như PAN, LAN, WAN, và Internet có vai trò quan
        trọng trong việc kết nối các thiết bị và hệ thống, đáp ứng các nhu cầu
        giao tiếp và chia sẻ tài nguyên trong các phạm vi khác nhau.
      </p>
    </div>
  </body>
</html>
