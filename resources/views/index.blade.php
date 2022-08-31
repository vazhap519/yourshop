<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}">
    <title>YourTechnology front page</title>
</head>
<body>
    <div id="wrapper">
@include('fontend/header')
  <!--
             =========================================================================================
                                                HEADER AREA END
              =========================================================================================
          -->
@yield('content');
@include('fontend/footer')
        <!--
             =========================================================================================
             FOOTER END
              =========================================================================================
          -->
<script src="{{asset('./assets/js/jquery.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>
    </div>
</body>
</html>