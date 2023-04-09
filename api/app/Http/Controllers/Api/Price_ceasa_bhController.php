<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Price_ceasa_bh;
use Illuminate\Http\Request;


class Price_ceasa_bhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price_ceasa_bhs = Price_ceasa_bh::all();
        return $price_ceasa_bhs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price_ceasa_bh = new Price_ceasa_bh();
        $price_ceasa_bh->date = $request->date;
        $price_ceasa_bh->product = $request->product;
        $price_ceasa_bh->embalagem = $request->embalagem;
        $price_ceasa_bh->price_min = $request->price_min;
        $price_ceasa_bh->price_com = $request->price_com;
        $price_ceasa_bh->price_max = $request->price_max;
        $price_ceasa_bh->situation = $request->situation;

        $price_ceasa_bh->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $price_ceasa_bh = Price_ceasa_bh::find($id);

        return $price_ceasa_bh;
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
        $price_ceasa_bh = Price_ceasa_bh::findOrFail($request->id);
        $price_ceasa_bh->date = $request->date;
        $price_ceasa_bh->product = $request->product;
        $price_ceasa_bh->embalagem = $request->embalagem;
        $price_ceasa_bh->price_min = $request->price_min;
        $price_ceasa_bh->price_com = $request->price_com;
        $price_ceasa_bh->price_max = $request->price_max;
        $price_ceasa_bh->situation = $request->situation;

        $price_ceasa_bh->save();

        return $price_ceasa_bh;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
    {
        $product = Price_ceasa_bh::destroy($id);

        return $product;

    }
   
}
