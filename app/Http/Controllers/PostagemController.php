<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::all();
        //dd($postagens);
        return view('postagem.index', ['postagens' => $postagens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postagem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'conteudo' => 'required'
        ]);
        
        $postagem = new postagem;
        $postagem->id = $request->id;
        $postagem ->titulo = $request->titulo;
        $postagem ->conteudo = $request->conteudo;
        $postagem -> save();

        return redirect('/')->with('status', 'criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd($id);
        $postagem = Postagem::findOrFail($id);
        return view ('postagem.show', ['postagem' => $postagem]);
        //dd($postagem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem = postagem::find($id);
        return view('postagem.edit', ['postagem' => $postagem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $validated = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'conteudo' => 'required'
        ]);
        
        $postagem = postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->save();

        return redirect('/')->with('status', 'editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = postagem::find($id);
        $postagem -> delete();

        return redirect('/')->with('status', 'excluido com sucesso!');
    }
}