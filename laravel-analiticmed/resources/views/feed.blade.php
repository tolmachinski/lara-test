@extends('layout')

@section('title') Оставить Отзыв @endsection

@section('main_content')

<div class = "container mt-2" style = "max-width: 800px; ">
<h2> Introduceți mesajul Dvs. </h2>

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
       @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
  


<form method="post" action="feedback/check">
  @csrf

  <label for="exampleFormControlInput1" class="form-label mt-3">E-mail adresa</label>
  <input name="email" type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">


  <label for="exampleFormControlInput1" class="form-label mt-3">Nume,Prenume</label>
  <input name="user" type="name" class="form-control " id="exampleFormControlInput1" placeholder="Nume">


  <label for="exampleFormControlTextarea1" class="form-label mt-3">Mesajul</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mesajul..."></textarea>
  
 
  <button type="submit" class="btn btn-outline-primary mt-3">Trimite Mesajul</button>


</form>




@endsection