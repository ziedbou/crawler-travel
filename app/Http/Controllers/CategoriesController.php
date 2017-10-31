<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Htmldom;
use App\Category;
use App\Image as Img ;
use App\Produit;
use Image;
use Input;

class CategoriesController extends Controller
{
	
	public $type_category ;
	public $type_produit ;

    public function allcategories(){

    	$type_category = $this->type_category;
 		$type_produit = $this->type_produit;

		$categories = Category::all();
		return view('produits.categories', compact('categories', 'type_category', 'type_produit'));
	}
	public function createcategory(){
		$type_category = $this->type_category;
 		$type_produit = $this->type_produit;
		return view('produits.categories-form', compact('type_category', 'type_produit'));
	}
	public function savecategory(Request $request){
		$category = new Category;
		$category->name = $request->name;
		$category->url = $request->url;
		$category->state = 'true';
		 
	 
		$category->type = $request->type;
		$category->html_classname = $request->html_classname;
		$category->name_classname = $request->name_classname;
		$category->url_classname = $request->url_classname;
		$category->prix_classname = $request->prix_classname;
		$category->description_classname = $request->description_classname;
		$category->periode_classname = $request->periode_classname;

		$category->image_classname = $request->image_classname;
		$category->id_produit = $request->id_produit;
		 
		$category->promotion_classname = $request->promotion_classname;
		$category->type_produit = $request->type_produit;

		if(Input::file('theme')){
  			$image = Input::file('theme');
            $filename  = time() .'.' . $image->getClientOriginalExtension();

            $path = public_path('/img/uploads/').'/'. $filename;
            Image::make($image)->save($path, 80);
            $category->theme = $filename;
         
       }

       
		$category->save();

		return redirect()->back();

	}

	public function editcategory($id){

		$category = Category::findOrFail($id);
		return $this->createcategory()->with('category', $category);
	}
	public function updatecategory(Request $request, $id){

		$category = Category::findOrFail($id);
		$category->name = $request->name;
		$category->url = $request->url;
		$category->state = 'true';
		 
	 
		$category->type = $request->type;
		$category->html_classname = $request->html_classname;
		$category->image_classname = $request->image_classname;
		$category->id_produit = $request->id_produit;
		$category->name_classname = $request->name_classname;
		$category->url_classname = $request->url_classname;
		$category->prix_classname = $request->prix_classname;
		$category->description_classname = $request->description_classname;
		$category->periode_classname = $request->periode_classname;
		$category->promotion_classname = $request->promotion_classname;
		$category->type_produit = $request->type_produit;

		if(Input::file('theme')){
  			$image = Input::file('theme');
            $filename  = time() .'.' . $image->getClientOriginalExtension();

            $path = public_path('/img/uploads/').'/'. $filename;
            Image::make($image)->save($path, 80);
            $category->theme = $filename;
         
       }

       
		$category->update();
		return redirect()->back();
	
	}

	public function test(){



		$category = Category::find(1);
		$html = new Htmldom($category->url);
		$classname = $category->html_classname;
		$produits = array();
		 
		foreach ($html->find($category->name_classname) as $key => $value) {

			$produits[$key]['name'] =strip_tags($value->innertext);
			 
		}

		foreach ($html->find($category->url_classname) as $key => $value) {
			$produits[$key]['url'] = $value->href;
		}

		foreach ($html->find($category->prix_classname) as $key => $value) {
			$produits[$key]['prix'] =strip_tags( $value->innertext);
		}

		foreach ($html->find($category->description_classname) as $key => $value) {
			$produits[$key]['description'] = strip_tags($value->innertext);
		}

		foreach ($html->find($category->periode_classname) as $key => $value) {
			$produits[$key]['periode'] = strip_tags($value->innertext);
		}
		foreach ($html->find($category->promotion_classname) as $key => $value) {
			$produits[$key]['promotion'] = strip_tags($value->innertext);
		}

	 

		 
		//parsing id and photos
		foreach ($produits as $key => $produit) {
			
			$produit_html = new Htmldom($produit['url']);
			$url = $produit_html->find($category->id_produit)[0]->action;
			$parts = parse_url($url);
			parse_str($parts['query'], $query);
			$new = false;

			//the id
			$produits[$key]['produit_id'] = $query['id'];
			$new_produit = Produit::where('produit_id',$query['id'])->get()->first();
			
			 
			if(count($new_produit) == 0){
				$new_produit = new Produit;
				$new = true;
			}
			
			if(isset($produit['name'])) $new_produit->name= $produit['name'];
			if(isset($produit['url'])) $new_produit->url = $produit['url'];
			if(isset($produit['prix'])) $new_produit->prix = $produit['prix'];
			if(isset($produit['description'])) $new_produit->description = $produit['description'];
			if(isset($produit['periode'])) $new_produit->periode = $produit['periode'];
			if(isset($produit['promotion'])) $new_produit->promotion = $produit['promotion'];
			if(isset( $query['id'])) $new_produit->produit_id = $query['id'];
			$new_produit->category_id = $category->id;
			
			if($new){
				$new_produit->save();
			}else {
				$new_produit->update();
			}


			//images 
			foreach($produit_html->find($category->image_classname) as $image){
				$old  = Img::where('url',$image->src )->count();
				if($old ==0){
					$img = new Img;
					$img->url = $image->src;
					$img->choice = 'false';
					$img->produit_id = $new_produit->id;
					$img->save();
				}
			}

		}

	 	dd(Produit::all(), Img::all());


		
	}
}
