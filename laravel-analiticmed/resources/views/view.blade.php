@extends('layout')

@section('title') Review @endsection

@section('main_content')

<div class="container">
<h2>Все отзывы</h2>

    @foreach($reviews as $el)
        <div class="alert alert-warning">
                <h4>{{ $el->user }}</h4>
                <a>{{ $el->email }}</a>
            <div class="container mt-3">
                <b>{{ $el->message }}</b>
            </div>  
            <div class="container mt-3 ">    
                <p>{{ $el->created_at }}</p>

            </div>
        </div>
    @endforeach
</div>


@endsection