@extends('principal')

@section('pageTitle', 'Realizar Protocolo')

@section('conteudo')
    <div class="container">
        <h3 class="center">Realizar Protocolo</h3>
        <div class="row">
            <form action="{{route('admin.requets.salvar')}}" method="POST">
                {{csrf_field()}}    
                @include('admin.requets._form')

                <button class="btn btn-success"> Salvar</button>
            </form>
        </div>
    </div>
@endsection