@extends('layouts.app', ['page' => __('Relatorio de Estudantes')])

@section('pageTitle', 'Relatorio de Estudantes')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                
                    @csrf
                    <h5 class="title">{{ __('Relatorio de Estudantes') }}</h5>                        
                </div>
                <div class="card-body">
                        <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Curso') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($aluno as $c)
                                        <tr>
                                            <td>{{ $c->id }}</td>
                                            <td>{{ $c->name }}</td>
                                            <td>{{ $c->curso }}</td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection