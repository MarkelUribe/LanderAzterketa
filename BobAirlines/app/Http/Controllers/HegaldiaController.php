<?php

namespace App\Http\Controllers;

use App\Models\Hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hegaldiak = Hegaldia::all();
        return view('hegaldiak', ['hegaldiak' => $hegaldiak]);
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
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function show(Hegaldia $hegaldia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {
        $hegaldia = Hegaldia::find($request->id);

        $hegaldia->irteeraAireportua = $request->irteeraAireportua;
        $hegaldia->helmugaAireportua = $request->helmugaAireportua;
        $hegaldia->irteeraEguna = $request->irteeraEguna;
        $hegaldia->iraupena = $request->iraupena;
        $hegaldia->save();

        return redirect()->route('hegaldiak')->with('success', 'Todo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hegaldia $hegaldia)
    {
        //
    }
}
