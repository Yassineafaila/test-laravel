<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() { 
        $listeProduits = Product::get()->all(); 
        $titre = "Liste des produits"; 
        return view("products.index", compact('listeProduits', 'titre'));
     }
    public function create() 
     { 
        return view('products.create'); 
    }

    public function store(Request $request) { 
            $produit = new Product(); 
            $produit->name = $request->name; 
            $produit->detail = $request->detail; 
            $produit->save();
            //dd($produit);
            return view('product.index'); 
            
        }
        public function edit(Product $product) { 
            
            return view('product.edit', compact('product'));
         } 
         public function update(Request $request, Product $product) { 
            $product->name = $request->name; 
            $product->detail = $request->detail; 
            $product->save(); 
            return view('product.index'); }
    }

