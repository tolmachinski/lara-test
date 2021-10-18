@extends('layout')

@section('title') Оставить Отзыв @endsection

@section('main_content')

<div class = "container" style = "max-width: 800px; ">
<h2> Введите отзыв </h2>

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

  <label for="exampleFormControlInput1" class="form-label mt-3">Email address</label>
  <input name="email" type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">


  <label for="exampleFormControlInput1" class="form-label mt-3">Name</label>
  <input name="user" type="name" class="form-control " id="exampleFormControlInput1">


  <label for="exampleFormControlTextarea1" class="form-label mt-3">Example textarea</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  
 
  <button type="submit" class="btn btn-outline-primary mt-3">Оставить Отзыв</button>


</form>




@endsection