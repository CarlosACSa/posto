@extends('adminlte::page')

@section('title', 'Mesclador')

@section('content_header')
    <h1 class="display-4">Planilhas</h1>
@stop


@section('content')

    <div class="card card-primary mt-3">
        <div class="card-header">
            <h3 class="card-title">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;"></font>
                </font>
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="processa.php" enctype="multipart/form-data">

            <div class="card-body mx-5">
                <div class="form-group">
                    <label for="exampleInputNome">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Observações</font>
                        </font>
                    </label>
                    <input type="text" class="form-control" id="exampleInputNome" placeholder="nomes, turnos ...">
                </div>


                <div class="col-md-4 ">

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Selecione a planilha (1) :</label>
                        <input class="form-control p-1" type="file" name="arquivo1">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Selecione a planilha (2) :</label>
                        <input class="form-control p-1" type="file" name="arquivo2">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Selecione a planilha (3) :</label>
                        <input class="form-control p-1" type="file" name="arquivo3">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Processar">
                <input type="reset" class="btn btn-danger m-3" value="Limpar Seleção">

                {{-- <a class="btn btn-success" href="{{ route('processa') }}">Executar</a> --}}

            </div>
        </form>
    </div>

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Procedimentos </font>
                </font>
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="display: block;">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">

                    <p>1. Com o Excel: abra cada uma delas e selecione salvar como xml.</p>
                    <p>2. Depois é só selecionar os arquivos e clicar em processar.</p>
                    <p>3. Para imprimir a reposição da loja clique em Relatórios e depois CTRL+P</p>
                </font>
            </font>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

@stop

@section('footer')
    <footer class="footer">
        <div class="container">
            <p></p>
        </div>
    </footer>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script>
        console.log('Hi!');
    </script> --}}
@stop
