@extends('layouts.app', ['page' => __('Area Geral')])

@section('pageTitle', 'Area Geral')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <form action="{{route('pesquisa')}}" method="POST">
                        @csrf
                        <h5 class="title">{{ __('Pesquisa de Professores') }}</h5>
                        <input type="text" name="area" class="form-control form-control-alternative{{ $errors->has('area') ? ' is-invalid' : '' }}" placeholder="{{ __('Area') }}"> 
                        <button class="btn btn-sm btn-primary" type="submit">{{ __('Pesquisar') }}</button>
                        
                    </form>            
                </div>
                <div class="card-body">
                        <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Area') }}</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </thead>
                                <tbody>
                                    @foreach ($professor as $c)
                                        <tr>
                                            <td>{{ $c->name }}</td>
                                            <td>{{ $c->area }}</td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection