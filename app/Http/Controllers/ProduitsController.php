<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Htmldom;
use App\Category;
use App\Image as Img ;
use App\Produit;
use Image;
use Input;

class ProduitsController extends Controller
{
    public function index(){
    	$produits = Produit::with('images')->with('category')->get();
    	
    	return view('produits.produits', compact('produits'));
    }
}
