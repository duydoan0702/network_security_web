@extends('users.layout')
@section('content')
    <section class="learn-practice-prove" id="lpp">
      <div class="text">
        <h1 class="section-title">Học Tập. Thực Hành. Chứng Minh.</h1>
        <div class="content">
          <div
            class="accordion-item active"
            data-title="learn"
            data-image="{{ url('public/frontend/images/user/learn.png') }}"
          >
            <h2>Học Tập</h2>
            <div class="accordion-content">
              <p>
                Nghiên cứu các khái niệm cốt lõi và thực hành các kỹ năng chính
                trong các khóa học và phòng thí nghiệm an ninh mạng do các
                chuyên gia trong ngành dẫn đầu.
              </p>
              <a href="{{ asset('user/start')}}">Bắt Đầu</a>
            </div>
          </div>
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
              <a href="{{ asset('user/start')}}">Bắt Đầu</a>
            </div>
          </div>
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
          src="{{ url('public/frontend/images/user/learn.png') }}"
          alt="Learn Image"
          id="dynamic-image"
        />
      </div>
    </section>
@endsection

