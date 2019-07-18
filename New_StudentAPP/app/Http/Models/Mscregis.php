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

}
