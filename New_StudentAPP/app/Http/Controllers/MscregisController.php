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
            return view('regis');
        }else {
            return view('warn');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterStudentRequest $request)
    {
        $validate = $request->validated();
        dd("tel " . $request->tel1 . $request->tel2 . $request->tel3 . " mobile " . $request->mobile1 . $request->mobile2 . $request->mobile3 .  " em " . $request->em_tel1 . $request->em_tel2 . $request->em_tel3);

        // $tel = $request->tel1 . $request->tel2 . $request->tel3;
        // $mobile = $request->mobile1 . $request->mobile2 . $request->mobile3;
        // $em_tel = $request->em_tel1 . $request->em_tel2 . $request->em_tel3;
        // $telwork = $request->telwork1 . $request->telwork2 . $request->telwork3;


        // $this->msc->setPersonalDetail($request->nameth, $request->lastname_th, $request->nameen, $request->lastname_en, $request->sex, $request->bloodtype, $request->dbirth
        // , $request->mbirth, $request->ybirth, $request->status, $request->origin, $request->national, $request->religion, $request->note, $request->address, $request->add1
        // , $request->add2, $request->city, $request->zipcode, $tel, $mobile, $request->email, $request->em_address, $request->contact, $em_tel);

        // $this->msc->setWorkDetail($request->namebus, $request->workadd, $telwork, $request->position, $request->year_start, $request->note_work);

        // $this->msc->setStudyDetail($request->graduate, $request->year_end, $request->gfrom, $request->branch, $request->type_edu, $request->gpa, $request->note_edu);

        // $this->msc->save();
        // $request->session()->flush();
        // return view('index');
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
