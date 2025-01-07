@extends('site.layout')

@section('title', 'Home')
    

@section('conteudo')

    <div class="row container">

        @foreach ($produtos as $produto)
            
            <div class="col s12 m4">

                <div class="card">

                    <div class="card-image">
                        <img src="{{$produto->imagem}}">
                        <span class="card-title">{{ $produto->nome }}</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
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

