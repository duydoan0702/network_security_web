    @extends('users.layout')
    @section('content')
    <div id="navbar-container"></div>
    <section class="hs content-wrapper">
      <!-- <div class="header">
        <h1>Trợ Giúp & Hỗ Trợ</h1>
        <p>
          Tìm câu trả lời cho các câu hỏi hoặc liên hệ với chúng tôi để được hỗ
          trợ.
        </p>
      </div> -->

      <div class="search-container">
        <input type="text" placeholder="Tìm kiếm chủ đề hỗ trợ..." />
        <button>Tìm kiếm</button>
      </div>

      <div class="faq">
        <h2>Câu Hỏi Thường Gặp</h2>

        <div class="faq-item">
          <h3>Làm thế nào để đặt lại mật khẩu?</h3>
          <p>
            Để đặt lại mật khẩu, hãy nhấp vào 'Quên mật khẩu' trên trang đăng
            nhập và làm theo hướng dẫn.
          </p>
        </div>

        <div class="faq-item">
          <h3>Làm thế nào để liên hệ với bộ phận hỗ trợ?</h3>
          <p>
            Bạn có thể liên hệ với đội ngũ hỗ trợ qua biểu mẫu liên hệ hoặc gọi
            tới số (123) 456-7890.
          </p>
        </div>

        <div class="faq-item">
          <h3>Tôi có thể xem lịch sử đặt hàng ở đâu?</h3>
          <p>
            Lịch sử đặt hàng của bạn có sẵn trong bảng điều khiển tài khoản ở
            mục 'Đơn hàng'.
          </p>
        </div>

        <div class="faq-item">
          <h3>Những phương thức thanh toán nào được chấp nhận?</h3>
          <p>
            Chúng tôi chấp nhận thẻ tín dụng, PayPal và các phương thức thanh
            toán phổ biến khác. Vui lòng xem trang thanh toán để biết thêm chi
            tiết.
          </p>
        </div>

        <div class="faq-item">
          <h3>Nên học như thế nào để tốt hơn?</h3>
          <p>
            Chúng tôi sẽ đưa ra các lộ trình giúp bạn dần đạt được mục tiêu bản
            thân mong muốn.
          </p>
        </div>
      </div>
    </section>
    <div id="footer-container"></div>
    @endsection

