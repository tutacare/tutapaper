@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <h2>Posting</h2>
      <hr />
			<div class="panel panel-default">
				<div class="panel-heading">Buat Postingan Baru</div>
				<div class="panel-body">

          {!! Html::ul($errors->all()) !!}

					@if (Session::has('message'))
	        <div class="col-md-12">
						<div class="alert alert-info alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
	        </div>
	        @endif
					<div class="col-md-9">
          {!! Form::open(array('url' => 'dashboard/post')) !!}

              <div class="form-group">
                {!! Form::label('title', 'Judul') !!}
                {!! Form::text('title', Input::old('title'), array('class' => 'form-control', 'required' => 'required')) !!}
              </div>
							<div class="form-group">
								{!! Form::label('content', 'Content') !!}
								{!! Form::textarea('content', null, array('class' => 'form-control', 'id' => 'editor1', 'required' => 'required')) !!}
							</div>

          {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
          <a class="btn btn-small btn-warning" href="{{ URL::to('dashboard/category') }}">Batal</a>

					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">Kategori</div>
							<div class="panel-body">
								@foreach($category as $value)
									{!! Form::checkbox('category[]', $value->id); !!} {{$value->category}}<br />
								@endforeach
								{!! Form::close() !!}
						</div>
							</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
