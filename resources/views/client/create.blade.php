@extends('templates.layout')

@section('titulo')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('/plugins/select2/select2.min.css') }}"> --}}
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-page-title :title="'Novo cliente'" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a class="breadcrumb-a" href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-a" href="{{ url('/client') }}">Cliente</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Novo cliente</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    <h5><i class="icon fas fa-ban"></i> Erro!</h5>
                    {{ Session::get('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    <h5><i class="icon fas fa-ban"></i> Erro!</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('client.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input id="nome" class="form-control" type="text" name="nome"
                                        maxlength="100" value="{{ old('nome') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">CPF</label>
                                    <input id="cpf" class="form-control" type="text" name="cpf" placeholder="___.___.___-__"
                                        value="{{ old('cpf') }}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email') }}" placeholder="name@example.com">
                                </div>
                            </div>
                            {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <label for="gerencia">Gerência</label>
                                <input id="gerencia" class="form-control" type="text" readonly name="gerencia"
                                    value="{{ old('gerencia') }}">
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <label for="empresaUser">Empresa</label>
                                <input id="empresaUser" class="form-control" type="text" readonly name="userempresa"
                                    value="{{ old('userempresa') }}">

                            </div> --}}
                        </div>

                            {{-- <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="empresas">Empresas</label>
                                    <select class="form-select select2-empresa" name="empresas[]" id="empresas"
                                        multiple='multiple'>
                                        @foreach ($empresas as $e)
                                            <option value="{{ $e->idempresa }}"
                                                {{ collect(old('empresas'))->contains($e->idempresa) ? 'selected' : '' }}>
                                                {{ $e->nome }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Endereços Confidenciais</label>
                                    <select class="form-select select2-endconfidencial" name="endconfidencial[]"
                                        id="endconfidencial" multiple='multiple'>
                                        @foreach ($enderecos as $endereco)
                                            <option value="{{ $endereco->idend }}"
                                                {{ collect(old('endconfidencial'))->contains($endereco->idend) ? 'selected' : '' }}>
                                                {{ $endereco->nome }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="empresas">Papéis</label>
                                    <select class="form-select select2-papel" name="papeis[]" id="papeis"
                                        multiple='multiple'>
                                        @foreach ($papeis as $p)
                                            <option value="{{ $p->id }}"
                                                {{ collect(old('papeis'))->contains($p->id) ? 'selected' : '' }}>
                                                {{ $p->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6" id="divPaginas">
                                    <div class="form-group">
                                        <label for="empresas">Páginas Alimentadoras</label>
                                        <select class="form-select select2-pagina" name="paginas[]" id="paginas"
                                            multiple='multiple'>
                                            @foreach ($paginas as $p)
                                                <option value="{{ $p->idpagalimentadora }}"
                                                    {{ collect(old('paginas'))->contains($p->idpagalimentadora) ? 'selected' : '' }}>
                                                    {{ $p->nomepagina }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Alertas</label>
                                    <select class="form-select select2-alertas" name="alertas[]"
                                        id="alertas" multiple='multiple'>
                                       <option value="CartaEnceramento" {{ collect(old('alertas'))->contains("CartaEnceramento") ? 'selected' : '' }}>Carta Enceramento</option>
                                       <option value="InformativoDesenvolvimento" {{ collect(old('alertas'))->contains("InformativoDesenvolvimento") ? 'selected' : '' }}>Informativo Desenvolvimento</option>
                                       <option value="CadastroANP" {{ collect(old('alertas'))->contains("CadastroANP") ? 'selected' : '' }}>Cadastro ANP</option>
                                       <option value="ChecarRecebimento" {{ collect(old('alertas'))->contains("ChecarRecebimento") ? 'selected' : '' }}>Checar Recebimento</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                <div class="form-group">
                                    <label for="">Tipo de Usuário</label>
                                    <select class="custom-select form-control-border" name="tipousuario" id="tipousuario"
                                        class="form-select">
                                        <option value=""></option>
                                        <option value="-1" {{ old('tipousuario') == '-1' ? 'selected' : '' }}>
                                            Interno
                                        </option>
                                        <option value="1" {{ old('tipousuario') == '1' ? 'selected' : '' }}>
                                            Externo
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-2">
                            <div class="form-group">
                                <label for="tipoacesso">Tipo de Acesso</label>
                                <select name="tipoacesso" id="tipoacesso" class="custom-select form-control-border">
                                    <option value=""></option>
                                    <option {{ old('tipoacesso') == '-1' ? 'selected' : '' }} value="-1">Usuário
                                    </option>
                                    <option {{ old('tipoacesso') == '2' ? 'selected' : '' }} value="2">
                                        Alimentador</option>
                                </select>
                            </div>
                        </div>
                        </div> --}}

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-2">
                                    <div class="form-group">
                                        <button class="btn btn-primary" name="btn-salvar" id="btn-salvar" type="submit">
                                            <i class="fas fa-save"></i>
                                            Salvar
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/loadingoverlay/loadingoverlay.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.mask.min.js') }}"></script>
    {{-- <script src="{{ asset('plugins/select2/select2.min.js') }}"></script> --}}

    <script>
        $(document).ready(function($){
            $('#cpf').mask('999.999.999-99');
            $('#celular').mask('(99) 9 9999-9999');
        });
        // $(document).ready(function() {
        //     $('#divPaginas').hide();

        //     var paginas = $('#paginas').val();
        //     if (paginas.length == 0) {
        //         $('#divPaginas').hide();
        //         $('paginas').val("");
        //     } else {
        //         $('#divPaginas').show();
        //     }

        //     if ($('#chave').val() != "") {
        //         $("#chave").attr('readonly', true);
        //     }

        //     var tipoAcesso = $('#tipoacesso').val();
        //     if (tipoAcesso == 2){
        //         $('#divPaginas').show();
        //     }else{
        //         $('#divPaginas').hide();

        //     }
        // });


        // $(document).on('click', '#btn-limpar', function() {
        //     $("#imgUser").attr("src", "{{ asset('assets/img/user.svg') }}");
        //     $('#chave').val("");
        //     $("#chave").attr('readonly', false);
        //     $('#nome').val("");
        //     $("#email").val("");
        //     $("#gerencia").val("");
        //     $("#tipousuario").val("");
        //     $("#empresaUser").val("");
        // });


        // $('.select2-empresa').select2({
        //     placeholder: "Selecione uma Empresa",
        //     allowClear: true
        // });

        // $('.select2-endconfidencial').select2({
        //     placeholder: "Selecione um Endereço",
        //     allowClear: true
        // });

        // $('.select2-alertas').select2({
        //     placeholder: "Selecione os alertas",
        //     allowClear: true
        // });

        // $('.select2-pagina').select2({
        //     placeholder: "Selecione uma Página",
        //     allowClear: true
        // });

        // $('.select2-papel').select2({
        //     placeholder: "Selecione um Papel",
        //     allowClear: true
        // });

        // $('#tipoacesso').change(function() {
        //     if ($('#tipoacesso').val() == '2') {
        //         $('#divPaginas').show();
        //     } else {
        //         $('#divPaginas').hide();
        //         $('#paginas').val("");
        //     }
        // });

        $("#btn-salvar").click(function() {
            $.LoadingOverlay("show", {
                image: "",
                fontawesome: "fa fa-cog fa-spin"
            });
        });
    </script>
@endsection
