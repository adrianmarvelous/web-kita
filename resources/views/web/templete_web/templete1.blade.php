<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Coffee!</title></title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <style>
        
        #mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
        color: #3f3532;
        }
        
        /* Apply custom styles for header.masthead */
        header.masthead {
            background-image: url({{ asset('assets/img/templete_web/1/pexels-thepaintedsquare-867466.jpg') }});
            /* Add any other specific styles for this page */
        }

        .section3 {
            background-image: url({{ asset('assets/img/templete_web/1/pexels-livier-garcia-645743-1459339.jpg') }});
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-size: cover;
            padding-top: 10rem;
            padding-bottom: 10rem;
        }
        
        @media (min-width: 992px) {
            #mainNav.navbar-shrink {
                background-color: #786762;
            }
        }
    </style>
  </head>

  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/navbar-logo.svg') }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Templete</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tata Cara</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="masthead-heading col-lg-8 col-12" style="text-align: right">Kopi Toraja</div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="masthead-subheading col-lg-8 col-12" style="text-align: right">Kopi Toraja adalah salah satu jenis kopi unggulan dari Indonesia yang berasal dari daerah Toraja di Sulawesi Selatan.</div>
            </div>
        </div>
    </header>
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2>Kopi Toraja</h2>
                    <p>Kopi Toraja berasal dari daerah pegunungan Toraja di Sulawesi Selatan, Indonesia. Dataran tinggi Toraja, yang berada pada ketinggian antara 1.400 hingga 1.900 meter di atas permukaan laut, memiliki iklim yang sejuk dan tanah yang subur, membuatnya ideal untuk budidaya kopi. Tradisi menanam kopi di daerah ini sudah berlangsung selama berabad-abad, dan kopi menjadi bagian penting dari budaya serta kehidupan masyarakat Toraja.</p>
                </div>
                <div class="col-lg-6 col-md-12 order-1 order-lg-2 d-flex justify-content-around">
                    <img class="w-50 p-3" src="{{ asset('assets/img/templete_web/1/pexels-justus-menke-3490295-5214207.jpg') }}" alt="">
                    <img class="w-50 p-3" src="{{ asset('assets/img/templete_web/1/pexels-pixabay-47316.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="section3 w-100 mt-5">
            <div class="container">
                <div class="row">
                    <div class="card p-5" style="background-color: rgba(255,255,255,0.7)">
                        <h2>Cita Rasa dan Aroma</h2>
                        <h5>Kopi Toraja terkenal dengan cita rasanya yang unik dan kompleks. Rasa kopi ini sering digambarkan sebagai perpaduan antara keasaman yang lembut, rasa manis alami, serta sentuhan rasa rempah dan buah. Beberapa penikmat kopi juga merasakan adanya nuansa cokelat dan karamel pada kopi Toraja. Aromanya pun khas, dengan kombinasi aroma bunga, tanah, dan sedikit aroma kayu.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>