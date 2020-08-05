<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }
</style>

<body id="myPage" class="w3-light-grey">

  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)"
        onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DORMITORIO</a>
      <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SALA</a>
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ESCRITORIO</a>
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">COZINHA</a>
    </div>
  </div>

  <!-- Image Header -->
  <div class="w3-display-container w3-animate-opacity">
    <img src="../../img/titulo.jpg" alt="boat" style="width:100%;height:500px;min-height:350px;max-height:600px;"
      class="w3-opacity">
    <div class="w3-display-left" style="padding:48px">
      <img src="../../img/logo.png" alt="Boss" style="width:10%" class="w3-circle w3-hover-opacity ">
      <span class="w3-jumbo w3-hide-small w3-text-black w3-display-middle" style="left:35%">Marinho Moveis</span>
    </div>
  </div>

  <!-- Team Container -->
  <div class="w3-container">
    <h1><b>Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filtros:</span>
      <button class="w3-button w3-white"><i class="fa fa-globe w3-margin-right"></i>Tudo</button>
      <button class="w3-button w3-white"><i class="fa fa-cutlery w3-margin-right"></i>Cozinha</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-briefcase w3-margin-right"></i>Escritorio</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-bed w3-margin-right"></i>Dormitorio</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-television w3-margin-right"></i>Sala</button>
    </div>
  </div>

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-quarter w3-container w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
          gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-quarter w3-container w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/lights.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
          gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-quarter w3-container">
      <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
          gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-quarter w3-container">
      <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
          gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>



  <!-- Contact Container -->
  <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
        <h3>Address</h3>
        <p>Swing by for a cup of coffee, or whatever.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
      </div>

    </div>



    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
      <h4>Siga-nos</h4>
      <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i
          class="fa fa-facebook"></i></a>
      <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i
          class="fa fa-instagram"></i></a>



    </footer>



</body>

</html>