
@extends('layouts.app', ['activePage' => 'penyewa', 'titlePage' => 'Penyewa'])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <a href="{{ route('rent.create') }}">
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
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Model Mobil</th>
                        <th scope="col">Nomor Polisi</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rent as $rent)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $rent->driver->nama }}</td>
                            <td>{{ $rent->vehicle->model }}</td>
                            <td>{{ $rent->vehicle->nopol }}</td>
                            <td class="td-actions d-flex justify-content-around">

                                <button type="button" rel="tooltip" class="btn btn-info" disabled>
                                    <i class="material-icons">person</i>
                                </button>

                                <a href="{{ route('rent.edit', $rent->id) }}">
                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </a>

                                {!! Form::open(['route' => ['rent.destroy', $rent->id]]) !!}
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

        const btnDelete = $('#btnDelete');
        // btnDelete.on('click', function(e) {

        //     swal({
        //         title: "Are you sure?",
        //         text: "Once deleted, you will not be able to recover this imaginary file!",
        //         icon: "warning",
        //         buttons: true,
        //         dangerMode: true,
        //         })
        //     .then((willDelete) => {
        //     if (willDelete) {
        //         swal("Poof! Your imaginary file has been deleted!", {
        //         icon: "success",
        //         });
        //     } else {
        //         swal("Your imaginary file is safe!");
        //     }
        //     });
        // });

    });
</script>

@endpush
