@extends('site.layouts.basico')


<!-- o nome da varivavel titulo tem que ser igual a apontada na array de associação-->
@section('titulo',$titulo)

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato',['classe' => "borda-preta"])
                    <p>Nossa equipe entrará em contato em 48h</p>
                @endcomponent
            </div>
        </div>  
    </div>

    @include('site.layouts._partials.baixo')
@endsection
