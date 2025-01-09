<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista() {
        $itens = \Cart::getContent();
        return view('site.carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request) {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('site.carrinho')->with('mensagem', 'produto adicionado no carrinho com sucesso');
    }

    public function removeCarrinho(Request $request) {
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('mensagem', 'produto removido do carrinho com sucesso');
    }

    public function atualizaCarrinho(Request $request) {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);

        return redirect()->route('site.carrinho')->with('mensagem', 'atualizado com sucesso');
    }
}
