<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}"/>
    </head>

    <body>
        <!-- para fazer a inclusao parcial de certos elementos podemos usar o include tanto aqui quanto nos outros arquivos-->
        @include('site.layouts._partials.topo')

        @yield('conteudo')
    </body>
</html>