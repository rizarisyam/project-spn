@push('css')
    <style>
        .form-control, .is-focused .form-control {
    background-image: linear-gradient(to top, #26c6da 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

    </style>
@endpush

    <div class="form-group">
        {!! Form::label('driver_id', 'Nama Supir', []) !!}

        {!! Form::select('driver_id',$supir, false, ['class' => 'form-control', 'id' => 'driver_id', 'placeholder' => 'Pilih Supir ...']) !!}

        @error('driver_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('vehicle_id', 'Model Mobil', []) !!}
        {!! Form::select('vehicle_id', $kendaraan, false, ['class' => 'form-control', 'id' => 'vehicle_id', 'placeholder' => 'Pilih Kendaraan ...']) !!}

        @error('vehicle_id')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>



{!! Form::submit('Submit', ['type' => 'button', 'class' => 'btn btn-info']) !!}
