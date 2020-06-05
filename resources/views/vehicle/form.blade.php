@push('css')
    <style>
        .form-control, .is-focused .form-control {
    background-image: linear-gradient(to top, #26c6da 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

    </style>
@endpush

<div class="form-group mt-3">
    {!! Form::label('nopol', 'No Polisi', []) !!}
    {!! Form::text('nopol', null, ['class' => 'form-control '.$errors->first('nopol', 'has-danger'), 'id' => 'nopol']) !!}

    @error('nopol')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('merek', 'Merek', []) !!}
    {!! Form::text('merek', null, ['class' => 'form-control', 'id' => 'merek']) !!}

    @error('merek')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('model', 'Model', []) !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'id' => 'model']) !!}

    @error('model')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('tahun', 'Tahun', []) !!}
    {!! Form::text('tahun', null, ['class' => 'form-control', 'id' => 'tahun']) !!}

    @error('tahun')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>


{!! Form::submit('Submit', ['type' => 'button', 'class' => 'btn btn-info']) !!}
