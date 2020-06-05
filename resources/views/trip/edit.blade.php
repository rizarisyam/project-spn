@extends('layouts.app', ['activePage' => 'trip', 'titlePage' => 'Trip'])

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
            {!! Form::model($trip,['route' => ['trip.update', $trip->id]]) !!}
                @csrf
                @method('patch')
                @include('trip.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
