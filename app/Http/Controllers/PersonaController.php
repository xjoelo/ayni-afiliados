<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
	public function insert(Request $request)
	{
	    $persona = Persona::create($request->except('image'));
	    $foto = $request->file("image");
		$rutaLarga = $foto->store('fotos','public');
		$persona->image = $rutaLarga;
		$persona->save();
		return redirect()->route('home')->withSuccess('Muchas gracias por brindarnnos sus datos, pronto iremos a visitarle');
	}
}
