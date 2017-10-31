<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $type_category = array();
	public $type_produit = array();

	public function __construct(){

		$this->type_category = ['Automatique', 'Manuelle'];
		$this->type_produit = ['Tableau', 'Block'];

	}
}
