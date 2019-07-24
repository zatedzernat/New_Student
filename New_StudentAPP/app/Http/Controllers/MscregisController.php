<?php

namespace App\Http\Controllers;

use App\Http\Models\Mscregis;
use App\Http\Requests\RegisterStudentRequest;
use App\Http\Requests\ShowStudentRequest;
use Illuminate\Http\Request;

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
        $idno = $request->input('idno1') . $request->input('idno2') . $request->input('idno3') . $request->input('idno4') . $request->input('idno5');

        $student = $this->msc->findByidno($idno);
        if ($student) {
            $request->session()->put('student', $student);
            return redirect()->route('edit');
        } else {
            return view('warn');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('regis');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mscregis  $mscregis
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterStudentRequest $request)
    {
        $validate = $request->validated();
        $idno = $request->session()->get('student')->idno;
        $student = $this->msc->findByidno($idno);

        $tel = $request->tel1 . $request->tel2 . $request->tel3;
        $mobile = $request->mobile1 . $request->mobile2 . $request->mobile3;
        $em_tel = $request->em_tel1 . $request->em_tel2 . $request->em_tel3;
        $telwork = $request->telwork1 . $request->telwork2 . $request->telwork3;

        $student->setPersonalDetail($request->nameth, $request->lastname_th, $request->nameen, $request->lastname_en, $request->sex, $request->bloodtype, $request->dbirth
            , $request->mbirth, $request->ybirth, $request->status, $request->origin, $request->national, $request->religion, $request->note, $request->address, $request->add1
            , $request->add2, $request->city, $request->zipcode, $tel, $mobile, $request->email, $request->em_address, $request->contact, $em_tel);
        $student->setWorkDetail($request->name_bus, $request->workadd, $telwork, $request->position, $request->year_start, $request->notework);
        $student->setStudyDetail($request->graduate, $request->year_end, $request->gfrom, $request->branch, $request->type_edu, $request->gpa, $request->note_edu);

        $student->save();
        $request->session()->pull('student');
        return view('success');
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
