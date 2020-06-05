@extends('layouts.app', ['activePage' => 'supir', 'titlePage' => 'Supir'])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <a href="{{ route('driver.create') }}">
                <button type="button" class="btn btn-success">Tambah Data</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
                @component('layouts.components.table')
                    @slot('table')
                        tableSupir
                    @endslot
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supir as $supir)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $supir->nik }}</td>
                            <td>{{ $supir->nama }}</td>
                            <td>{{ $supir->jenis_kelamin }}</td>
                            <td>{{ $supir->alamat }}</td>
                            <td class="td-actions d-flex justify-content-around">

                                <a href="{{ route('driver.edit', $supir->id) }}">
                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </a>

                                {!! Form::open(['route' => ['driver.destroy', $supir->id]]) !!}
                                @csrf
                                @method('delete')
                                <button type="submit" rel="tooltip" class="btn btn-danger" id="btnDelete">
                                    <i class="material-icons">close</i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach


                </tbody>
                @endcomponent
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')

<script>
    $(document).ready(function(){
        $('#tableSupir').DataTable();

    });
</script>

@endpush
