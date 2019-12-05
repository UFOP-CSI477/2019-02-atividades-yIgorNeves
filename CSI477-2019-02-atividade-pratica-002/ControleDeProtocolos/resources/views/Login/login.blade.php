@extends('principal')

@section('pageTitle', 'Login')

@section('conteudo')
   
        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form class="form-signin" action="{{route('site.login.entrar')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-label-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
                    <label for="inputEmail">E-mail</label>
                    </div>
    
                    <div class="form-label-group">
                    <input type="password" name="password" class="form-control" placeholder="Senha" required>
                    <label for="inputPassword">Senha</label>
                    </div>
    
                    
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                    <hr class="my-4">
                    <a href="{{url('cadastro')}}" class="btn btn-lg btn-google btn-block text-uppercase">Ainda não possui conta?</a>
                    
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>

@endsection()