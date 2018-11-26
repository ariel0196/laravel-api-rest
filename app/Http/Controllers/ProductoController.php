<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;


class ProductoController extends Controller
{

	public function __construct() 
	{ 
		//
	}

	public function index()
	{
		return Producto::all();
	}

	public function show($id)
	{
		return Producto::find($id);
	}

	public function store(Request $request)
	{
		return Producto::create($request->all());
	}

	public function update(Request $request, $id)
	{
		$producto = Producto::findOrFail($id);
		$producto->update($request->all());
		return $producto;
	}

	public function destroy($id)
	{
	    Producto::find($id)->delete();
	    return 204;
	}
}