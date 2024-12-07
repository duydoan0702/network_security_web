<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Hỗ Trợ Học CNTT</title>
    <link rel="stylesheet" href="mainPage.css" />
    <script defer src="mainPage.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    <!-- HTML for Navbar -->
    <div class="navbar">
      <!-- Logo Placeholder -->
      <div class="logo">
        <a href="#">CNTT</a>
      </div>

      <!-- Navigation Links -->
      <div class="nav-links">
        <a href="#hero">TRANG CHỦ</a>
        <a href="#">SẢN PHẨM</a>
        <a href="#lpp">LUYỆN TẬP</a>
        <a href="#">GIAO LƯU</a>
        <a href="#train">ĐÀO TẠO</a>
        <a href="#">LIÊN HỆ</a>
      </div>
      <!-- Icons Section -->
      <div class="icons">
        <!-- Search Icon -->
        <div class="search-icon-container">
          <div class="search-icon">
            <i class="fa fa-search"></i>
          </div>
          <div class="search-input">
            <input type="text" placeholder="Tìm kiếm..." />
          </div>
        </div>

        <!-- Menu Icon -->
        <div class="menu-icon icon-container">
          <i class="fa fa-bars"></i>
          <div class="menu-dropdown dropdown-content">
            <a href="#">Tùy chọn 1</a>
            <a href="#">Tùy chọn 2</a>
            <a href="#">Tùy chọn 3</a>
          </div>
        </div>

        <!-- User Icon -->
        <div class="user-icon icon-container">
          <i class="fa fa-user"></i>
          <div class="user-dropdown dropdown-content">
            <button onclick="window.location.href='../login/index.html'">
              Đăng Nhập
            </button>
            <button onclick="window.location.href='../login/index.html'">
              Đăng Kí
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Required Font Awesome for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!-- Hero Section -->
    <section class="hero-section" id="hero">
      <h1 class="title">
        Hỗ Trợ <span class="highlight-orange">Học</span> và
        <span class="highlight-orange">Tìm Hiểu</span> <br />
        <span class="highlight-pink">An Toàn Thông Tin</span>
      </h1>
      <p class="subtitle">
        Hỗ trợ học và tìm hiểu, trau dồi và trao đổi kinh nghiệm về công nghệ
        thông tin
      </p>
      <div class="cta-buttons">
        <button class="btn btn-primary">Các Khóa Đào Tạo</button>
        <button class="btn btn-secondary">Bắt Đầu Ngay</button>
      </div>

      <!-- Trusted Logos -->
      <div class="trusted-logos">
        <img src="https://via.placeholder.com/100?text=Verizon" alt="Verizon" />
        <img src="https://via.placeholder.com/100?text=Google" alt="Google" />
        <img src="https://via.placeholder.com/100?text=AMGEN" alt="AMGEN" />
        <img
          src="https://via.placeholder.com/100?text=BoozAllen"
          alt="Booz Allen"
        />
      </div>
    </section>

    <!-- Learn. Practice. Prove. Section -->
    <section class="learn-practice-prove" id="lpp">
      <div class="text">
        <h1 class="section-title">Học Tập. Thực Hành. Chứng Minh.</h1>
        <div class="content">
          <!-- Mục Learn -->
          <div
            class="accordion-item active"
            data-title="learn"
            data-image="../uploads/img/learn.png"
          >
            <h2>Học Tập</h2>
            <div class="accordion-content">
              <p>
                Nghiên cứu các khái niệm cốt lõi và thực hành các kỹ năng chính
                trong các khóa học và phòng thí nghiệm an ninh mạng do các
                chuyên gia trong ngành dẫn đầu.
              </p>
              <a href="#">Bắt Đầu</a>
            </div>
          </div>
          <!-- Mục Practice -->
          <div
            class="accordion-item"
            data-title="practice"
            data-image="../uploads/img/practice.webp"
          >
            <h2>Luyện Tập</h2>
            <div class="accordion-content">
              <p>
                Rèn luyện kỹ năng giải quyết vấn đề và tư duy sáng tạo của bạn
                với Phòng thí nghiệm tương tác và câu đố tập trung vào bảo mật.
              </p>
              <a href="#">Bắt Đầu</a>
            </div>
          </div>
          <!-- Mục Prove -->
          <div
            class="accordion-item"
            data-title="prove"
            data-image="../uploads/img/prove.webp"
          >
            <h2>Chứng Minh</h2>
            <div class="accordion-content">
              <p>
                Thể hiện sự thành thạo của bạn về các chủ đề chính trong các bài
                đánh giá và bài kiểm tra thực hành.
              </p>
              <a href="#">Bắt Đầu</a>
            </div>
          </div>
        </div>
      </div>
      <div class="image">
        <img
          src="../uploads/img/learn.png"
          alt="Learn Image"
          id="dynamic-image"
        />
      </div>
    </section>

    <!-- Tại Sao Nên Đào Tạo An Ninh Mạng Section -->
    <section class="why-cybrary" id="train">
      <h1>Tại Sao Nên Đào Tạo An Ninh Mạng?</h1>
      <div class="icons">
        <div class="icon-card">
          <img src="../uploads/img/career.png" alt="Launch Your Career Icon" />
          <h2>Khởi Động Sự Nghiệp Của Bạn</h2>
          <p>
            Bắt đầu hành trình đào tạo & an ninh mạng của bạn với các Lộ trình
            sự nghiệp có hướng dẫn, dạy các khái niệm cơ bản liên quan đến trách
            nhiệm thực tế trong công việc.
          </p>
        </div>
        <div class="icon-card">
          <img src="../uploads/img/join.png" alt="Onboard Team Members Icon" />
          <h2>Gia Nhập Đội Ngũ</h2>
          <p>
            Các khóa học và chương trình an ninh mạng có thể mở rộng, lặp lại
            của chúng tôi đảm bảo mọi nhân viên mới đều có cùng nền tảng kiến
            ​​thức và kỹ năng.
          </p>
        </div>
        <div class="icon-card">
          <img
            src="../uploads/img/certificate.png"
            alt="Earn Certifications Icon"
          />
          <h2>Kiếm Chứng Chỉ</h2>
          <p>
            Vượt qua kỳ thi với Lộ trình chuẩn bị chứng chỉ do các giảng viên
            hàng đầu trong ngành phát triển. Nhận mẹo từ người trong cuộc và xây
            dựng sự tự tin với các kỳ thi thực hành của chúng tôi.
          </p>
        </div>
        <div class="icon-card">
          <img src="../uploads/img/skill.png" alt="Upskill and Practice Icon" />
          <h2>Nâng Cao Kĩ Năng & Thực Hành</h2>
          <p>
            Nâng cao kỹ năng và thực hành. Thành thạo các kỹ năng thực hành và
            làm quen với các lỗ hổng và mối đe dọa mới nhất để bạn luôn sẵn sàng
            giải quyết các thách thức đang phát triển.
          </p>
        </div>
        <div class="icon-card">
          <img src="../uploads/img/talent.png" alt="Retain Top Talent Icon" />
          <h2>Giữ Chân Nhân Tài Hàng Đầu</h2>
          <p>
            Giữ chân nhân tài hàng đầu. Tạo cơ hội mới cho nhân viên tận tụy
            nhất của bạn và theo dõi tỷ lệ giữ chân nhân viên của bạn tăng vọt
            với nội dung hấp dẫn, đầy thử thách.
          </p>
        </div>
        <div class="icon-card">
          <img
            src="../uploads/img/reduce.png"
            alt="Reduce Business Risk Icon"
          />
          <h2>Giảm Rủi Ro Kinh Doanh</h2>
          <p>
            Sử dụng dữ liệu thời gian thực để khám phá mối tương quan chặt chẽ
            giữa đào tạo an ninh mạng cho nhân viên với việc giảm rủi ro kinh
            doanh thực tế.
          </p>
        </div>
      </div>
    </section>
  </body>
</html>
