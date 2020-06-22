@extends('templates.main', ['titulo' => "Cidade"])

@section('conteudo')
    <h2>Informações da cidade</h2>

    <a href="{{route('cidades.index')}}"> <h4>Voltar</h4> </a>
    <h4>ID: {{ $dados['id'] }}</h4>
    <h4>Nome: {{ $dados['nome'] }}</h4>
    <h4>Porte: {{ $dados['porte'] }}</h4>
@endsection

