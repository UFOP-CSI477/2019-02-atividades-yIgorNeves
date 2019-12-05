  
@extends('principal')

@section('pageTitle', 'Pagina Principal')


@section('conteudo')

<table class="table table-striped table-bordered">
  <thead class="table-light">
    <tr>
      <th>Nome</th>      
      <th>Preço</th>
    </tr>
  </thead>
  <tbody>
@foreach ($req as $c)
    <tr>
      <td>{{ $c->name }}</td>
      <td>{{ $c->price }}</td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection