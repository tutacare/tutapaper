@extends('layouts.app-home')

@section('content')
  <div class="jumbotron">
      <div class="container">
        <h1>Tuta Paper!</h1>
        <p>TutaPaper adalah sebuah website untuk menulis bisa digunakan sebagai blog, majalah atau berita, Website ini dibuat dengan menggunakan Laravel Framework versi 5.2 dan disini disertakan pula source codenya.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        @foreach($post as $value)
        <div class="col-md-4">
          <h4>{{$value->title}}</h4>
          <p>{!! $value->content !!}</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        @endforeach
      </div>




    </div> <!-- /container -->

@endsection
