@extends('templates.layout')

@section('titulo')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/datatables.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/plugins/datatables/Select-1.4.0/css/select.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/Responsive-2.3.0/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/Buttons-2.2.3/css/buttons.bootstrap5.min.css') }}"> --}}
    <style>
        div.dataTables_processing {
            z-index: 1;
        }

        .form-select {
            font-size: small;
        }

        .form-select:focus {
            border-color: #06ff81;
            box-shadow: 0 0 0 .2rem rgba(0, 133, 66, .25);
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-page-title :title="'Clientes'" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a class="breadcrumb-a" href="{{ url('/adm') }}">Home</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Clientes</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col mb-1">
            <a href="{{ route('client.create') }}" class='btn btn-sm btn-primary'>
                <i class="fas fa-plus"></i>
                Novo
            </a>
        </div>

    </div>

    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <div class="col" style="padding: 0px">


                        <table id="table-clients" class='table table-bordered table-striped w-100'>
                            <thead class="">
                                <th></th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Endereço</th>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    {{-- <script src="{{ asset('plugins/datatables/Buttons-2.2.3/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/Select-1.4.0/js/select.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/Responsive-2.3.0/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/loadingoverlay/loadingoverlay.min.js') }}"></script> --}}

    <script>
        var TOKEN = {!! json_encode(csrf_token()) !!}



        $(document).ready(function() {
            $('#table-clients').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "sSearch": "Pesquisa: ",
                dom: 'Bfrtip',
                buttons: [],

                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ url('/client/datatable') }}/",
                    data: function(d) {
                        d.search = $('input[type="search"]').val()
                    }
                },

                "columns": [{
                        data: 'action',
                        orderable: false,
                        searchable: false,
                        responsivePriority: 1,
                        width: '80px',
                        className: "dt-center",
                    },
                    {
                        data: 'nome',
                        name: 'nome'
                    },
                    {
                        data: 'cpf',
                        name: 'cpf'
                    },

                    {
                        data: 'cel',
                        name: 'cel'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'endereco',
                        name: 'endereco'
                    },
                ],

                "order": [],

                "language": {
                    url: "{{ url('/plugins/datatables/PT_BR.json') }}"
                }
            });
        });


        // function disableUser(id, status) {
        //     $.ajax({
        //         type: "POST",
        //         url: "{{ url('/user/disableEnable') }}",
        //         data: {
        //             "_token": TOKEN,
        //             id: id,
        //             status: status
        //         },

        //         success: function(response) {
        //             $('#table-Users').DataTable().ajax.reload();
        //         }
        //     });
        // }
    </script>
@endsection
