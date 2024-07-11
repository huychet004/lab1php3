<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index()
    {
        $maxPriceBooks = DB::table('books')->orderBy('price', 'desc')->limit(8)->get();
        $minPriceBooks = DB::table('books')->orderBy('price', 'asc')->limit(8)->get();
        return view('index', compact('maxPriceBooks', 'minPriceBooks'));
    }
    function getCategory($id)
    {
            $books = DB::table('books')
                ->where('category_id', $id)
                ->get();
    
            return view('category', compact('books'));
    }
    function show($id){
        $book = DB::table('books')->find($id);
        return view('show', compact('book'));
    }
}
