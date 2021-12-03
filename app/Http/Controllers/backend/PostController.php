<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage; //importamos para eliminar img

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        /**  
         * dd($request->all());
         * esta comentado para que en pantalla aparezca
         * "ceado con exito" al enviar un post, debo descomentar
         * hasta el ";" y comenzando en "dd" para ver los detalles de la 
         * informacioón enviada en el formulario, como tipos de archivo y mas
        */
        //Salvar

        $post = Post::create([
            'user_id' => auth()->user()->id
        ] + $request->validated()        
        );

        //Imagen

        if ($request->file('file')) {
            $post->image = $request->file('file')-> store('posts', 'public');                
            $post->save();
        } 

        //Retornar
        
        return back()->with('status', 'Creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    //public function show(Post $post) el profe pidio eliminarlo pero lo dejo para cambios futuros solo comentado 
    //{
        //
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {    
        $post->update($request->all());

        if ($request->file('file')) {
            
            Storage::disk('public')->delete($post->image);//eliminamos foto existente

            $post->image = $request->file('file')-> store('posts', 'public');                
            $post->save();

            } 

            return back()->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);//eliminamos foto existent     
        $post->delete();

        return back()->with('status', 'Eliminado con éxito');
    }
}
