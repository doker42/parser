<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::orderBy('author');

        if ($request->has('sort_by')) {
            $query->orderBy($request->get('sort_by'), $request->get('order', 'asc'));
        }

        $articles = $query->get();

        return view('pages.main', compact('articles'));
    }
}
