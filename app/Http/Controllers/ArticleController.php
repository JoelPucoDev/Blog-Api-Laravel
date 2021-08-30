<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //Funcion -> devuelve todas los Articulos de nuestra base de datos
    public function index()
    {
        return Article::all();
    }

    //Funcion -> devuelve el un articulo espesifico segun el id
    public function show($id)
    {
        $article = Article::find($id);
        if (empty($article)) {
            $message = array(
                'message' => 'Does not exist',
            );
            return json_encode($message);
        }
        return $article;
    }

    //Funcion -> crea un registro en la tabla articulos
    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    //Funcion -> permite actualizar un registro
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    //Funcion -> permite eliminar un registro especifico segun el id
    public function delete($id){
        $article = Article::findOrFail($id);
        $article->delete();
        return 204;
    }
}
