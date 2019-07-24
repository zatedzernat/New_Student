<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Opcldate extends Model
{
    protected $table = 'opcldate';
    protected $primaryKey = 'semester';
    protected $keyType = 'string';
    protected $fillable = ['opendate', 'closedate', 'semester'];
    protected $dates = ['opendate', 'closedate'];
    public $incrementing = false;
    public $timestamps = false;

    public function getOpcl()
    {
        return Opcldate::get()->first();
    }

    public function checkOpcl($now)
    {
        $opcl = Opcldate::get()->first();
        $openDateOpcl = $opcl->opendate;
        $closeDateOpcl = $opcl->closedate;
        // dd(' now: ' . $now . " \n"
        //     . ' opendate: ' . $openDateOpcl . " \n"
        //     . ' closedate: ' . $closeDateOpcl . " \n"
        //     . ' greater than or equal: ' . ($now->greaterThanOrEqualTo($openDateOpcl) ? "true" : "false") . " \n"
        //     . ' less than: ' . ($now->lessThan($closeDateOpcl) ? "true" : "false") . " \n"
        //     . ' can login? ' . ($now->greaterThanOrEqualTo($openDateOpcl) && $now->lessThan($closeDateOpcl) ? "true" : "false")
        // );
        if ($now->greaterThanOrEqualTo($openDateOpcl) && $now->lessThan($closeDateOpcl)) {
            // dd(true);
            return true;
        } else {
            // dd(false);
            return false;
        }
    }

    public function getThaiDate()
    {
        $opcl = Opcldate::get()->first();
        $openDay = $opcl->opendate->format('d');
        $openMonth = $this->changeMonth($opcl->opendate->format('m'));
        $openYear = $this->changeYear($opcl->opendate->format('Y'));
        $closeDay = $opcl->closedate->format('d');
        $closeMonth = $this->changeMonth($opcl->closedate->format('m'));
        $closeYear = $this->changeYear($opcl->closedate->format('Y'));

        $thaidate = [
            "openday" => $openDay,
            "openmonth" => $openMonth,
            "openyear" => $openYear,
            "closeday" => $closeDay,
            "closemonth" => $closeMonth,
            "closeyear" => $closeYear
        ];
        return $thaidate;
    }

    public function changeMonth($month)
    {
        switch ($month) {
            case "01":
                return "มกราคม";
                break;
            case "02":
                return "กุมภาพันธ์";
                break;
            case "03":
                return "มีนาคม";
                break;
            case "04":
                return "เมษายน";
                break;
            case "05":
                return "พฤศภาคม";
                break;
            case "06":
                return "มิถุนายน";
                break;
            case "07":
                return "กรกฏาคม";
                break;
            case "08":
                return "สิงหาคม";
                break;
            case "09":
                return "ตุลาคม";
                break;
            case "10":
                return "พฤศจิกายน";
                break;
            case "11":
                return "กุมภาพันธ์";
                break;
            case "12":
                return "ธันวาคม";
                break;
        }
    }

    public function changeYear($year) {
        return $year+543;
    }
}
