@extends('layouts.app', ['page' => __('Incluir Projetos')])

@section('pageTitle', 'Incluir Projetos')

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Adicionar Projeto') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('relatorio.adicionar') }}" class="btn btn-sm btn-primary">{{ __('Adicionar projeto') }}</a>
                        </div>
                    </div>
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