<?php

namespace App\Http\Controllers;

use App\Http\Models\Mscregis;
use Illuminate\Http\Request;
use App\Http\Requests\ShowStudentRequest;

class MscregisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $msc = new Mscregis();
        // $mscAll = $msc->getAll();
        // foreach ($mscAll as $tmp) {
        //     echo $tmp->idno."<br>";
        // }
        return view('index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(ShowStudentRequest $request)
    {
        echo 5555555555;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mscregis  $mscregis
     * @return \Illuminate\Http\Response
     */
    public function edit(Mscregis $mscregis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mscregis  $mscregis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mscregis $mscregis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mscregis  $mscregis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mscregis $mscregis)
    {
        //
    }
}
