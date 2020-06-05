@extends('layouts.app', ['activePage' => 'supir', 'titlePage' => 'Supir'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-info">
            <p class="text-monospace text-dark font-weight-bold">Form Supir</p>
          </div>
          <div class="card-body">
            {!! Form::model($driver,['route' => ['driver.update', $driver->id]]) !!}
                @csrf
                @method('patch')
                @include('driver.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
