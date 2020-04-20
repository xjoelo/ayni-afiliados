<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
	public function selectProvincia($id)
	{
	    return \App\Distrito::Where('province_id',$id)->get();
	}
}
