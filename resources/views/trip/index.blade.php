@extends('layouts.app', ['activePage' => 'trip', 'titlePage' => 'Trip'])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <a href="{{ route('trip.create') }}">
                <button type="button" class="btn btn-success">Tambah Data</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
                @component('layouts.components.table')
                    @slot('table')
                        tableTrip
                    @endslot
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Trip</th>
                        <th scope="col">Tarif</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trips as $trip)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $trip->trip }}</td>
                            <td>{{ $trip->tarif }}</td>
                            <td class="td-actions d-flex">

                                {{-- <button type="button" rel="tooltip" class="btn btn-info" disabled>
                                    <i class="material-icons">person</i>
                                </button> --}}

                                <a href="{{ route('trip.edit', $trip->id) }}" class="mr-2">
                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </a>

                                {!! Form::open(['route' => ['trip.destroy', $trip->id]]) !!}
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
        $('#tableTrip').DataTable();

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
