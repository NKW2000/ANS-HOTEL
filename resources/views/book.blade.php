<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Reservation - Booking Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      color: #343a40;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 500px;
      margin-top: 50px;
    }

    h3 {
      text-align: center;
      margin-bottom: 30px;
      color: #007bff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-submit {
      background-color: #007bff;
      border-color: #007bff;
      transition: all 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #0056b3;
      border-color: #0056b3;
      transform: scale(1.05);
    }
  </style>
  <style>
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
</head>
<body>

<div class="container">
  <h3>تسجيل الحجز</h3>
  <form id="bookingForm">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="الاسم الكامل" required>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" placeholder="البريد الإلكتروني" required>
    </div>

    <div class="form-group">
      <input type="tel" class="form-control" placeholder="رقم الهاتف" required>
    </div>

    <div class="form-group">
      <select class="form-control" required>
        <option value="" disabled selected>طريقة الدفع</option>
        <option value="credit">بطاقة الائتمان</option>
        <option value="paypal">باي بال</option>
        <option value="cash">دفع نقدي</option>
      </select>
    </div>

    <div class="form-group">
      <textarea class="form-control" rows="3" placeholder="ملاحظات إضافية"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-submit btn-block">تأكيد الحجز</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $("#bookingForm").submit(function(event) {
      event.preventDefault();

      var fullName = $("#fullName").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var payment = $("#payment").val();
      var comments = $("#comments").val();

      console.log("الاسم الكامل:", fullName);
      console.log("البريد الإلكتروني:", email);
      console.log("رقم الهاتف:", phone);
      console.log("طريقة الدفع:", payment);
      console.log("ملاحظات:", comments);

      alert("تم تأكيد حجزك بنجاح!");
    });
  });
</script>
</body>
</html>


