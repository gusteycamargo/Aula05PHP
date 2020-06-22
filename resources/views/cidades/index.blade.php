@extends('templates.main', ['titulo' => "Cidades"])

@section('conteudo')
    <a class="btn btn-primary btn-lg btn-block" href="{{ route('cidades.create') }}"><h4>Nova Cidade</h4></a>

    <x-tablelist :header="['Cidade', 'Eventos']" :cidades="$cidades"/>
    
@endsection
