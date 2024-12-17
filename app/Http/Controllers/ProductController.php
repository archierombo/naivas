<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Interaction;

class ProductController extends Controller
{


     public function search(Request $request)
    {
        $query = $request->input('query'); // Get the search query from the request

        // Search for posts where title or content contains the query
        $products = Product::where('name', 'LIKE', "%{$query}%")->paginate(10); // Paginate results

        return view('search_results', compact('products', 'query'));
    }
public function interactions()
{
    $interactions = Interaction::with(['customer', 'product'])->get();

    return view('index', compact('interactions'));
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
