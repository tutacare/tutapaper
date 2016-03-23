<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/mytuta/images/logo.png" alt="TutaMarket"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        @if (Auth::check())
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        @endif


      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form" role="search" method="GET" action="{{ url('/search/key') }}">
        <div class="form-group">
          <input type="text" name="q" value="{{$query_search or ''}}" class="form-control" placeholder="Cari Paper">
        </div>
        <button type="submit" class="btn btn-success">Cari</button>
      </form>


      </ul>
    </div>
  </div>
</nav>
<hr>
