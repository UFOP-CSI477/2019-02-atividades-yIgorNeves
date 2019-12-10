@extends('layouts.app', ['page' => __('Sobre')])

@section('pageTitle', 'Sobre')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Sobre') }}</h5>
                </div>
                <div class="card-body">
                    <h5>Prova de Sitemas Web</h5>
                </div>                
            </div>            
        </div>
    </div>
        
@endsection