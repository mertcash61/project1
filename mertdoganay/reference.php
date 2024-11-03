<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Çok Sayfalı Örnek | Referanslarımız</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="bg-dark">
      <div class="container">
        <div class="row">
            <header class="col-12">
                <!-- Burada Menü Yer Alacak -->  
                <nav class="navbar navbar-dark bg-dark fixed-top shadow-sm">
                    <div class="container-fluid">
                      <a class="navbar-brand text-danger" href="index.html">
                        <img src="images/logo.png" width="40px" alt="" srcset="">
                       &nbsp;<i> Mert <b class="text-warning">DOĞANAY</b></i></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menü</h5>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Aradığınız içerik..." aria-label="Search">
                                <button class="btn btn-success" type="submit">Ara</button>
                              </form>
                              <hr class="text-warning">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                              <a class="nav-link " aria-current="page" href="index.html">
                                <i class="fa fa-home fa-fw"></i>&nbsp;Anasayfa</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="about.html">
                                <i class="fa fa-book fa-fw" ></i>&nbsp;Hakkımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold text-warning" href="reference.html">
                                    <i class="fa fa-users fa-fw" ></i>&nbsp;Referanslarımız</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contact.html">
                                    <i class="fa fa-address-card-o fa-fw" ></i>&nbsp; İletişim</a>
                              </li>
                          </ul>
                          <hr class="text-warning">
                         
                            <h4 class="fs-5 text-center">Bize ulaşmak için</h4>
                            <ul class="social-icons text-center">
                                <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
                            </ul>
                           
                       
                        </div>
                      </div>
                    </div>
                  </nav>   
              </header>  
        
              <section class="col-12" style="margin-top: 10vh;">
                <!-- Burada ilgili sayfa içeriği yer alacak -->
                <h1 class="text-center text-white">BURASI REFERANSLARIMIZ SAYFASI</h1>
              </section>
        
             <footer class="col-12 text-center" style="font-size: 12px; margin-top: 70vh;">
                <!-- burada alt bilgi yer alacak -->
                <div class="text-info " style="width: 100%;">
                    <div class="card-header">
                      İletişim Bilgileri
                    </div>
                    
                      <p class="m-2 bg-transparent text-warning">
                        Adres: <a class="text-white text-decoration-none" target="_blank" href="https://maps.app.goo.gl/FhyyP98im4YMXH2j8">Marmaris, Çıldır mah. no:05</a>  Tel: <a class="text-white text-decoration-none" href="tel:05334727561">0533 472 7561</a>
                      </p>                    
                     
                  
                    <ul class="social-icons text-center">
                        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
                    </ul>
                  </div>
              </footer>
        </div>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>