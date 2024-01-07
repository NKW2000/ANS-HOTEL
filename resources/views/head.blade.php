<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'ANS Hotels')</title>
  <link href="css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="css/contactus.css">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700;800&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/favicon/android-chrome-512x512.png') }}" type="image/png">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }

    .stars i {
      color: gold;
    }

    /* أنميشن */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* تطبيق الأنميشن على الصفحة */
    body {
      animation: fadeInDown 1s ease both;
    }
  </style>
  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    /* <!-- CSS لضبط الصور داخل السلايدر --> */
    .swiper-slide img {
      width: 100%;
      /* تعيين العرض ليمتد على عرض السلايدر */
      height: 100%;
      /* تعيين الارتفاع ليمتد على ارتفاع السلايدر */
      object-fit: cover;
      /* ضبط الصورة بحيث تغطي المساحة بالكامل دون تشويه النسبة */
    }
  </style>
</head>