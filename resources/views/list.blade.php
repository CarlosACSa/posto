@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listagem de reposição: ( CTRL + P para Imprimir )</h1>
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12 ">

            <table class="table table-dark table-borderless table-sm">
                <thead>
                    <tr>
                        <th>Classificação</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($vendas as $venda)
                    <tr >
                        <td>{{ $venda->classificacao }}</td>
                        <td>{{ $venda->produto }}</td>
                        <td>{{ $venda->quantidade }}</td>
                    </tr>
                    @endforeach


                </tbody>
            </table>



        </div>
    </div>

</div>








@stop


@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        // console.log('Hi!');
    </script>
@stop
