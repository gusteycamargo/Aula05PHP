@extends('templates.main', ['titulo' => "Cidades"])

@section('conteudo')
    <a href="{{ route('cidades.create') }}"><h4>Nova Cidade</h4></a>

    @component(
        'components.tablelist', [
            "header" => ['ID', 'Nome', 'E-mail', 'Eventos'],
            "cidades" => $cidades
        ]
    )
    @endcomponent
@endsection
