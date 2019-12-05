@extends('principal')

@section('pageTitle', 'Cadastro')

@section('conteudo')

    <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Cadastro</h5>
            <form class="form-signin" action="{{route('site.cadastro.salvar')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-label-group">
                    <label for="inputUser">Usuário</label>
                    <input name="name" type="user" id="inputUser" class="form-control" placeholder="Usuário" required autofocus>
                    
                </div>
                
                <div class="form-label-group">
                    <label for="inputEmail">E-mail</label>
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    
                </div>

                <div class="form-label-group">
                    <label for="inputPassword">Senha</label>
                    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                    
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Lembrar-se de mim</label>
                </div>
                
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Cadastrar</button>
                <hr class="my-4">
                <a href="{{url('login')}}" class="btn btn-lg btn-google btn-block text-uppercase">Já possui conta?</a>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection

