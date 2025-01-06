<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/verifyOTP.css')}}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <header>
            <i class="bx bxs-check-shield"></i>
        </header>
        <h4>Enter OTP Code</h4>
        <form action="{{URL::to('user/confirmOTP')}}" method="post">
            @csrf
            <div class="input-field">
                <input type="number" name="otp_digit1" />
                <input type="number" name="otp_digit2" disabled />
                <input type="number" name="otp_digit3" disabled />
                <input type="number" name="otp_digit4" disabled />
            </div>
            <button type="submit" name="verification">Verify OTP</button>
            <button type="button" name="Resend">Resend</button>
        </form>
    </div>

<script src="{{asset('public\frontend\js\verifyOTP.js')}}"></script>

</body>
</html>