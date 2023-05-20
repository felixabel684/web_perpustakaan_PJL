
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Perpustakaan Jembatan Ilmu</title>
    <link
      rel="stylesheet"
      href="frontend/libraries/bootstrap/css/bootstrap.css"
    />
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
          <img src="frontend/images/book_icon.png" alt="" />
        </a>
        <a class="navbar-brand" href="index.php"><h2>PJL</h2></a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navb"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="transaksi.php">Pinjam Buku</a>
            </li>
            
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="login.php">LogIn</a>
            </li>
          </ul>
          
        </div>
      </nav>
    </div>


    
    <header class="text-center">
      <h1>
        Perpustakaan Jembatan Ilmu
      </h1>
      <p class="mt-3">
        Gain the Knowledge
        <br />
        As Easy One Click
      </p>
    </header>
    <main>
      <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
          <div class="col-5 col-md-5 stats-detail text-center">
            <h2>"Books train your mind to <br/>imagination to think big"</h2>
            <p>- Taylor Swift</p>
          </div>
          
        </section>
      </div>
      <section class="section-popular" id="popular">
        <div class="container">
          <div class="row">
            <div class="col text-center section-popular-heading">
              <h2>Daftar Buku</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="section-popular-content" id="popularContent">
        <div class="container">
          <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_1.png');"
              >
                
              
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_2.png');"
              >
                
               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_3.png');"
              >
                
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_4.png');"
              >
                
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_5.png');"
              >
               
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_6.png');"
              >
                
               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_7.png');"
              >
                
               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_8.png');"
              >
               
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_9.png');"
              >
                
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_10.png');"
              >
               
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_11.png');"
              >
                
                
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/buku_12.png');"
              >
               
                
              </div>
            </div>
                
                <div class="travel-button mt-auto">
                  <a href="#" class="btn btn-travel-details px-4" style="background-color:#ffaa57; color:fff;">
                    View More
                  </a>
                </div>
            

          </div>
        </div>
      </section>
      
    </main>
    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-12 col-lg-3">
                    <a class="navbar-brand" href="#">
                      <img src="frontend/images/book_icon.png" alt="" /></a>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Home</a>
                      </li>
                      <li>
                        <a href="#">Peminjaman</a>
                      </li>
                      <li>
                        <a href="#">Daftar Buku</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>PRODUCT</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">Membership</a></li>
                      <li><a href="#">Security</a></li>
                      <li><a href="#">Rewards</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>COMPANY</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">About</a></li>
                      <li><a href="#">Help Center</a></li>
                      <li><a href="#">Media</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>GET CONNECTED</h5>
                    <ul class="list-unstyled">
                      <li>Semarang</li>
                      <li>Indonesia</li>
                      <li>0854 - 6654 - 2214</li>
                      <li>support@pjl.com</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div
          class="row border-top justify-content-center align-items-center pt-4"
        >
          <div class="col-auto text-gray-500 font-weight-light">
            2023 Copyright Perpustakaan Jembatan Ilmu • Made in Semarang
          </div>
        </div>
      </div>
    </footer>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
