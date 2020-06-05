<div class="form-group mb-3">
    {!! Form::label('supir', 'Nama Supir', []) !!}
    <select name="driver_id" id="supir" class="form-control">
        <option value="">------</option>
        @foreach ($supir as $supir)
            <option value="{{ $supir->driver_id }}">{{ $supir->driver->nama }}</option>
        @endforeach

    </select>
</div>

<div class="form-group mb-3" id="nopolParrent">
    {!! Form::label('nopol', 'No Polisi', []) !!}
    <select name="vehicle_id" id="nopol" class="form-control" disabled>
        {{-- @foreach ($kendaraan as $kendaraan) --}}
            <option value=""></option>
        {{-- @endforeach --}}

    </select>
</div>

<div class="form-group mb-3">
    {!! Form::label('jenisMuatan', 'Jenis Material', []) !!}
    {!! Form::text('jenis_material', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('asal', 'Asal', []) !!}
    {!! Form::text('asal', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('tujuan', 'Tujuan', []) !!}
    {!! Form::text('tujuan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('muatan', 'Muatan (m3)', []) !!}
    {!! Form::text('muatan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('trip', 'Jumlah Trip', []) !!}
    {!! Form::text('trip', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Submit', ['type' => 'button', 'class' => 'btn btn-info']) !!}

