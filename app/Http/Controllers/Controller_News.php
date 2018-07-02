<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\News;

class Controller_News extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_s = News::orderBy('id', 'desc')->paginate(10);
        return view('news.index')->withNews($news_s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('titulo' => 'required|max:255', 'autor' => 'required|max:255', 'conteudo' => 'required', 'imagem' => 'required|max:255')); // Validar o dado passado

        // Armazenar o dado no db
        $news = new News;
        $news->titulo = $request->titulo;
        $news->autor = $request->autor;
        $news->conteudo = $request->conteudo;
        $news->imagem = $request->imagem;
        $news->save();

        Session::flash('success', 'Sua noticia foi enviada com sucesso!');

        //redirecionar para pagina de confirmação
        return redirect()->route('news.show', $news->id);
        //return redirect('/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show')->withNews($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        Session::flash('success', 'A postagem foi deletada dos nossos servidores com sucesso!');
        return redirect('/home');
    }
}
