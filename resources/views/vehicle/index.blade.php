@extends('layouts.app', ['activePage' => 'kendaraan', 'titlePage' => 'Kendaraan'])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info d-flex justify-content-between">
            <a href="{{ route('vehicle.create') }}">
                <button type="button" class="btn btn-success">Tambah Data</button>
            </a>
            @if (session()->has('pesan'))
            <div class="alert alert-danger alert-dismissible fade show h5" role="alert">
                <strong>Success!</strong> {{ session()->get('pesan') }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
                @component('layouts.components.table')
                    @slot('table')
                        tableKendaraan
                    @endslot
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Polisi</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Model</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kendaraan as $kd)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $kd->nopol }}</td>
                            <td>{{ $kd->merek }}</td>
                            <td>{{ $kd->model }}</td>
                            <td>{{ $kd->tahun }}</td>
                            <td class="td-actions d-flex justify-content-around">

                                <button type="button" rel="tooltip" class="btn btn-info" disabled>
                                    <i class="material-icons">person</i>
                                </button>

                                <a href="{{ route('vehicle.edit', $kd->id) }}">
                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </a>

                                {!! Form::open(['route' => ['vehicle.destroy', $kd->id]]) !!}
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
        $('#tableKendaraan').DataTable();

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
