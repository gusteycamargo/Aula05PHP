@extends('templates.main', ['titulo' => "Cadastrar"])

@section('conteudo')
    <h2>Cadastrar Cidade</h2>        
        
    <form action="{{ route('cidades.store') }} " method="POST">
        @csrf

        <div class="d-flex justify-content-between mb-4" style="width: 100%">
            <input style="width: 65%; heigth: 50px" class="btn btn-primary btn-lg btn-block" type="submit" value="Confirmar/Cadastrar">
            <a style="width: 30%; heigth: 50px" class="btn btn-warning btn-lg btn-block" href="{{ route('cidades.index') }}"> <h4>Voltar</h4> </a>
        </div>

        <div class="form-row d-flex justify-content-between" style="width: 100%">
            <div class="form-group" style="width: 65%">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="form-group" style="width: 30%">
                <label for="porte">Porte</label>
                <select class="form-control" name="porte" id="porte">
                    <option value="Pequeno">Pequeno</option>
                    <option value="Médio">Médio</option>
                    <option value="Grande">Grande</option>
                </select>                
            </div>
        </div>
    </form>
@endsection
