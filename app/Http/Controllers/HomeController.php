<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

	public function fire()
	{
		return response()->json(['Hello there!']);
	}

}