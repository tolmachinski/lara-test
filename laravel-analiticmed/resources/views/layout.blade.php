<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

@media (min-width: 992px) {
  .rounded-lg-3 { border-radius: .3rem; }
}

      

    /*google map */

    .map-container-5{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-5 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}




    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>
<div class="border">
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Analitic-Med</span>
      </a>

      <ul class="nav nav-pills ">
        <li class="nav-item"><a href="/" class="nav-link text-dark text-decoration-none" aria-current="page">Principală</a></li>
        <li class="nav-item"><a href="servicii" class="nav-link text-dark text-decoration-none">Servicii</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-dark text-decoration-none">Contacte</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-dark text-decoration-none"></a></li>
        <li class="nav-item"><a href="feedback" class="btn btn-outline-primary">Contactează cu noi</a></li>
      </ul>
    </header>
  </div>
</div>


@yield('main_content')


<div class="shadow-bottom mt-4">
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
    <p class="col-md-4 mb-0 text-muted">© 2021 "Analitic-Med"</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Principală</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contacte</a></li>
    </ul>
  </footer>
</div>
</div>



    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  
  </body>
  </html>