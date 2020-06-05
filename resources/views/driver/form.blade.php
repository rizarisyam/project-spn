@push('css')
    <style>
        .form-control, .is-focused .form-control {
    background-image: linear-gradient(to top, #26c6da 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

    </style>
@endpush
<div class="form-group mt-3">
    {!! Form::label('nik', 'NIK', []) !!}
    {!! Form::text('nik', null, ['class' => 'form-control '.$errors->first('nik', 'has-danger'), 'id' => 'nik']) !!}

    @error('nik')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('nama', 'Nama Lengkap', []) !!}
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}

    @error('nama')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('tempatLahir', 'Tempat Lahir', []) !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'id' => 'tempatLahir']) !!}

    @error('tempat_lahir')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('tanggalLahir', 'Lahir Lahir', []) !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control', 'id' => 'tanggalLahir']) !!}

    @error('tanggal_lahir')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

{!! Form::label(null, 'Jenis Kelamin', []) !!}
<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L" >
        Laki-laki
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>

<div class="form-check form-check-radio mb-3">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" checked>
        Perempuan
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>

    @error('jenis_kelamin')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

<div class="form-group mt-4">
    {!! Form::label('alamat', 'Alamat', []) !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => 3]) !!}

    @error('alamat')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group mt-3">
    {!! Form::label('noHp', 'No Hp', []) !!}
    {!! Form::text('no_tlp', null, ['class' => 'form-control', 'id' => 'noHp']) !!}

    @error('no_tlp')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

{!! Form::submit('Submit', ['type' => 'button', 'class' => 'btn btn-info']) !!}
