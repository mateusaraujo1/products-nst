@extends('site.layout')

@section('title', 'Carrinho')
    

@section('conteudo')


<div class="row container">

      @if($mensagem = Session::get('mensagem'))

        <div class="card green">
          <div class="card-content white-text">
            <p>{{ $mensagem }}</p>
          </div>
        </div>
          
      @endif

      <h5>Seu carrinho possui: {{ $itens->count() }} produtos </h5>

        <table class="striped">
            <thead>
              <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Quantidade</th>
                  <th></th>
              </tr>
            </thead>
            <tbody>

        @foreach ($itens as $item)
    
              <tr>
                <td><img src="{{$item->attributes->image}}" alt="" width="70px" class="responsive-img circle"></td>
                <td>{{$item->name}}</td>
                <td>R${{  number_format($item->price, 2, ',', '.')  }}</td>

                {{-- BTN ATUALIZAR --}}

                <td>

                  <form action="{{ route('site.atualizacarrinho') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="id">
                    <input style="width: 40px; font-weight: 900" class="white center" type="number" name="quantity" value="{{$item->quantity}}">
                    <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></a>

                  </form>

                </td>

                <td> 

                  
                  {{-- BTN REMOVER --}}

                  <form action="{{ route('site.removecarrinho') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="id">

                    <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a> 

                  </form>

                </td>
              </tr>
              
        @endforeach

            </tbody>
          </table>

        <div class="row container center">
          <button class="btn waves-effect waves-light blue">Continuar comprando <i class="material-icons right">arrow_back</i></a> </td>
          <button class="btn waves-effect waves-light blue">Limpar carrinho <i class="material-icons right">clear</i></a> </td>
          <button class="btn waves-effect waves-light green">Finalizar pedido <i class="material-icons right">check</i></a> </td>
        </div>

        
    </div>
    
@endsection

