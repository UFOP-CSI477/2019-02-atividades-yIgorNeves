@extends('principal')

@section('pageTitle', 'Lista de Protocolos')

@section('conteudo')
    <h3>Lista de Protocolos</h3>
    <table class="table table-striped table-bordered">
    <thead class="table-light">
            <tr>
                <th>ID</th>      
                <th>Nome</th>      
                <th>User ID</th>      
                <th>Subject ID</th>      
                <th>Descrição</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->user_id }}</td>
                <td>{{ $c->subject_id }}</td>
                <td>{{ $c->description }}</td>
                <td>{{ $c->date }}</td>
                <td>
                <a class="btn btn btn-warning" href="{{route('admin.requets.editar', $c->id)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('admin.requets.deletar', $c->id)}}">Deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <a class="btn btn-primary" href="{{route('admin.requets.adicionar')}}">Adicionar</a>
    </div>

@endsection