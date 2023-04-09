<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price_ceasa_bh;

class Price_ceasa_bhController extends Controller
{
    
    public function index()
    {
       // dd('aqui');
        $price_ceasa_bhs = Price_ceasa_bh::all();
        return $price_ceasa_bhs;

    }

   
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

   
    public function show($id)
    {
        $price_ceasa_bh = Price_ceasa_bh::find($id);

        return $price_ceasa_bh;
    }

    
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
}
