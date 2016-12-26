<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AlphaController;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\ProductVariant; 
use App\Http\Requests;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class AdminController extends BaseController
{

    protected $js;

    public function __construct()
    {
        $this->js = new AlphaController();
    }

    public function vueCrud()
	{
		$items = ProductVariant::latest()->paginate(5);
		$response = [
			'pagination' => [
				'total' => $items->total(),
				'per_page'	=> $items->perPage(),
				'current_page'	=> $items->lastPage(),
				'last_page'	=> $items->lastPage(),
				'from'	=>	$items->firstItem(),
				'to'	=>	$items->lastItem()
			], 

			'data' => $items 
			];

			return response()->json($response);
	}

    public function index()
    {

        return view('admin.index',$this->js->vuejs());
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'description' => 'required',
    		]);

    	$create = ProductVariant::create($request->all());
    	return response()->json($create);
    }

    public function update(Request $request, $id)
    {
    	    	$this->validate(request,[
    		'name' => 'required',
    		'description' => 'required']);

    	$edit = ProductVariant::findorfail($id)->update($request)->all();
    	return response()->json($edit);
    }

    public function destroy($id)
    {
    	ProductVariant::findorfail($id)->delete();
    	return response()->json(['done']);
    }


}
