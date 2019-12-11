@extends('layouts.app', ['page' => __('Inserir Projeto'), 'pageSlug' => 'users'])

@section('pageTitle', 'Inserir Projetos')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Inserir Projeto') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('relatorio.incluir') }}" class="btn btn-sm btn-primary">{{ __('Voltar a Lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('relatorio.salvar') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Informaçoes sobre o projeto') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="titulo">{{ __('Titulo') }}</label>
                                    <input type="text" name="titulo" id="titulo" class="form-control form-control-alternative{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Titulo') }}" value="{{ old('titulo') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'titulo'])
                                </div>
                                <div class="form-group{{ $errors->has('ano') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ano">{{ __('Ano') }}</label>
                                    <input type="number" name="ano" id="ano" class="form-control form-control-alternative{{ $errors->has('ano') ? ' is-invalid' : '' }}" placeholder="{{ __('Ano') }}" value="{{ old('ano') }}" required>
                                    @include('alerts.feedback', ['field' => 'ano'])
                                </div>
                                <div class="form-group{{ $errors->has('semestre') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="semestre">{{ __('Semestre') }}</label>
                                    <input type="number" name="semestre" id="semestre" class="form-control form-control-alternative{{ $errors->has('semestre') ? ' is-invalid' : '' }}" placeholder="{{ __('Semestre') }}" value="" required>
                                    @include('alerts.feedback', ['field' => 'semestre'])
                                </div>

                                <div class="dropdown show">
                                    <label for="nome_professor"> Nome do professor</label>
                                    <select id="nome_professor" class="form-control" name="professor_id">                                                                    
                                        @foreach ($prof as $x)
                                            <option value="{{isset($x->id) ? $x->id : ''}}" class="dropdown-menu dropdown-black" >{{isset($x->name) ? $x ->name : ''}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="dropdown show">
                                    <label for="nome_aluno"> Nome do aluno</label>
                                    <select id="nome_aluno" class="form-control" name="aluno_id">                                                                    
                                        @foreach ($aluno as $x)
                                            <option value="{{isset($x->id) ? $x->id : ''}}"  class="dropdown-menu dropdown-black">{{isset($x->name) ? $x ->name : ''}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Salvar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
