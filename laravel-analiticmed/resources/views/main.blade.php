@extends('layout')

@section('title') AnaliticMed @endsection


@section('main_content')

<div style="background: linear-gradient(to bottom, #FFFFFF 20%, #e0f1ff 50%, #FDFDFD 80%);">

<div id="myCarousel" class="carousel slide "  data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item" >
      <img class="bd-placeholder-img" src="{{asset('images/poster3.jpg')}}" width="100%" height="auto" style="min-height: 150px; max-height: 600px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect  width="100%" height="100%" ></rect></img>

        <div class="container" >
            
          <div class="carousel-caption text-start">
            
            
          
        </div>
        </div>
      </div>
      <div class="carousel-item active">
      <img class="bd-placeholder-img" src="{{asset('images/poster1.jpg')}}" width="100%" height="auto" style="min-height: 150px; max-height: 600px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect  width="100%" height="100%" ></rect></img>

        <div class="container">
          <div class="carousel-caption text-start">
          
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" src="{{asset('images/poster2.jpg')}}" width="100%" height="auto" style="min-height: 150px; max-height: 600px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect  width="100%" height="100%" ></rect></img>

        <div class="container">
          <div class="carousel-caption text-start">
        
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
      <div class="col-lg-4 mt-5 d-flex flex-column">
        

        <h2 class="container fst-italic fw-bold mt-3 text-center">Laboratorul Modern</h2>
        <p class="lead text-center">Pentru atingerea performanței și calității serviciilor medicale, laboratorul nostru folosește utilaj modern ți tehnologii inovaționale.</p>
        <div class="text-center">
        <a href="servicii" class=" ml-auto mt-auto btn btn-primary w-50">Servicii</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 mt-5 d-flex flex-column">
        

        <h2 class="container fst-italic fw-bold mt-3 text-center">20 ani de experiența</h2>
        <p class="lead text-center">Pacienți sunt consultați și investigați în exclusivitate de personal calificat și cu experiența de peste 20 ani în domeniu.</p>
        
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4 mt-5 d-flex flex-column">
        

        <h2 class="container fst-italic fw-bold mt-3 text-center">Suport Clienții</h2>
        <p class="lead text-center">Ne puteți contacta pentru a primi informație și consultanța noastră de calitatea.</p>
        <br>
        <div class="text-center">
        <a href="feedback" class=" ml-auto mt-auto btn btn-primary w-50">Contactează</a></p>
        </div>
      </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->

</div>
<br>


    <!-- START THE FEATURETTES -->
    <div class="container marketing shadow" style="background: white;">
    <br>

    <div class="row featurette ">
      <div class="col-md-7 " >
        <h2 class="featurette-heading text-center">„Traveling Covid-19 Free”<span class="text-muted">cu "AnaliticMed"</span></h2>
        <p class="lead text-center p-3">Aplicația „Traveling Covid-19 Free” vă permite să găsiți laboratoare din apropiere pentru a vă testa testele pentru Covid-19 înainte de a călători între Federația Rusă, Republica Armenia, Republica Belarus, Republica Uzbekistan, Republica Kazahstan, Republica Kârgâzstan, Republica Tadjikistan și Republica Azerbaidjan.
La trecerea frontierei, arătați codul QR cu rezultatele testelor unui ofițer autorizat care are dreptul să solicite rezultatele testului PCR în conformitate cu reglementările naționale.</p> <br> <br>
        <p class="lead text-center">Descărcați aplicația oficială de pe <b>Play Market :</b></p>
        <p><a class="btn btn-lg btn-primary " style="display: block; margin-right: auto; margin-left: auto; max-width: 200;" href="https://play.google.com/store/apps/details?id=com.nocovid19.su&hl=ro&gl=US" target="_blank">Descarcă</a></p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" src="{{asset('images/covid.jpg')}}" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2 ">
        <h2 class="featurette-heading text-center">COVID-19 <span class="text-muted">De ce în "AnaliticMed"?</span></h2>
        <p class="lead text-center p-3">În laboratorul nostru, puteți face orice test COVID-19 de care aveți nevoie și obțineți rezultatul cu un certificat<b class="fw-bold"> în aceeași zi.</b> Suntem singurul laborator care poate face asta.
           Pentru a face acest lucru, trebuie doar să treceți analiza de la 8:00 pâna la 14:00 și deja după prânz, în aceeași zi, dumneavoastra vei primi certificatul.</p>
        <p class="lead text-center p-3">Pentru a afla regulile de efectuare a analizelor și alte detalii, intră aici sau contactează-ne.</p>
        <a href="feedback" class="btn btn-primary w-50" style="display: block; margin-right: auto; margin-left: auto; max-width: 200;">Contactează</a>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded p-2" src="{{asset('images/covid2.jpg')}}" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading text-center">Orice analiză <span class="text-muted">pentru controlul masei.</span></h2>
        <p class="lead text-center p-3">În laboratorul nostru, puteți face toate testele necesare pentru a vă monitoriza pierderea în masa. Aceste analize includ atât teste hormonale (de exemplu: TSH, Estradiol),
           cât și biohimice (Creatinină, Glucoza etc.), precum și multe alte teste, urmărire căruia te vor ajuta să te menții în formă și să obții rezultatul dorit. Pentru alegerea corectă a testelor, vă recomandăm
            o consultație individuală cu un medic dietetician.</p>
        <p class="lead text-center p-3">Dar pentru informații mai detaliate, ne puteți contactați cu noi.</p>
        <a href="feedback" class="btn btn-primary w-50" style="display: block; margin-right: auto; margin-left: auto; max-width: 200;">Contactează</a>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" src="{{asset('images/diet1.jpg')}}" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

      </div>
    </div>
    <br>

    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
 
<br>
   <div class="container mt-5">
  
   <h2 class="display-5 fst-italic fw-bold text-center">Unde noi ne aflăm?<h2>
  </div>
       <br>

     <div class="container py-3">
  

  <main>
   
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
            
          </div>
          <div class="card-body" >
            <h5 class="text-center">Telefon:</h5>
            <p class="lead text-muted">+373 231 70471</p>
          <br>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
          </div>
          <div class="card-body">
            <h5 class="text-center">Adresa:</h5>
            <p class="lead text-muted">Str. Decebal 101/A, Bălți, Republica Moldova, 3101</p>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm mb-auto">
          <div class="card-header py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>
          </div>
          <div class="card-body">
            <h5 class="text-center">E-Mail:</h5>
            <p class="lead text-muted">analiticmed@mail.ru</p>
            <br>
          </div>
        </div>
      </div>
    </div>
          
          </div>
  </main>

  
</div>



    

</div>

</div>
<!--Google map-->


<div class="container mt-3">
<div id="map" class="z-depth-1-half map-container-5 "></div>
</div>
<script>
    function initMap() {
      var pos ={lat: 47.77226755313283, lng: 27.896765321204423}
      var opt = {
        center: pos,
        zoom: 17
      }
      var map = new google.maps.Map(document.getElementById("map"), opt);
    
    var marker = new google.maps.Marker({
      position: pos,
      map: map,
      title: "AnaliticMed",
    })

    
    }
  </script>


<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi5M4RaElHOo21O27XWIY4DTBWfLy0LL4&callback=initMap">
 </script>
         
@endsection


  
  

      
  

