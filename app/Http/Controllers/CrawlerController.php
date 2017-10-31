<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Htmldom;
use App\Category;
use Image;
 use Input;

class CrawlerController extends Controller
{
	public $type_category ;
	public $type_produit ;
	
    public function index(){
    	
 		$produit = null;

		$html_1 = new Htmldom('https://www.traveltodo.com/departs-en-groupe-istanbul/?source=Slider&source=Nos_D%C3%A9parts_en_groupe_:_Istanbul');

		// Find all images 
		foreach($html_1->find('.special_offre tr') as $element){
			if($produit->type == 'array'){
				

				if(!empty($produit->name_classname)){
					$strip_tags($element->children($produit->name_classname)->innertext);
				}
				if(!empty($produit->url_classname)){
					$strip_tags($element->children($produit->url_classname)->innertext);
				}
				if(!empty($produit->prix_classname)){
					$strip_tags($element->children($produit->prix_classname)->innertext);
				}
				if(!empty($produit->description_classname)){
					$strip_tags($element->children($produit->description_classname)->innertext);
				}
				if(!empty($produit->periode_classname)){
					$strip_tags($element->children($produit->periode_classname)->innertext);
				}
				if(!empty($produit->date_classname)){
					$strip_tags($element->children($produit->date_classname)->innertext);
				}
				if(!empty($produit->promotion_classname)){
					$strip_tags($element->children($produit->promotion_classname)->innertext);
				}
				


			}else {



			}

			dd(strip_tags($element->children(1)->innertext));
			
		       //dd($element->outertext, $element->find('td') ,$element->find('span')[0]->innertext );
		      // echo $element->outertext  . '<br>';

		   
		}


		$html_2 = new Htmldom('http://booking.traveltodo.com/tn/cr.resa/ui/aba/Product_Detail.aspx?idproductfamily=13&id=5097&showdate=1&fromdate=22/12/2015&todate=29/12/2015&autoinitiatedates=true&user=1063&curr=1&ilng=1&source=Escapades_City_Break&source=Nos_D%C3%A9parts_en_groupe_%C3%A0_Istanbul');

		// Find all images 
		/*foreach($html->find('.tableDataList_Images img') as $element){
			
		       echo $element->outertext  . '<br>';
		   
		}*/

		
 		return view('produits.show', compact('html_1', 'html_2'));
    }
}

