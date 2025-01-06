<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/start.css')}}" />
  </head>
  <body>

     <!-- Sidebar -->
     @include("users.elements.sidebar")

    <div class="content">
      <h1><center>KHÁI NIỆM CƠ BẢN VỀ MẠNG MÁY TÍNH</center></h1>

      <h2>NỘI DUNG CỦA BÀI</h2>
      <ul>
        <li><a href="#binary-system">1. Hệ số đếm nhị phân</a></li>
        <li><a href="#hexadecimal-system">2. Hệ số đếm thập lục phân</a></li>
        <li><a href="#data-units">3. Đơn vị đo khối lượng thông tin</a></li>
        <li>
          <a href="#byte-bit-visual"
            >4. Cách biểu diễn chuỗi byte và bit bằng hình ảnh</a
          >
        </li>
        <li><a href="#data-speed">5. Đơn vị đo tốc độ truyền dữ liệu</a></li>
        <li><a href="#conclusion">6. KẾT LUẬN</a></li>
      </ul>

      <h2 id="binary-system">Hệ số đếm nhị phân</h2>
      <p>
        Hệ số đếm nhị phân được sử dụng trong các phép tính toán liên quan đến
        địa chỉ máy tính (còn gọi là địa chỉ IP).
      </p>
      <h3>Quy tắc chuyển từ số thập phân sang số nhị phân</h3>
      <img src="{{asset('public/frontend/images/start/tentotwo.png')}}" />
      <p>
        Để đổi một số thập phân sang nhị phân, chúng ta lấy số muốn đổi sang nhị
        phân chia với 2 và sau đó lấy kết quả chia tiếp tục chia với 2, và lập
        lại phép chia này cho đến khi ta nhận được kết quả là 0 (từ trên xuống,
        theo mũi tên màu xanh). Ở phép chia này, ta lấy dư là 0 và 1. Sau khi
        chia đến kết quả bằng 0, ta sẽ lấy các con số dư ghi lại từ dưới lên
        (theo chiều mũi tên màu đỏ) ta được day số gồm 0 và 1, đây chính là giá
        trị ta cần tìm.
      </p>
      <h3>Quy tắc chuyển từ số nhị phân sang số thập phân</h3>
      <img src="{{ asset('public/frontend/images/start/twototen.png') }}" />
      <p>
        Để đổi giá trị Nhị phân ra thành Thập phân, ta lấy dãy số Nhị phân cần
        chuyển, nhân lần lượt các phần tử của chúng bắt đầu từ phần tử cuối
        (theo chiều mũi tên màu đỏ) với 20 cho đến 2n-1 (với n là số phần tử của
        dãy số), sau đó, chúng ta tiến hành cộng các giá trị tìm được từ phép
        nhân, ta sẽ được kết quả một con số dưới dạng Thập phân.
      </p>

      <h2 id="hexadecimal-system">Hệ số đếm thập lục phân</h2>
      <p>
        Hệ số đếm cơ số 16 (hệ thập lục phân) được sử dụng cho địa chỉ các thiết
        bị mạng. Hệ cơ số 16 chữ số và chữ cái 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A,
        B, C, D, E, F. Trong đó, A tương đương với 10, B là 11, C là 12, D là
        13, E là 14, F là 15. Ký tự có thể viết hoa hoặc viết thường. Ví dụ, địa
        chỉ vật lý (địa chỉ MAC) của một card mạng máy tính có thể có dạng nhu'
        sau: F8-OF-41-8E-2A-E1. Trong một số trường hợp, để tránh nham lẫn,
        người ta viết số ở hệ thập lục phân với tiền tố 0x (số 0 và chữ x). Ví
        dụ, 0x123456. Quy tắc đổi từ số thập phân sang số thập lục phân (và
        ngược lại) tương tự như quy tắc chuyển đổi số nhị phân.
      </p>

      <h2 id="data-units">Đơn vị đo khối lượng thông tin</h2>
      <p>
        Đơn vị đo khối lượng thông tin cơ bản là bit, viết tắt là b (lưu ý chữ b
        viết thường). Một bit tương ứng với giá trị nhị phân "0" hoặc "1".
      </p>

      <p>
        Ngoài đơn vị bit, người ta con dùng một so đơn vị dẫn xuất khác như sau:
      </p>
      <ul class="ct">
        <li>· 1000 kbit kilobit</li>
        <li>. 1000^2 Mbit megabit</li>
        <li>· 1000^3 Gbit gigabit</li>
        <li>. 1000^4 Tbit terabit</li>
        <li>. 1000^5 Pbit petabit</li>
        <li>. 1000^6 Ebit exabit</li>
        <li>· 1000^7 Zbit zettabit</li>
        <li>. 1000^8 Ybit yottabit</li>
      </ul>
      <p>
        Để phân biệt với loại đơn vị dẫn xuất nhị phân (dưới đây), các đơn vị
        dẫn xuất trên còn được gọi la đon vị dẫn xuat thap phan, tuc la đon vị
        sau lớn hơn đơn vị trước 1000 (10^3) lần.
      </p>
      <p>
        Đôi khi chúng ta cũng gặp một số đơn vị dẫn xuất đặc biệt, gọi là đơn vị
        dẫn xuất dạng nhị phân. Loại đơn vị dẫn xuất này khác biệt với các loại
        bên trên ở chỗ, chúng hơn kém nhau 1024 lần (tức là 2^10 lần), chứ không
        hơn kém nhau 1000 lần (tức 10^3) như đơn vị dẫn xuất thập phân.
      </p>
      <ul class="ct">
        <li>. 1024 Kibit kibibit (Kbit Kb kilobit *)</li>
        <li>. 1024^2 Mibit mebibit (Mbit Mb megabit *)</li>
        <li>. 1024^3 Gibit gibibit (Gbit Gb gigabit *)</li>
        <li>. 1024^4 Tibit tebibit (Tbit Tb terabit *)</li>
        <li>. 1024^5 Pibit pebibit -</li>
        <li>. 1024^6 Eibit exbibit -</li>
        <li>· 1024^7 Zibit zebibit -</li>
        <li>. 1024^8 Yibit yobibit -</li>
      </ul>

      <p>
        * Có thể để ý, trong bảng trên có một số đơn vị ở phần đơn vị dẫn xuất
        nhị phân. Đây là các đơn vị có thể gây lẫn lộn giữa hai loại dẫn xuất
        nhị phân và thập phân. Ví dụ, trước đây, khi nói 1 Kb (1 kilobit), người
        ta sẽ hiểu đó là 1024 bit, theo kiểu nhị phân. Hiện nay, kilobit hay Kb
        được thong nhat hiểu theo dẫn xuat thap phan, tuc la 1000 bit.
      </p>
      <p>
        Đơn vị khối lượng thông tin khác là byte, viết tắt là B (lưu ý chữ B
        viết hoa). Một byte chứa 8 bit. Trong một số trường hợp, một byte cũng
        được gọi là 1 octet.
      </p>

      <h2 id="byte-bit-visual">
        Cách biểu diễn chuỗi byte và bit bằng hình ảnh
      </h2>
      <p>
        Khi nói về các giao thức sau này, chúng ta sẽ thường xuyên gặp khái niệm
        "header" - một chuỗi byte/bit mô tả các thông tin điều khiển của giao
        thức.
      </p>
      <p>
        Do một chuỗi bit thường rất dài, chúng ta không thể viết nó trên cùng
        một dòng. Thay vào đó, người ta sử dụng cách viết gần giống như biểu
        diễn một ma trận. Cụ thể, người ta thường chỉ viết 32 bit (4 byte) trên
        mỗi dòng, và nhóm mỗi 8 bit vào một octet/byte.
      </p>
      <p>
        Để tiện lợi cho việc tính toán ra vị trí của bit hoặc byte trong mảng,
        người ta đưa vào hai dòng phụ: dòng đầu đánh số byte từ 0 đến 3 (dòng
        Octet), dòng 2 đánh số bit từ 0 đến 31 (dòng Bit). Đầu mỗi dòng người ta
        thêm giá trị offset của byte và offset của bit.
      </p>
      <p>
        Vị trí của byte/octet ở mỗi dòng tính bằng offset của byte/octet ở dòng
        đó cộng với số thứ tự cột tương ứng ở dòng Octet. Tương tự, vị trí của
        bit ở mỗi dòng bằng offset của bit của dòng đó cộng số thứ tự của cột
        tương ứng ở dòng Bit.
      </p>
      <img src="{{ asset('public/frontend/images/picBitByte.png') }}" style="margin-left: 20px" />
      <p>
        Đây là một ví dụ sử dụng hai dòng để mô tả một mảng 8 byte (64 bit), mỗi
        dòng chứa 4 byte (32 bit).
      </p>
      <p>Mảng này được chia làm 4 phần:</p>
      <ul class="ct">
        <li>
          · Source port chiếm từ bit 0 đến bit 15 (tức là byte 0 và byte 1),
        </li>
        <li>
          . Destination port chiếm từ bit 16 đến 31 (tức là byte 2 và byte 3),
        </li>
        <li>
          . Length chiếm từ bit 32 + 0 = 32 (32 là bit offset của dòng 2) đến 32
          + 15 = 47 (tức là byte 4 + 0 = 4 và byte 4 + 1 = 5, với 4 là byte
          offset của dòng 2),
        </li>
        <li>
          . Checksum chiếm từ bit 32 + 16 = 48 tới bit 32 + 31 = 63 (tức là byte
          4 + 2 = 6 và byte 4 + 3 = 7).
        </li>
      </ul>
      <p>
        Cách viết này giúp chúng ta mô tả cấu trúc chi tiết của một chuỗi
        byte/bit có độ dài bất kỳ trên mắt giấy môt cách tiên lơi.
      </p>
      <h2 id="data-speed">Đơn vị đo tốc độ truyền dữ liệu</h2>
      <p>
        Tốc độ truyền du liệu là khối lượng dữ liệu truyền trong một đơn vị thời
        gian. Khối lượng dữ liệu đo bằng bit, còn thời gian tính bằng giay. Do
        vậy, đơn vị đo tốc độ truyền dữ liệu cơ bản là bit/giây. Đơn vị đo này
        cũng thường được viết tắt theo tiếng Anh là bps (bit per second) hoặc
        b/s.
      </p>
      <p>
        * Lưu ý, các tài liệu thường sử dụng ký hiệu viết tắt của tiếng Anh bps
        hoặc b/s chứ không sử dụng cách viết tắt từ tiếng Việt (tức là b/g). Nếu
        viết tiếng Việt hãy viết đầy đủ bit / giây.
      </p>
      <p>
        Ngoài ra, để biểu diễn các tốc độ truyền lớn, người ta cũng dùng các đơn
        vị dẫn xuất khác là kilobit / giây (1kb/s = 1000b/s), megabit / giây,
        gigabit / giây, v.v .. Các đơn vị dẫn xuất này được tạo ra từ đơn vị
        khối lượng thông tin chia cho giây.
      </p>

      <h2 id="conclusion">KẾT LUẬN</h2>
      <p>
        Hiểu các khái niệm về hệ số đếm, đơn vị đo lường và cách biểu diễn dữ
        liệu là nền tảng quan trọng trong lĩnh vực mạng máy tính.
      </p>
    </div>
  </body>
</html>
