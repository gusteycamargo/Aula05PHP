@extends('templates.main', ['titulo' => "Cadastrar"])

@section('conteudo')
    <h2>Cadastrar Cidade</h2>

    <form action="{{ route('cidades.store') }} " method="POST">
        @csrf
        <a href="{{ route('cidades.index') }}"> <h4>Voltar</h4> </a>
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Porte</label>
        <input type="text" name="porte">
        <input type="submit" value="Salvar">
    </form>
@endsection
