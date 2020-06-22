<html>
    <head>
        <title>Sistema de Gestão de Municípios - Governo do Paraná</title>
        <meta charset="UTF-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="p-3 mb-2 bg-dark flex-row text-white d-flex justify-content-center">
            <h2 class="mr-3">{{$titulo}}</h2>
            <h2>SGM - Sistema de Gerenciamento de Municípios</h2>   
        </div>
        <div class="card">
            <div class="card-body">
                @yield('conteudo')
            <div>
        </div>
    </body>
    <footer>
        <b>&copy;2020 - Gustavo Galdino de Camargo.</b>
    </footer>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</html>