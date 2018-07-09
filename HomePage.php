<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title>Restaurante de trattoria </title>
  <link rel = "stylesheet" type = "text/css" href = "HomePage.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Spirax" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
	<div class="navigation">
	<div class="navigation-left">
   <h2 id = > Trattoria</h2>
  </div>

<div class="topnav" id="myTopnav">
  <div class="navigation-left">
     <a href="Menu.php">Menu</a>
    <a href="Reservations.php">Reservations</a>
     <a href="Aboutus.php">About us</a>
   <a href="Contactus.php">Contact Us</a>
  </div>
  </div>
  <!-- 
  <div class="navigation-right">
    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmEuzdvntu3Rykmi26kcmFEFVR_O199P-TXmjLB_uCqtTpfHI3eA" style="width:30%" alt=""></a>
  
  </div> -->
</div>
 
<!-- Slider Wrapper -->
<div class="css-slider-wrapper">
  <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
  <input type="radio" name="slider" class="slide-radio2" id="slider_2">
  <input type="radio" name="slider" class="slide-radio3" id="slider_3">
  <input type="radio" name="slider" class="slide-radio4" id="slider_4">
 
  <!-- Slider Pagination -->
  <div class="slider-pagination">
    <label for="slider_1" class="page1"></label>
    <label for="slider_2" class="page2"></label>
    <label for="slider_3" class="page3"></label>
    <label for="slider_4" class="page4"></label>
  </div>
 
  <!-- Slider #1 -->
  <div class="slider slide-1">
    <img src="https://images.wallpaperscraft.com/image/restaurant_cafe_appliances_tables_chairs_interior_design_39216_1920x1080.jpg" alt="">

    <div class="slider-content">
      <h4>Restaurante de trattoria </h4>
      <h2>Good time, great taste.</h2>
      <a href="Menu.php"><button type="button" class="buy-now-btn" name="button">Our Menu</button></a>
    </div>
    <div class="number-pagination">
      <span>1</span>
    </div>
  </div>
 
  <!-- Slider #2 -->
  <div class="slider slide-2">
    <img src="https://images.wallpaperscraft.com/image/restaurant_table_interior_modern_style_39288_1920x1080.jpg" alt="">
    <div class="slider-content">
      <h4>Restaurante de trattoria </h4>
      <h2>A thousand flavours under one roof.</h2>
      <a href="Reservations.php"><button type="button" class="buy-now-btn" name="button">Reservations</button></a>
    </div>
    <div class="number-pagination">
      <span>2</span>
    </div>
  </div>
 
  <!-- Slider #3 -->
  <div class="slider slide-3">
    <img src="https://images.wallpaperscraft.com/image/tables_cafe_view_interior_glass_39232_1920x1080.jpg" alt="">
    <div class="slider-content">
      <h4>Restaurante de trattoria </h4>
      <h2>Quality is our recipe.</h2>
      <a href="Aboutus.php"><button type="button" class="buy-now-btn" name="button">About Us</button></a>
    </div>
    <div class="number-pagination">
      <span>3</span>
    </div>
  </div>
 
  <!-- Slider #4 -->
  <div class="slider slide-4">
    <img src="http://3c27bd67aa49635875f8-91b794a04dcf458b29c17191957295a2.r94.cf1.rackcdn.com/XLGallery/HD-Snowmass-Vue-Lounge.jpg" alt="">
    <div class="slider-content">
      <h4>Restaurante de trattoria </h4>
      <h2>Paradise on your plate</h2>
      <a href="Contactus.php"><button type="button" class="buy-now-btn" name="button">Contact Us</button></a>
    </div>
    <div class="number-pagination">
      <span>4</span>
    </div>
  </div>
</div>
<script> 
var TIMEOUT = 5000;
 
var interval = setInterval(handleNext, TIMEOUT);
 
function handleNext() {
 
  var $radios = $('input[class*="slide-radio"]');
  var $activeRadio = $('input[class*="slide-radio"]:checked');
 
  var currentIndex = $activeRadio.index();
  var radiosLength = $radios.length;
 
  $radios
    .attr('checked', false);
 
  if (currentIndex >= radiosLength - 1) {
 
    $radios
      .first()
      .attr('checked', true);
 
  } else {
 
    $activeRadio
      .next('input[class*="slide-radio"]')
      .attr('checked', true);
 
  }
 
}

</script>
</body>
</html>
 