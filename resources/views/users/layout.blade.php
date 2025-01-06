<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/user.css')}}" />
    <link href="{{asset('public/frontend/css/responsive_user.css')}}" rel="stylesheet">   
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

    @include("users.elements.top")

    @yield("content")


    @include("users.elements.footer")
    

    <script src="{{asset('public/frontend/js/user.js')}}"></script>

  </body>
</html>
