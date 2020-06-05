

@extends('layouts.app', ['activePage' => 'transaction', 'titlePage' => 'Transaksi'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-info">
            <p class="text-monospace text-dark font-weight-bold">Form Kendaraan</p>
          </div>
          <div class="card-body">
            {!! Form::open(['route' => ['transaction.store']]) !!}
                @method('post')
                @include('transaction.form')
            {!! Form::close() !!}
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
        $('#supir').change(function(){

            let supir_id = $(this).val()

            let div = $(this).parent()


            let op = " "
            let input = " "
            $.ajax({
                type: 'get',
                url: '/find-nopol',
                data: {'id': supir_id},
                success: function(data){

                    for(let i = 0; i < data.length; i++)
                    {
                        op +='<option value="'+data[i].id+'" selected>'+data[i].nopol+'</option>'
                        input +='<input value="'+ data[i].id+'" type="hidden" name="vehicle_id">'
                    }

                    $('#nopol').append(op)
                    $('#nopolParrent').append(input)

                }
            })
        })
    })
</script>
@endpush

