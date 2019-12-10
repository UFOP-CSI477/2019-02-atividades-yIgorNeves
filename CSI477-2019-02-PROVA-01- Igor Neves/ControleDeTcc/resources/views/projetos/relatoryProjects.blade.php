@extends('layouts.app', ['page' => __('Relatorios dos Projetos')])

@section('pageTitle', 'Relatorio de Projetos')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Relatorio de Projetos') }}</h5>           
                </div>
                <div class="card-body">
                        <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Ano') }}</th>
                                    <th scope="col">{{ __('Titulo') }}</th>
                                    <th scope="col">{{ __('Semestre') }}</th>
                                    <th scope="col">{{ __('Professor') }}</th>
                                    <th scope="col">{{ __('Aluno') }}</th>
                                </thead>
                                <tbody>

                                        @foreach ($tcc as $c)
                                        <tr>
                                            <td>{{ $c->id }}</td>
                                            <td>{{ $c->ano }}</td>
                                            <td>{{ $c->titulo }}</td>
                                            <td>{{ $c->semestre }}</td>
                                            <td>{{ $c->professor_id }}</td>
                                            <td>{{ $c->aluno_id }}</td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection