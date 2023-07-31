<?php

namespace App\Http\Controllers;

use App\Models\soldado;
use Illuminate\Http\Request;

class soldadosController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
        return view('soldado.create');
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
        $soldado=new soldado();

        $soldado -> nom_s=$request->nom_s;
        $soldado ->apell_s=$request->apell_s;
        $soldado -> grado_s=$request->grado_s;
        $soldado -> cod_ce1=$request->cod_ce1;
        $soldado -> num_com1=$request->num_com1;
        $soldado -> cod_c2=$request->cod_c2;

        $soldado->save();

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
    public function update(Request $request)
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
}
