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
    protected $data;

    public function __construct()
    {
        $this->js = new AlphaController();
    }

    public function vueCrud()
	{
        $this->data['pluginjs'][] = 'https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js';
        $this->data['pluginjs'][] = 'https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.js';
        $this->data['pagejs'][] = 'js/productvariant.js';
        return view('admin.index',$this->data);
	}

    public function index()
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

    	$edit = ProductVariant::find($id)->update($request)->all();
    	return response()->json($edit);
    }

    public function destroy($id)
    {
    	ProductVariant::findorfail($id)->delete();
    	return response()->json(['done']);
    }

    public function show($id)
    {
        $product = ProductVariant::findorfail($id);
        return $product;
    }


}