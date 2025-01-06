@extends('site.layout')

@section('title', 'Home')
    

@section('conteudo')

    <h1>Essa é nossa home</h1>

    @include('includes.mensagem', ['titulo' => 'mensagem de sucesso!'])

    @component('components.sidebar')

        @slot('paragrafo')
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero architecto odit fugit assumenda ea! Ipsam maxime laborum ullam praesentium dignissimos cupiditate dolorum sed rerum suscipit, quaerat nemo! Velit, dolorem saepe?
        @endslot
        
    @endcomponent
    
@endsection

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush