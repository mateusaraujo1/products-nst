@extends('site.layout')

@section('title', 'Home')
    

@section('conteudo')

    <h3>Categoria:</h3>

    <div class="row container">

        @foreach ($produtos as $produto)
            
            <div class="col s12 m4">

                <div class="card">

                    <div class="card-image">
                        <img src="{{$produto->imagem}}">
                        <span class="card-title">{{ $produto->nome }}</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('site.details', $produto->slug) }}"><i class="material-icons">visibility</i></a>
                    </div>

                    <div class="card-content">

                    <p>{{ Str::limit($produto->descricao, 30, '...') }}</p>

                    </div>

                </div>

            </div>

        @endforeach

        <div class="row center">
            {{ $produtos->links('custom.pagination') }}
        </div>

        
    </div>
    
@endsection

