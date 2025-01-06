
    <?php
    use Illuminate\Support\Facades\URL;
    ?>
    @extends('users.layout')
    @section('content')

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
            <a href="{{ url::to('user/learn') }}">
                <button class="btn btn-primary">Các Khóa Đào Tạo</button>
            </a>
            
            <a href="{{ url::to('user/start') }}">
                <button class="btn btn-secondary">Bắt Đầu Ngay</button>
            </a>
        </div>
        <div class="trusted-logos">
            <a href="https://youtube.com">
                <img src="{{ url('public/frontend/images/user/youtube.png') }}" alt="Youtube" />
            </a>
            <a href="https://facebook.com">
                <img src="{{ url('public/frontend/images/user/facebook.png') }}" alt="Facebook" />     
            </a>
            <a href="https://x.com">
                <img src="{{ url('public/frontend/images/user/tweet.png') }}" alt="Tweet" />
            </a>
            <a href="https://pinterest.com">
                <img src="{{ url('public/frontend/images/user/pinterest.png') }}" alt="Pinterest" />      
            </a>
        </div>
    </section>
    @endsection
