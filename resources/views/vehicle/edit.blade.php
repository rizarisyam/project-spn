@extends('layouts.app', ['activePage' => 'vehicle', 'titlePage' => 'Kendaraan'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-info">
            <p class="text-monospace text-dark font-weight-bold">Form Kendaraan</p>
          </div>
          <div class="card-body">
            {!! Form::model($vehicle,['route' => ['vehicle.update', $vehicle->id]]) !!}
                @method('patch')
                @include('vehicle.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
