@extends('templates.main', ['titulo' => "Editar"])

@section('conteudo')
    <h2>Alterar Cidade</h2>
    <form action="{{ route('cidades.update', $dados['id']) }} " method="POST">
        @csrf
        @method('PUT')

        <div class="d-flex justify-content-between mb-4" style="width: 100%">
            <input style="width: 65%; heigth: 50px" class="btn btn-primary btn-lg btn-block" type="submit" value="Confirmar/Cadastrar">
            <a style="width: 30%; heigth: 50px" class="btn btn-warning btn-lg btn-block" href="{{ route('cidades.index') }}"> <h4>Voltar</h4> </a>
        </div>

        <div class="form-row d-flex justify-content-between" style="width: 100%">
            <div class="form-group" style="width: 65%">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" value='{{ $dados['nome'] }}'>
            </div>
            <div class="form-group" style="width: 30%">
                <label for="porte">Porte</label>
                <select class="form-control" name="porte" id="porte" value='{{ $dados['porte'] }}'>
                    <option value="Pequeno" @if($dados['porte'] == 'Pequeno') selected @endif>Pequeno</option>
                    <option value="Médio" @if($dados['porte'] == 'Médio') selected @endif>Médio</option>
                    <option value="Grande" @if($dados['porte'] == 'Grande') selected @endif>Grande</option>
                </select>                
            </div>
        </div>
    </form>
@endsection



