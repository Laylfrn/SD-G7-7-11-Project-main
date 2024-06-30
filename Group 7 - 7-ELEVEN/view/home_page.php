<?php 
  $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
  $start_year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seven Eleven</title>
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/home-reponsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <?php 
    require "php/header.php";
    require "php/nav.php"
  ?>

  <script>
    let nav = document.getElementById("nav");

    const point = document.createElement("div");
    point.classList.add("arrow-up", "arrow-home1");
    nav.appendChild(point);
  </script>
  
  <main>

    <!-- this is the description container  -->
    <div class="description-container">
      <h1>Sed ut perspiciatis unde omnis iste natus error sit voluptatem sit amet tempor</h1>
      <h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h6>
    </div>

 
    <div class="form-container">
      <h1>Registration Form</h1>




      <!-- REGISTRATION FORM  -->
      <form action="">
        <label for="name">Name</label>
        <input type="text" id="name">

        <label for="email">Email</label>
        <input type="email" id="email">

        <label for="number">Mobile Number</label>
        <input type="number" id="number">

        <label for="birth-date">Date of Birth</label>
        <div class="option-container">

          <select name="month" id="month" onchange="enableDaySelect();">
            <option name="month" id="" disabled selected>MONTH</option>
            <?php foreach($months as $month): ?>
              <option value="<?=$month?>"><?=$month?></option>
            <?php endforeach;?>
          </select>
  
          <select name="day" disabled id="day">
            <option name="day" id="" disabled selected>DAY</option>
          </select>
  
          <select name="year">
            <option name="year" id="" disabled selected>YEAR</option>
            <?php for($start_year; $start_year > 1990; $start_year--): ?>
              <option value="<?=$start_year?>"><?=$start_year?></option>
            <?php endfor;?>
          </select>

        </div>







        <label for="gender">Gender</label>
        <div class="gender-container">
          <input type="radio" name="gender" id="female">
          <label for="female">Female</label>

          <input type="radio" name="gender" id="male">
          <label for="male">Male</label>
        </div>

        <div class="check-container">
          <span id="checkbox"><input type="checkbox" name="" id="check"></span>
          <label for="check">Proin sit amet lectus venenatis, consectetur
          magna vitae, convallis diam. Nullam iaculis.</label>
        </div>

        <div class="submit-container">
          <input type="submit" value="Submit">
        </div>

        <img src="assets/img/cards.png" alt="card logo">
      </form>
    </div>
  </main>

  <?php require "php/footer.php"; ?>

  <script src="assets/js/test.js"></script>

</body>
</html>