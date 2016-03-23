@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <h2>Posting


					<a class="btn btn-small btn-success" href="{{ URL::to('dashboard/post/create') }}">Buat Postingan Baru</a>
</h2>

      <hr />
      @if (Session::has('message'))
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('message') }}
        </div>
      </div>
      @endif

      <table class="table table-striped table-bordered">
          <thead>
              <tr>
                  <td>Judul</td>
                  <td>Ganti</td>
                  <td>Hapus</td>
              </tr>
          </thead>
          <tbody>
          @foreach($post as $value)
              <tr>
                  <td>{{ $value->title }}</td>
                  <td>
                      <a class="btn btn-xs btn-info" href="{{ URL::to('dashboard/post/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    </td><td>

                      {!! Form::open(array('url' => 'dashboard/post/' . $value->id)) !!}
                          {!! Form::hidden('_method', 'DELETE') !!}
                          <button class="btn btn-xs btn-danger" onClick="return confirm('Benar ingin menghapus?')" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                      {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>

				</div>
	</div>
</div>
@endsection
