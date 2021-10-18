@extends('layout')

@section('title') Analitic-Med @endsection


@section('main_content')

<div style="background: linear-gradient(to bottom, #FFFFFF 20%, #e0f1ff 50%, #FDFDFD 80%);">

<div id="myCarousel" class="carousel slide shadow"  data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item" >
      <img class="bd-placeholder-img" src="{{asset('images/carousel1.jpg')}}" width="100%" height="auto" style="min-height: 250px; max-height: 600px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect  width="100%" height="100%" ></rect></img>

        <div class="container" >
            
          <div class="carousel-caption text-start text-dark">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          
        </div>
        </div>
      </div>
      <div class="carousel-item active">
      <img class="bd-placeholder-img" src="https://dlslab.com/wp-content/uploads/2020/12/covid-19-testing-centers-848x477.jpg" width="100%" height="auto" style="min-height: 300px; max-height: 600px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect  width="100%" height="100%" ></rect></img>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" src="https://dlslab.com/wp-content/uploads/2020/12/covid-19-testing-centers-848x477.jpg" width="100%" height="auto" style="min-height: 300px; max-height: 600px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect  width="100%" height="100%" ></rect></img>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>

  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container" >

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 mt-5">
        <img class="bd-placeholder-img rounded" src="https://dlslab.com/wp-content/uploads/2020/12/covid-19-testing-centers-848x477.jpg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

        <h2>Более 12134 видов анализов</h2>
        <p>Наша лаборатория делает любые ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vitae voluptate saepe perferendis? Delectus exercitationem dolorem tenetur, ut, et qui quae, mollitia quo atque facilis unde nihil voluptas. Eligendi, tempora... анализы.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 mt-5">
        <svg class="bd-placeholder-img rounded" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Более 15лет опыта</h2>
        <p>Наша лаборатория существует уже более 15 лет,а это означает,что мы можем предложить вам огромный опыт... Lorem ipsum dolor sit amet consectetur adipisicing elit. Et officia id vitae odit voluptatum, animi illum molestias ipsa. Alias sint vitae possimus provident veritatis, esse illo nihil earum nobis delectus!</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4 mt-5">
        <svg class="bd-placeholder-img rounded" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Лучший мед. персонал</h2>
        <p>В Analitic Med мы собираем только самых лучших специалистов и все они клалифицированные и сертифицированные мед работники с длительным стажем работы ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dicta odio provident, aspernatur cupiditate corrupti nam ex dolore? Delectus obcaecati ut quia consectetur similique esse perspiciatis eaque distinctio totam enim!</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

</div>


    <!-- START THE FEATURETTES -->
    <div class="container marketing shadow" style="background: white;">
    <br>

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">„Traveling Covid-19 Free”<span class="text-muted">cu AnaliticMed</span></h2>
        <p class="lead">Aplicația „Traveling Covid-19 Free” vă permite să găsiți laboratoare din apropiere pentru a vă testa testele pentru Covid-19 înainte de a călători între Federația Rusă, Republica Armenia, Republica Belarus, Republica Uzbekistan, Republica Kazahstan, Republica Kârgâzstan, Republica Tadjikistan și Republica Azerbaidjan.
La trecerea frontierei, arătați codul QR cu rezultatele testelor unui ofițer autorizat care are dreptul să solicite rezultatele testului PCR în conformitate cu reglementările naționale.</p> <br> <br>
        <p class="lead">Descărcați aplicația oficială de pe <b>Play Market :</b></p>
        <p><a class="btn btn-lg btn-primary mt-2" href="https://play.google.com/store/apps/details?id=com.nocovid19.su&hl=ro&gl=US">Descarcă</a></p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>
    <br>

    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

   <!--Google map-->


  <!--Grid column-->
  <div class="container mt-5">

    <!--Card-->
    <div class="card card-cascade narrower">

      <!--Card image-->
      <div class="container mt-2">
        <h5 class="mb-0">Custom map</h5>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="container mt-2 mb-2 ">

        <!--Google map-->
        
        <div id="map-container-google-9" class="z-depth-1-half map-container-5 " style="height: 300px">
          <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
                

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->

</div>

          </div>

@endsection


  
  

      
  

