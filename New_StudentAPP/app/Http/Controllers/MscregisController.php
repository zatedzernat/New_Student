<?php

namespace App\Http\Controllers;

use App\Http\Models\Mscregis;
use Illuminate\Http\Request;
use App\Http\Requests\ShowStudentRequest;
use App\Http\Requests\RegisterStudentRequest;

class MscregisController extends Controller
{
    private $msc;

    public function __construct()
    {
        $this->msc = new Mscregis();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $idno = $request->input('idno1') . 
        $request->input('idno2') . 
        $request->input('idno3') . 
        $request->input('idno4') . 
        $request->input('idno5');

        $student = $this->msc->getByidno($idno);
        if ($student) {
            $request->session()->put('student',$student);
            // return view('warn');
            return view('regis');
        }else {
            return view('warn');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mscregis  $mscregis
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterStudentRequest $mscregis)
    {
        echo 55;
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
