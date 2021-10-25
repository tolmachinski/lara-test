<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield('title')</title>

    <link rel="shortcut icon"  href="{{asset('images/logo.png')}}">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <!-- Favicons -->


    <style>
      body {
            font-size: 1.25rem;
            font-weight: 300;
            }
      
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

.btn {
  font-size: 1.25rem;
            font-weight: 350;
}


/* contacts*/ 



    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>
<div class="border">
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="bi me-2" src="{{asset('images/logo.png')}}" width="64" height="64"><use xlink:href="#bootstrap"></use></img>
        <span class="fs-4 lead">Analitic-Med</span>
      </a>

      <ul class="nav nav-pills ">
        <li class="nav-item"><a href="/" class="nav-link text-dark text-decoration-none lead" aria-current="page">Principală</a></li>
        <li class="nav-item"><a href="servicii" class="nav-link text-dark text-decoration-none lead">Servicii</a></li>
        
        <li class="nav-item"><a href="#" class="nav-link text-dark text-decoration-none lead"></a></li>
        <p class="lead"><a href="feedback" class="btn btn-primary">Contactează cu noi</a></p>
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
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"></a></li>
    </ul>
  </footer>
</div>
</div>



    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  
  </body>
  </html>