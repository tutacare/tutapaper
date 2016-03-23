@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

      @if (Session::has('message'))
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('message') }}
        </div>
      </div>
      @endif

      Dashboard

				</div>
	</div>
</div>
@endsection
