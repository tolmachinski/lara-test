@extends('layout')

@section('title') Servicii @endsection

@section('main_content')

<div class="alert alert-warning" role="alert">
<h1 class=" text-center">Atenție!</h1>
<p class="lead text-center">Dragi pacienți,
înainte de a alege un analiz, asigurați-vă că revedeți <a class="lead text-center alert-link" href="#bottom">cerințele de colectare a analizelor.</a></p>
</div>


<div class="container mt-5">
    <h2>Investigații bacteriologice</h2>
    <p class="lead"> Investigarea bacteriologică a infectiilor urogenitale</p>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumirea</th>
      <th scope="col">Materialul biologic</th>
      <th scope="col">Costul</th>
    </tr>
  </thead>

  <tbody>
  @foreach($serviciis as $el) 
  
  
    <tr>
      <th>{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->material }}</td>
      <td>{{ $el->cost }}</td>
    </tr> 
  
    
    @endforeach
    
    
  </table>

</div>
<br>

<div class="container">
    <h2>Investigații  Imunologice</h2>
    <p class="lead"> PCR  Real-Time </p>
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumirea</th>
      <th scope="col">Materialul biologic</th>
      <th scope="col">Costul</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($servicii_imuns as $index => $el) 
  
    <tr>
      <th>{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->material }}</td>
      <td>{{ $el->cost }}</td>
    </tr>

    @if($index == 8)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Diagnosticul  hepatitelor</h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">Determinarea calitativă a virusurilor hepatice </p></td>
      </tr>
    
    
    @endif
    
    @endforeach
    </tbody>
  </table>

</div>

<br>

<div class="container">
    <h2>Diagnosticul  infecţiilor  genitale  </h2>
    <p class="lead"> PCR  Real-Time </p>
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumirea</th>
      <th scope="col">Materialul biologic</th>
      <th scope="col">Costul</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($servicii_gens as $index => $el) 
  
    <tr>
      <th>{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->material }}</td>
      <td>{{ $el->cost }}</td>
    </tr>

    @if($index == 10)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Infecţii  bacteriene,Infecţii  virale </h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">PCR  Real-Time  </p></td>
      </tr>
    
    
    @endif
    
    @endforeach
    </tbody>
  </table>

</div>




<div class="container ">
<div class="container alert alert-primary mt-5">
  <h3 class="text-center">Cerinţe de recoltare 
ale raclajului tractului urogenital (canalului cervical, vaginului, uretrei):
</h3>
<p class="lead text-center">
Pregătirea pacientei pentru colectarea investigaţiilor ADN cu 48 ore înainte de recoltarea probelor este necesar ca pacienta:
</p>
<ul class="lead">
  <li>să nu întreţină raport sexual</li>
  <li>să nu folosească contraceptive locale</li>
  <li>să nu folosească tampoane intravaginale</li>
  <li>să nu facă spălături vaginale</li>
  <li>să nu aplice tratamente vaginale (ovule, geluri, creme)</li>
  <li>să facă o provocaţie alimentară</li>
</ul>
<h4 >Atenţie: </h4> <p class="lead">Probele nu se recoltează în perioada menstruală.</p>
</div>

<div class="container alert alert-primary mt-5">
  <h3 class="text-center" >Instrucţiuni privind recoltarea la barbaţi:
</h3>
<a name="bottom"></a>
<p class="lead text-center" >
Pregătirea  pacientului:
</p>
<ul class="lead">
  <li>să nu întreţină raport sexual</li>
  <li>să nu folosească creme, unguente, ca tratament local (genital)</li>
  <li>să nu efectueze o peniscopie</li>
  <li>să nu i se fi recoltat alte analize din zona genitală</li>
  <li>să facă o provocaţie alimentară</li>
  
</ul>
<h4 >Atenţie: </h4> <p class="lead">În cazul dacă eliminările uretrale sunt puţine se reduce cantitatea de lichide.</p>
</div>

</div>


    
@endsection