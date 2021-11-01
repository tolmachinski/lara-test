@extends('layout')

@section('title') Servicii @endsection

@section('main_content')

<div class="alert alert-warning" role="alert" style="min-width: 375px;">
<h1 class=" text-center">Atenție!</h1>
<p class="lead text-center">Dragi pacienți,
înainte de a alege un analiz, asigurați-vă că revedeți <a class="lead text-center alert-link" href="#bottom">cerințele de colectare a analizelor.</a></p>
</div>

<div class="container">
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-bold text-center">Analize de COVID-19</h4>
          </div>
          <div class="card-body">
            
            <ul class="list-unstyled mt-3 mb-4 text-center">
              <li>1. Determinarea anticorpilor anti-SARS-CoV-2 IgM (Elisa)</li>
              <li>2. Determinarea anticorpilor anti-SARS-CoV-2 IgG (Elisa)</li>
              <li>3. Determinarea calitativă a ARN virusului SARS-CoV-2 prin metoda PCR (Real Time)</li>
              <li>4. SARS-CoV-2 IgG QuantiSpike</li>
            </ul>
            <br>
          <p class="text-center text-muted">După informație mai detalizată va adresați in laborator.</p>
          <div class="text-center">
          <p class="lead"><a href="feedback" class="btn btn-primary text-center shadow-sm">Contactează</a></p>
            </div>
          </div>
        </div>
      </div>
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
<br>
<br>

<div class="container">
    <h2>Investigații sînge </h2>
    <p class="lead">  </p>
    
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
  @foreach($servicii_bloods as $index => $el) 
  
    <tr>
      <th>{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->material }}</td>
      <td>{{ $el->cost }}</td>
    </tr>

    @if($index == 13)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Hormoni  şi  Autoanticorpi </h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">  </p></td>
      </tr>
    
    
    @endif

    @if($index == 42)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Investigații Parazitologice (ELISA)</h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">  </p></td>
      </tr>
    
    
    @endif

    @if($index == 49)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Markerii Oncologici</h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">  </p></td>
      </tr>
    
    
    @endif

    @if($index == 56)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Determinarea Grupei Sangvine şi Rezus Factor</h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">  </p></td>
      </tr>
    
    
    @endif
    
    @endforeach
    </tbody>
  </table>

</div>
<br>
<br>

<div class="container">
    <h2>Investigații Clinice şi Biohimice  </h2>
    <p class="lead">  </p>
    
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
  @foreach($servicii_bis as $index => $el) 
  
    <tr>
      <th>{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->material }}</td>
      <td>{{ $el->cost }}</td>
    </tr>

    @if($index == 30)
   
      
      <td colspan=4 class="mt-2"><h4 class="text-center">Statutul Imun </h4></td>
    
      <tr>
      <td colspan=4 class="mt-2"><p class="lead text-center">  </p></td>
      </tr>
    
    
    @endif
    
    @endforeach
    </tbody>
  </table>

</div>
<br>

<div class="container">
<div class="container alert alert-primary mt-5 shadow-sm">
  <h3 class="text-center" >Instrucţiuni privind COVID-19:
</h3>
<a name="bottom"></a>
<p class="lead text-center" >
Pregătirea  pacientului:</p>
<p>Pentru efectuarea testului sunt recoltate probe din regiunea nazofaringiană (prelevarea din nas și din faringe)</p>
<p>Cu 3 ore înainte de prelevarea materialului biologic se recomandă:</p>
<ul class="lead">
  <li>să nu mâncați</li>
  <li>să nu consumați lichide</li>
  <li>să nu vă spălați dinții</li>
  <li>să nu clătiți gura-gâtul</li>
  <li>să nu mestecați guma</li>
  <li>să nu fumați</li>
</ul>
<h4 >Atenţie: </h4> <p class="lead">Pentru efectuarea testului, este nevoie să aveți cu dumneavoastră buletinul de identitate. 
  De asemenea, vă recomandăm să purtați mănuși de unică folosință și mască de protecție.</p>
<p class="lead">În cazul rezultatelor pozitive, se recomandă contactarea medicului de familie, care vă va oferi suport și consultații
   cu privire la acțiunile pe care urmează să le întreprindeți ulterior.</p>
<h5>Eliberarea rezultatelor are loc în aceeaşi zi!</h5>

</div>




<div class="container alert alert-primary mt-5 shadow-sm">
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

<div class="container alert alert-primary mt-5 shadow-sm">
  <h3 class="text-center" >Instrucţiuni privind recoltarea la barbaţi:
</h3>

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