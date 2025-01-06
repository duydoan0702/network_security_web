<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Chương 1: Tổng quan về An toàn Thông tin</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/start.css')}}">
    
</head>
<body class="quizz">

    <!-- Sidebar -->
    @include("users.elements.sidebar")

    <div class="quiz-container">
        <h1>Quiz: Chương 1 - Tổng quan về Mạng máy tính</h1>
        <form id="quiz-form">
            <div class="quiz-question">
                <p><strong>Câu 1:</strong> Yếu tố nào sau đây KHÔNG phải là tam giác an toàn thông tin?</p>
                <label><input type="radio" name="q1" value="1"> A. Tính bảo mật</label><br>
                <label><input type="radio" name="q1" value="2"> B. Tính toàn vẹn</label><br>
                <label><input type="radio" name="q1" value="3"> C. Tính khả dụng</label><br>
                <label><input type="radio" name="q1" value="4"> D. Tính linh hoạt</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 2:</strong> Mã hóa dữ liệu giúp đảm bảo yếu tố nào trong an toàn thông tin?</p>
                <label><input type="radio" name="q2" value="1"> A. Tính bảo mật</label><br>
                <label><input type="radio" name="q2" value="2"> B. Tính toàn vẹn</label><br>
                <label><input type="radio" name="q2" value="3"> C. Tính khả dụng</label><br>
                <label><input type="radio" name="q2" value="4"> D. Tính xác thực</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 3:</strong> Tấn công DDoS ảnh hưởng đến yếu tố nào?</p>
                <label><input type="radio" name="q3" value="1"> A. Tính bảo mật</label><br>
                <label><input type="radio" name="q3" value="2"> B. Tính toàn vẹn</label><br>
                <label><input type="radio" name="q3" value="3"> C. Tính khả dụng</label><br>
                <label><input type="radio" name="q3" value="4"> D. Tính xác thực</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 4:</strong> Mạng diện rộng WAN là loại mạng gì?</p>
                <label><input type="radio" name="q4" value="1"> A. Mạng không dây</label><br>
                <label><input type="radio" name="q4" value="2"> B. Mạng chỉ hoạt động trong một khu vực nhỏ</label><br>
                <label><input type="radio" name="q4" value="3"> C. Mạng chỉ sử dụng cáp đồng</label><br>
                <label><input type="radio" name="q4" value="4"> D. Mạng có thể triển khai trên vùng địa lý rộng lớn</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 5:</strong> Đơn vị đo tốc độ truyền dữ liệu cơ bản là gì?</p>
                <label><input type="radio" name="q5" value="1"> A. byte/giây</label><br>
                <label><input type="radio" name="q5" value="2"> B. megabit/giây</label><br>
                <label><input type="radio" name="q5" value="3"> C. kilobit/giây</label><br>
                <label><input type="radio" name="q5" value="4"> D. bit/giây</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 6:</strong> Công nghệ LAN thường ưu tiên điều gì?</p>
                <label><input type="radio" name="q6" value="1"> A. Khoảng cách truyền</label><br>
                <label><input type="radio" name="q6" value="2"> B. Chi phí</label><br>
                <label><input type="radio" name="q6" value="3"> C. Sự ổn định</label><br>
                <label><input type="radio" name="q6" value="4"> D. Tốc độ truyền</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 7:</strong> Các thành phần trong một mạng máy tính có thể tương tác với nhau và phối hợp trong nhiệm vụ gì?</p>
                <label><input type="radio" name="q7" value="1"> A. Một nhiệm vụ riêng biệt</label><br>
                <label><input type="radio" name="q7" value="2"> B. Chỉ phối hợp trong một phần mềm</label><br>
                <label><input type="radio" name="q7" value="3"> C. Một nhiệm vụ chung</label><br>
                <label><input type="radio" name="q7" value="4"> D. Không nhiệm vụ nào</label>
            </div>

            <div class="quiz-question">
                <p><strong>Câu 8:</strong> Đây là gì?</p>
                <center><img src="{{asset('public/frontend/images/start/tentotwo.png')}}" ></center><br>
                <label><input type="radio" name="q8" value="1"> A. Bát phân sang nhị phân</label><br>
                <label><input type="radio" name="q8" value="2"> B. Thập phân sang nhị phân</label><br>
                <label><input type="radio" name="q8" value="3"> C. Nhị phân sang thập phân</label><br>
                <label><input type="radio" name="q8" value="4"> D. Bát phân sang thập phân</label>
            </div>

            <div class="submit-container">
                <button type="submit">Nộp bài</button>
            </div>
        </form>
        <div id="quiz-result"></div>
    </div>

    <script defer src="{{ asset('public/frontend/js/start.js')}}"></script>

</body>
</html>
