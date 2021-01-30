<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="RetroNews.com">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title> RetroNews.com</title>

  <!-- Fontfaces CSS-->
  <link href="<?= base_url('assets/'); ?>css/font-face.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/fontawesome-5.15/css/fontawesome.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href=" <?= base_url('assets/'); ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href=" <?= base_url('assets/'); ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href=" <?= base_url('assets/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="<?= base_url('assets/'); ?>css/theme.css" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" media="all">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-top">
    <a class="navbar-brand" href="#">
      <h1 class="text-danger">RETRO NEWS</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href="#">Politik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Ekonomi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Olahraga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Otomotif</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Hiburan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Lifestyle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Teknologi</a>
        </li>
      </ul>
    </div>
  </nav>





  <div class="container ">
    <div class="container tren">
      <h3 class="mt-5">Trending News</h3>
      <div class="row">
        <div class="col">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/kG96iorf8WM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="row">
            <div class="col">
              <p class="mt-4"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam placeat, quam dicta aliquid laudantium harum minus similique id mollitia, reprehenderit illum ea inventore qui, iure hic officiis obcaecati eos voluptates sapiente error illo sed. Dolorem totam quod ad culpa repellendus corporis aliquam dignissimos molestias, tempore facilis quasi impedit tenetur quis porro dolore numquam eveniet nobis enim fugiat recusandae atque repellat minima possimus soluta. Doloribus error culpa veritatis modi sed esse, ex corrupti. Similique quas perferendis aut debitis dolor laboriosam, maxime deserunt odio libero quo assumenda ipsum tempore porro illum odit ut, ratione sapiente nulla, suscipit autem unde quidem deleniti iure.</p>
            </div>
          </div>

          <div class="section-title">
            <h2>Hot Topics</h2>
          </div>


          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url('assets/'); ?>image/oto.jpg" class="card-img-top" alt="..." width="250" height="150">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url('assets/'); ?>image/r15.jpg" class="card-img-top" alt="..." width="250" height="100">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url('assets/'); ?>image/satria.jpg" class="card-img-top" alt="..." width="250" height="150">
              </div>
            </div>
          </div>


          <!-- This is card -->
          <div class="container mt-5">
            <div class="section-title">
              <h2>Related Article</h2>
            </div>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="card" style="width: 16rem;">
                    <img src="<?= base_url('assets/'); ?>image/toti.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="row">
                  <div class="card" style="width: 16rem;">
                    <img src="<?= base_url('assets/'); ?>image/oto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col mt-3">
                <div class="row">
                  <div class="card" style="width: 16rem;">
                    <img src="<?= base_url('assets/'); ?>image/satria.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col mt-3">
                <div class="row">
                  <div class="card" style="width: 16rem;">
                    <img src="<?= base_url('assets/'); ?>image/r15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>
          <!-- End of Card -->
          <div class="container">

            <div class="section-title">
              <h2>News Feed</h2>
            </div>


            <div class="row mt-5 mb-5">
              <div class="media">
                <img src="<?= base_url('assets/'); ?>image/r15.jpg" class="mr-3" alt="..." width="100" height="100">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img src="<?= base_url('assets/'); ?>image/oto.jpg" class="mr-3" alt="..." width="100" height="100">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img src="<?= base_url('assets/'); ?>image/cb.jpg" class="mr-3" alt="..." width="100" height="100">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
            </div>
          </div>



        </div>


        <!-- RIGHT SIDEBAR -->
        <div class="col-md-3">
          <h3 class="text-secondary">Berita Terbaru</h3>
          <hr class="divider">
          <div class="img">
            <img class="side" src="<?= base_url('assets/'); ?>image/oto.jpg" alt="" width="250" height="150">
          </div>
          <div class="col">
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, repellat.</p>
          </div>

          <div class="img">
            <img class="side" src="<?= base_url('assets/'); ?>image/toti.jpg" alt="" width="250" height="150">
          </div>
          <div class="col">
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, repellat.</p>
          </div>

          <div class="img">
            <img class="side" src="<?= base_url('assets/'); ?>image/r15.jpg" alt="" width="250" height="150">
          </div>
          <div class="col">
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, repellat.</p>
          </div>

          <div class="img">
            <img class="side" src="<?= base_url('assets/'); ?>image/cb.jpg" alt="" width="250" height="150">
          </div>
          <div class="col">
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, repellat.</p>
          </div>
        </div>
        <!-- END RIGHT SIDEBAR -->
      </div>
    </div>
  </div>



  <footer class="bg-footer">
    <nav class="footer overview-item--c5 text-light">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="foot-nav-title">Kategori</div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Politik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Ekonomi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Ekonomi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Otomotif</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Hiburan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Lifestyle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Teknologi</a>
              </li>
            </ul>
          </div>

          <div class="col">
            <div class="foot-nav-title">Layanan</div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-light bottom " href="#">Politik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Ekonomi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Ekonomi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Otomotif</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Hiburan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Lifestyle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Teknologi</a>
              </li>
            </ul>
          </div>

          <div class="col">
            <div class="foot-nav-title">Informasi</div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-light bottom " href="#">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Redaksi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Pedoman Media Siber</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Pedoman Jurnalistik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Ketentuan khusus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Karir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Info Iklan</a>
              </li>
            </ul>
          </div>

          <div class="col">
            <div class="foot-nav-title">Contact Us</div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="text-light bottom">Jl. Mampang Prapatan XIV, RT.04/RW.04, Tegal Parang, Jakarta Selatan, Indonesia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light bottom" href="#">Telp. 082237290886</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="clearfix"></div>
    <div class="row bg-dark text-light no-gutters">
      <div class="col-sm-12">
        <p class="foot mt-2">Retro News Copyright &copy; <?php echo date('Y'); ?></p>
      </div>
    </div>

  </footer>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>