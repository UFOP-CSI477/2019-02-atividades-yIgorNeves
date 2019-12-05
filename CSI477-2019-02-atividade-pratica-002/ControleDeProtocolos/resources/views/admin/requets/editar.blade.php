@extends('principal')

@section('pageTitle', 'Editar Protocolo')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editar Protocolo</h3>
        <div class="row">
            <form action="{{route('admin.requets.atualizar', $registro->id)}}" method="POST">
                {{csrf_field()}}    
                <input type="hidden" name="_method" value="put">
                @include('admin.requets._form')                
                <button class="btn btn-success">Atualizar</button>
            </form>
        </div>
    </div>
@endsection