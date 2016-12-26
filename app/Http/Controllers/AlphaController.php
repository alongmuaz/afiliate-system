<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlphaController extends Controller
{

    protected $data;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function vuejs()
    {
        $this->data['pluginjs'][] = 'https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.js';
        $this->data['pluginjs'][] = 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js';

        return $this->data;
    }

    public function productVariantJs()
    {
        $this->data['pagejs'][] = 'js/productvariant.js';
        return $this->data;
    }
}
