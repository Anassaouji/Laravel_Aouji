<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles=Article::all();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $stock = $request->input('stock');
        $prix = $request->input('prix');

        $article = new Article;
        $article->name = $name;
        $article->description = $description;
        $article->stock = $stock;
        $article->prix = $prix;
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Article $article)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'stock'=> 'required',
            'prix' => 'required',
            ]);

            $name = $request->input('name');
            $description = $request->input('description');
            $stock = $request->input('stock');
            $prix = $request->input('prix');

        // $article = Article::find($id);
        $article->name = $name;
        $article->description = $description;
        $article->stock = $stock;
        $article->prix = $prix;
        $article->save();
        // $article->update(); bjoujhom khadamin [ save() and update() ]

    return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Book deleted successfully!');
        // return view("articles.index");
    }


    // public function acheter(Article $article)
    // {


    //     return view('articles.acheter', compact('article'));
    // }

    // public function acheter( Request $request ,  string $id)
    // {
    //     $user = Auth::user();
    //     if ($user) {
    //         $usr = User::find(1);
    //         $article = Article::find($id) ;
    //         $article->stock = strval($article -> stock - 1  ) ;
    //         if ($usr->abonne == 1 ) {
    //             $usr->solde = $user->solde - $article->prix/2;
    //         } else {
    //             $usr->solde = $user->solde - $article->prix;
    //         };
    //         $article->save();
    //         $usr->save();
    //     }
    //     return redirect()->route('articles.index') ;
    // }


}
