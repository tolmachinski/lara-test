@extends('layout')

@section('title') Servicii @endsection

@section('main_content')



<div class="container">
    <h1>Investigații bacteriologice</h1>
    <p class="lead"> текст о том,что это за анализы...</p>


    <h4>Investigarea bacteriologică a infectiilor urogenitale</h4>
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


<div class="container">
    <h1>INVESTIGAŢII   IMUNOLOGICE</h1>
    <p class="lead"> текст о том,что это за анализы...</p>
    
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

    @if($index == 5)
        <h2> sdыыыыsfsfs </h2>
    @endif

    <tr>
      <th>{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->material }}</td>
      <td>{{ $el->cost }}</td>
    </tr>
    
  
    
    @endforeach
    </tbody>
  </table>

</div>




    
@endsection