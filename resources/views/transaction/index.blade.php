@extends('layouts.app', ['activePage' => 'transaction', 'titlePage' => 'Transaksi'])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <a href="{{ route('transaction.create') }}">
                <button type="button" class="btn btn-success">Tambah Data</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                @component('layouts.components.table')
                    @slot('table')
                        tableTransaksi
                    @endslot
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Supir</th>
                        <th scope="col">No Polisi</th>
                        <th scope="col">Jenis Material</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Muatan</th>
                        <th scope="col">Trip</th>
                        <th scope="col">Total Material</th>
                        <th scope="col">Total Trip</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $ts)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $ts->driver->nama }}</td>
                            <td>{{ $ts->vehicle->nopol }}</td>
                            <td>{{ $ts->jenis_material }}</td>
                            <td>{{ $ts->asal }}</td>
                            <td>{{ $ts->tujuan }}</td>
                            <td>{{ $ts->muatan }} M<sup>3</sup></td>
                            <td>{{ $ts->trip }}</td>
                            <td>@php
                                    $total_material = $ts->muatan * 110000;
                                    echo "Rp." . number_format($total_material,2,",",".");
                                @endphp
                            </td>
                            <td>@php
                                $total_trip = $ts->trip * $total_material;
                                echo "Rp." . number_format($total_trip,2,",",".");
                            @endphp
                        </td>

                            <td class="td-actions d-flex justify-content-around">

                                <a href="{{ route('transaction.edit', $ts->id) }}">
                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </a>

                                {!! Form::open(['route' => ['transaction.destroy', $ts->id]]) !!}
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
        $('#tableTransaksi').DataTable()
    })
</script>
@endpush
