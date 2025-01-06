=   @extends('users.layout')
    @section('content')
        <div id="navbar-container"></div>
        <section class="contact content-wrapper">
          <div class="contact-container">
            <h2>Gửi Thông Điệp</h2>
            <form>
              <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Họ và tên"
                  required
                />
              </div>
    
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Email của bạn"
                  required
                />
              </div>
    
              <div class="form-group">
                <label for="message">Nội Dung:</label>
                <textarea
                  id="message"
                  name="message"
                  placeholder="Nhập nội dung liên hệ"
                  required
                ></textarea>
              </div>
    
              <div class="form-group">
                <button type="submit">Gửi</button>
              </div>
            </form>
    
            <div class="contact-info">
              <div class="contact-details">
                <h2>Thông Tin Liên Hệ</h2>
                <p>
                  Email:
                  <a href="mailto:cntt@securityedu.vn">cntt@securityedu.vn</a>
                </p>
                <p>Điện thoại: <a href="tel:+0123456789">+84 123 456 789</a></p>
                <p>
                  Địa chỉ: 470 Trần Đại Nghĩa, phường Hòa Hải, quận Ngũ Hành Sơn,
                  Tp. Đà Nẵng
                </p>
              </div>
    
              <div class="social-media">
                <h2>Kết Nối Với Chúng Tôi</h2>
                <div class="trusted-logos">
                  <a
                    href="https://facebook.com"
                    target="_blank"
                    aria-label="Facebook"
                    ><img src="{{asset('public/frontend/images/user/facebook.png')}}"
                  /></a>
                  <a href="https://twitter.com" target="_blank" aria-label="Twitter"
                    ><img src="{{asset('public/frontend/images/user/tweet.png')}}"
                  /></a>
                  <a
                    href="https://instagram.com"
                    target="_blank"
                    aria-label="Instagram"
                    ><img src="{{asset('public/frontend/images/user/instagram.png')}}"
                  /></a>
                  <a
                    href="https://linkedin.com"
                    target="_blank"
                    aria-label="LinkedIn"
                    ><img src="{{asset('public/frontend/images/user/linkedln.png')}}"
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div id="footer-container"></div>
    
    
  @endsection
