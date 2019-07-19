<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Mscregis extends Model
{
    protected $table = 'mscregis';
    protected $primaryKey = 'idno';
    protected $keyType = 'string';
    protected $fillable = ['cur', 'sid', 'testno', 'idno', 'fnameth', 'nameth', 'lastname_th', 'fnameen',
        'nameen', 'lastname_en', 'sex', 'bloodtype', 'dbirth', 'mbirth', 'ybirth', 'status',
        'national', 'origin', 'religion', 'note', 'address', 'add1', 'add2', 'city', 'zipcode',
        'tel', 'mobile', 'email', 'em_address', 'contact', 'em_tel', 'name_bus', 'workadd',
        'telwork', 'position', 'year_start', 'workexp', 'notework', 'graduate', 'year_end',
        'gfrom', 'branch', 'type_edu', 'gpa', 'note_edu', 'time', 'register', 'questionnaire'];
    public $incrementing = false;
    public $timestamps = false;

    public function getALL()
    {
        return Mscregis::all();
    }

    public function getByidno($idno)
    {
        return Mscregis::where('idno', $idno)->first();
    }

    public function setPersonalDetail(
        $nameth, $lastname_th, $nameen, $lastname_en, $sex, $bloodtype, $dbirth
        , $mbirth, $ybirth, $status, $origin, $national, $religion, $note, $address, $add1
        , $add2, $city, $zipcode, $tel, $mobile, $email, $em_address, $contact, $em_tel) {
            //line1 parameter
            $this->nameth = $nameth;
            $this->lastname_th = $lastname_th;
            $this->nameen = strtoupper($nameen);
            $this->lastname_en = strtoupper($lastname_en);
            $this->sex = $sex;
            $this->bloodtype = $bloodtype;
            $this->dbirth = $dbirth;

            //line2 parameter
            $this->mbirth = $mbirth;
            $this->ybirth = $ybirth;
            $this->status = $status;
            $this->origin = $origin;
            $this->national = $national;
            $this->religion = $religion;
            $this->note = $note;
            $this->address = $address;
            $this->add1 = $add1;

            //line3 parameter
            $this->add2 = $add2;
            $this->city = $city;
            $this->zipcode = $zipcode;
            $this->tel = $tel;
            $this->mobile = $mobile;
            $this->email = $email;
            $this->em_address = $em_address;
            $this->contact = $contact;
            $this->em_tel = $em_tel;

    }

    public function setWorkDetail($namebus, $workadd, $telwork, $position, $year_start, $note_work) {

        $this->namebus = $namebus;
        $this->workadd = $workadd;
        $this->telwork = $telwork;
        $this->position = $position;
        $this->year_start = $year_start;
        $this->note_work = $note_work;
        
    }
    
    public function setStudyDetail($graduate, $year_end, $gfrom, $branch, $type_edu, $gpa, $note_edu) {

        $this->graduate = $graduate;
        $this->year_end = $year_end;
        $this->gfrom = $gfrom;
        $this->branch = $branch;
        $this->type_edu = $type_edu;
        $this->gpa = $gpa;
        $this->note_edu = $note_edu;
        
    }

}
