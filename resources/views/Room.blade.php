  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/stylefilter.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700;800&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <style>

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


      * {
        font-family: 'Poppins', sans-serif;
      }

      .h-font {
        font-family: 'Merienda', cursive;
      }

      .alaa {
        background-color: #3498db;
        border-color: #3498db;
      }

      .alaa:hover {
        background-color: #2980b9;
        border-color: #2980b9;
      }

      body {
        animation: fadeInDown 1s ease both;
      }

      
    </style>

  </head>

  <body class="bg-light">
    <!-- <div class="content"> -->
        @include('nav')
    <!-- End Navbar  -->
    <!-- --------------------------------------------------- -->

    <div class="container-filter ">
      <div class="row ">
        <div class="pe-5 ps-5 m-3 col-lg-12 col-md-10 offset-md-5 ">
          <h3>احجز الفندق</h3>

          <div class="form-group slider">
            <label for="priceRange">السعر:</label>
            <div id="priceRange"></div>
            <p id="price"></p>
          </div>

          <div class="form-group">
            <label for="guests">عدد الأشخاص:</label>
            <div class="input-group">
              <button class="btn btn-outline-secondary alaa" type="button" id="decreaseGuests">-</button>
              <input type="number" id="guests" class="form-control" value="1" min="1" max="7">
              <button class="btn btn-outline-secondary alaa" type="button" id="increaseGuests">+</button>
            </div>
          </div>

          <div class="form-group">
            <label for="children">عدد الأطفال:</label>
            <div class="input-group">
              <button class="btn btn-outline-secondary alaa" type="button" id="decreaseChildren">-</button>
              <input type="number" id="children" class="form-control" value="0" min="0" max="7">
              <button class="btn btn-outline-secondary alaa" type="button" id="increaseChildren">+</button>
            </div>
          </div>

          <div class="form-group datepicker">
            <label for="startDate">تاريخ الوصول:</label>
            <input type="text" id="startDate" class="form-control">
          </div>
          <div class="form-group datepicker">
            <label for="endDate">تاريخ المغادرة:</label>
            <input type="text" id="endDate" class="form-control">
          </div>

          <button type="button" class="btn btn-primary btn-block w-100 mt-3 alaa" onclick="searchRooms()">ابحث</button>
          <div id="results" class="mt-3">
            <!-- يتم عرض نتائج البحث هنا -->
         

             <div class="container pt-4 pe-2 me-2 d-flex justify-content-center  d-inline-block">
        <div class="row" style="width: 90%;">
            @foreach($rooms as $room)
                <div class="col-md-6">
                    <div class="card mb-8">
                        <img src="../storage/uploadimg/{{ $room->filename }}" alt="{{ $room->name }}" style="object-fit: cover; height: 300px; ">
                        <div class="card-body">
                            <h5 class="card-title">{{ $room->name }}</h5>
                            <p class="card-text">
                                Bed Rooms: {{ $room->bedRooms }}<br>
                                Bath Rooms: {{ $room->bathRooms }}<br>
                                Area: {{ $room->area }}<br>
                                Floor: {{ $room->floor }}<br>
                                Price: ${{ $room->price }}
                            </p>
                            <!-- Add any other details you want to display -->

                            <!-- Example: Add a link to view more details -->
                            <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Start Footer -->
    <footer class="mt-5">
      <div class="container p-3">
        <div class="col-lg-12">
          <p>Copyright © 2023 ANS-Hotel.
        </div>
      </div>
    </footer>

    <!-- End footer -->

    <!-- Start filter -->

    <!-- End filter -->



    <!-- --------------------------------------------------------------------------------------------------------- -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/scriptfilter.js"></script>

  </body>

  </html>