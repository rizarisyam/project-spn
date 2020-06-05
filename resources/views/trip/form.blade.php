@push('css')
    <style>
        .form-control, .is-focused .form-control {
    background-image: linear-gradient(to top, #26c6da 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

    </style>
@endpush
<div class="form-group mt-3">
    {!! Form::label('trip', 'Trip', []) !!}
    {!! Form::text('trip', null, ['class' => 'form-control '.$errors->first('trip', 'has-danger'), 'id' => 'trip']) !!}

    @error('trip')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('tarif', 'Tarif', []) !!}
    {!! Form::text('tarif', null, ['class' => 'form-control', 'id' => 'tarif']) !!}

    @error('tarif')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>


{!! Form::submit('Submit', ['type' => 'button', 'class' => 'btn btn-info']) !!}
