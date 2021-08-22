<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <div>
        <h1> Bem vindo ao Fornecedor</h1>


        {{-- É desta forma que se comenta usando o blade do laravel, o renderizador de views --}}

        {{-- posso tanto usar o {{ }} quanto o <?= ?> para utilizar coisas relacionadas ao php --}}

        @php
            // uma forma de inserir puramente o php na página
            // echo $lista_fornecedores['nomes'][0]
            
        @endphp
        {{-- @dd($lista_fornecedores) serve para printar na tela da melhor maneira oq vc ta recebendo --}}
{{--
        @isset($lista_fornecedores)
            @if (count($lista_fornecedores) == 1)
            <a>Existem ao menos 1 fornecedor</a>
            
            @elseif (count($lista_fornecedores) == 2)
                <a>Mais de dois fornecedores</a>
            @endif


            @for ($i = 0; $i < count($lista_fornecedores['nomes']); $i++)

                <br>    
                <a>Nomes {{$i}}: {{$lista_fornecedores['nomes'][$i]}}</a>
                <br>
            @endfor
            
        @endisset
--}}
{{--
        @empty($lista_fornecedores['nomes'])
            <a>Entrou</a>
            
        @endempty
--}}
        @foreach ($lista_fornecedores as $index => $forne)
            <hr>
                Nome : {{$forne['nome']}} 
            <br>Idade : {{$forne['idade']}}
            <br>Cidade: {{$forne['cidade']}}
            <br>Sexo: {{$forne['sexo'] ?? ''}}
        @endforeach
        <hr>
    <div>
</body>
</html>