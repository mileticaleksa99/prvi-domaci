<?php
$poruka = '';

if (isset($_GET['poruka'])) {
    $poruka = $_GET['poruka'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Batman</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">

        <div class="lines-wrap">
          <div class="lines-inner">
            <div class="lines"></div>
          </div>
        </div>

      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">
        
          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="index.html" class="nav-link">Home</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Batman<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="administracija.php" class="nav-link">Administracija</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>

      <div class="cover-v1 jarallax" style="background-image: url('images/batman.jpeg');" id="home-section">
        <div class="container">
          <div class="row align-items-center">
              
            <div class="col-md-7 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero">Who Am I?</h1>
              <h2 class="subheading gsap-reveal-hero">I’m Batman</h2>
            </div>

          </div>
        </div>


        <a href="#" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>

      <div class="unslate_co--section" id="about-section">
        <div class="container">
            <div id="administracija" class="row">
                <?php
                    if ($poruka != '') {
                        echo '<div class ="col-md-12"><h1 class="text-center">'.$poruka.'</h1></div>';
                    }
                ?>
                <div class="col-md-4">
                    <h1>Dodaj negativca</h1>
                    <form action="dodaj.php" method="post" enctype="multipart/form-data">
                        <label for="ime"></label>
                        <input type="text" name="ime" id="ime" placeholder="Ime" class="form-control">
                        <label for="opis"></label>
                        <textarea name="opis" id="opis" cols="30" rows="10" placeholder="Opis" class="form-control"></textarea>
                        <label for="status"></label>
                        <select name="status" id="status" class="form-control">
                        </select>
                        <label for="level"></label>
                        <select name="level" id="level" class="form-control">
                        </select>
                        <label for="slika"></label>
                        <input type="file" name="slika" id="slika" class="form-control">
                        <hr>
                        <input type="submit" value="Dodaj" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-4">
                    <h1>Promeni status negativca</h1>
                    <form method="post" action="izmeni.php">
                        <label for="negativacIzmena">Negativac</label>
                        <select name="negativacIzmena" id="negativacIzmena" class="form-control">
                        </select>
                        <label for="statusIzmena">Status</label>
                        <select name="statusIzmena" id="statusIzmena" class="form-control">
                        </select>
                        <hr>
                        <input type="submit" value="Izmeni" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-4">
                    <h1>Obrisi negativca</h1>
                    <form action="obrisi.php" method="post">
                        <label for="negativacBrisanje">Negativac</label>
                        <select name="negativacBrisanje" id="negativacBrisanje" class="form-control">
                        </select>
                        <hr>
                        <input type="submit" value="Obrisi" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
      </div>

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              
              <div class="footer-site-logo"><a href="#">Batman<span>.</span></a></div>

              <ul class="footer-site-social">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Dribbble</a></li>
                <li><a href="#">Behance</a></li>
              </ul>

              <p class="site-copyright">
                
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved
              </p>

            </div>
          </div>
        </div>
      </footer>

      
    </div>

    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>

    <script src="js/scripts-dist.js"></script>
    <script src="js/main.js"></script>

    <script>
      function vratiStatuse(){
          $.ajax({
              url: 'statusi.php',
              success: function(data){
                  let podaci = JSON.parse(data);
                  let html = '';
                  for (let i = 0; i < podaci.length; i++) {
                      let status = podaci[i];
                      html += '<option value="'+status.id+'">'+status.status+'</option>';
                  }
                  $('#status').html(html);
                  $('#statusIzmena').html(html);
              }
          });
      }

      function vratiLevele(){
            $.ajax({
                url: 'leveli.php',
                success: function(data){
                    let podaci = JSON.parse(data);
                    let html = '';
                    for (let i = 0; i < podaci.length; i++) {
                        let level = podaci[i];
                        html += '<option value="'+level.id+'">'+level.nivo+'</option>';
                    }
                    $('#level').html(html);
                }
            });
      }

      function vratiNegativce(){
            $.ajax({
                url: 'negativci.php',
                success: function(data){
                    let podaci = JSON.parse(data);
                    let html = '';
                    for (let i = 0; i < podaci.length; i++) {
                        let negativac = podaci[i];
                        html += '<option value="'+negativac.id+'">'+negativac.ime+'</option>';
                    }
                    $('#negativacIzmena').html(html);
                    $('#negativacBrisanje').html(html);
                }
            });
      }

      vratiStatuse();
      vratiLevele();
      vratiNegativce();

    </script>

  </body>
</html>