@extends('master')

@section('title')
SIT New Student
@endsection

@section('header')
<script>
    function nextTo(obj,len,next) {
        if(obj.value.length == len) {
            next.focus();
        }
    }
</script>
@endsection

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <p align="center">
                    <strong>
                        <br>
                        โปรแกรมกรอกข้อมูลสำหรับนักศึกษาใหม่
                        <br>
                        คณะเทคโนโลยีสารสนเทศ ประจำภาคการศึกษาที่
                    </strong>
                </p>
                {{-- form start --}}
                <form method="POST" id="example-advanced-form" action="/update" class="form-horizontal">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-header" style="background-color: khaki;">ข้อมูลส่วนตัว</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">หลักสูตร :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="{{ session('student')->cur_name }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">รหัสนักศึกษา :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->sid }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">เลขบัตรประชาชน :</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control"
                                        value="{{ substr(session('student')->idno,0,1) }}" readonly>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"
                                        value="{{ substr(session('student')->idno,1,4) }}" readonly>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"
                                        value="{{ substr(session('student')->idno,5,5) }}" readonly>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"
                                        value="{{ substr(session('student')->idno,10,2)}}" readonly>
                                </div>
                                -
                                <div class="col-sm-1">
                                    <input type="text" class="form-control"
                                        value="{{ substr(session('student')->idno,12) }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ชื่อ :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{ session('student')->nameth }}"
                                        name="nameth" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">นามสกุล :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"
                                        value="{{ session('student')->lastname_th }}" name="lastname_th" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">Name :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{ session('student')->nameen }}"
                                        name="nameen" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Surname :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"
                                        value="{{ session('student')->lastname_en }}" name="lastname_en" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">เพศ :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="sex" required>
                                        <option {{ session('student')->sex == "ชาย" ? 'selected' : '' }} value="ชาย">ชาย
                                        </option>
                                        <option {{ session('student')->sex == "หญิง" ? 'selected' : '' }} value="หญิง">
                                            หญิง</option>
                                    </select>
                                </div>
                                <span style="color: red;">*</span>
                                <label class="col-sm-2 col-form-label">กรุ๊ปเลือด :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="bloodtype" required>
                                        <option {{ session('student')->bloodtype == "A" ? 'selected' : '' }} value="A">A
                                        </option>
                                        <option {{ session('student')->bloodtype == "B" ? 'selected' : '' }} value="B">B
                                        </option>
                                        <option {{ session('student')->bloodtype == "O" ? 'selected' : '' }} value="O">O
                                        </option>
                                        <option {{ session('student')->bloodtype == "AB" ? 'selected' : '' }}
                                            value="AB">AB</option>
                                    </select>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">วันเดือนปีเกิด :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="dbirth" required">
                                        <option {{ session('student')->dbirth == "01" ? 'selected' : '' }} value="01">01
                                        </option>
                                        <option {{ session('student')->dbirth == "02" ? 'selected' : '' }} value="02">02
                                        </option>
                                        <option {{ session('student')->dbirth == "03" ? 'selected' : '' }} value="03">03
                                        </option>
                                        <option {{ session('student')->dbirth == "04" ? 'selected' : '' }} value="04">04
                                        </option>
                                        <option {{ session('student')->dbirth == "05" ? 'selected' : '' }} value="05">05
                                        </option>
                                        <option {{ session('student')->dbirth == "06" ? 'selected' : '' }} value="06">06
                                        </option>
                                        <option {{ session('student')->dbirth == "07" ? 'selected' : '' }} value="07">07
                                        </option>
                                        <option {{ session('student')->dbirth == "08" ? 'selected' : '' }} value="08">08
                                        </option>
                                        <option {{ session('student')->dbirth == "09" ? 'selected' : '' }} value="09">09
                                        </option>
                                        <option {{ session('student')->dbirth == "10" ? 'selected' : '' }} value="10">10
                                        </option>
                                        <option {{ session('student')->dbirth == "11" ? 'selected' : '' }} value="11">11
                                        </option>
                                        <option {{ session('student')->dbirth == "12" ? 'selected' : '' }} value="12">12
                                        </option>
                                        <option {{ session('student')->dbirth == "13" ? 'selected' : '' }} value="13">13
                                        </option>
                                        <option {{ session('student')->dbirth == "14" ? 'selected' : '' }} value="14">14
                                        </option>
                                        <option {{ session('student')->dbirth == "15" ? 'selected' : '' }} value="15">15
                                        </option>
                                        <option {{ session('student')->dbirth == "16" ? 'selected' : '' }} value="16">16
                                        </option>
                                        <option {{ session('student')->dbirth == "17" ? 'selected' : '' }} value="17">17
                                        </option>
                                        <option {{ session('student')->dbirth == "18" ? 'selected' : '' }} value="18">18
                                        </option>
                                        <option {{ session('student')->dbirth == "19" ? 'selected' : '' }} value="19">19
                                        </option>
                                        <option {{ session('student')->dbirth == "20" ? 'selected' : '' }} value="20">20
                                        </option>
                                        <option {{ session('student')->dbirth == "21" ? 'selected' : '' }} value="21">21
                                        </option>
                                        <option {{ session('student')->dbirth == "22" ? 'selected' : '' }} value="22">22
                                        </option>
                                        <option {{ session('student')->dbirth == "23" ? 'selected' : '' }} value="23">23
                                        </option>
                                        <option {{ session('student')->dbirth == "24" ? 'selected' : '' }} value="24">24
                                        </option>
                                        <option {{ session('student')->dbirth == "25" ? 'selected' : '' }} value="25">25
                                        </option>
                                        <option {{ session('student')->dbirth == "26" ? 'selected' : '' }} value="26">26
                                        </option>
                                        <option {{ session('student')->dbirth == "27" ? 'selected' : '' }} value="27">27
                                        </option>
                                        <option {{ session('student')->dbirth == "28" ? 'selected' : '' }} value="28">28
                                        </option>
                                        <option {{ session('student')->dbirth == "29" ? 'selected' : '' }} value="29">29
                                        </option>
                                        <option {{ session('student')->dbirth == "30" ? 'selected' : '' }} value="30">30
                                        </option>
                                        <option {{ session('student')->dbirth == "31" ? 'selected' : '' }} value="31">31
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control" name="mbirth" required>
                                        <option {{ session('student')->mbirth == "01" ? 'selected' : '' }} value="01">
                                            มกราคม</option>
                                        <option {{ session('student')->mbirth == "02" ? 'selected' : '' }} value="02">
                                            กุมภาพันธ์</option>
                                        <option {{ session('student')->mbirth == "03" ? 'selected' : '' }} value="03">
                                            มีนาคม</option>
                                        <option {{ session('student')->mbirth == "04" ? 'selected' : '' }} value="04">
                                            เมษายน</option>
                                        <option {{ session('student')->mbirth == "05" ? 'selected' : '' }} value="05">
                                            พฤศภาคม</option>
                                        <option {{ session('student')->mbirth == "06" ? 'selected' : '' }} value="06">
                                            มิถุนายน</option>
                                        <option {{ session('student')->mbirth == "07" ? 'selected' : '' }} value="07">
                                            กรกฏาคม</option>
                                        <option {{ session('student')->mbirth == "08" ? 'selected' : '' }} value="08">
                                            สิงหาคม</option>
                                        <option {{ session('student')->mbirth == "09" ? 'selected' : '' }} value="09">
                                            กันยายน</option>
                                        <option {{ session('student')->mbirth == "10" ? 'selected' : '' }} value="10">
                                            ตุลาคม</option>
                                        <option {{ session('student')->mbirth == "11" ? 'selected' : '' }} value="11">
                                            พฤศจิกายน</option>
                                        <option {{ session('student')->mbirth == "12" ? 'selected' : '' }} value="12">
                                            ธันวาคม</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="{{ session('student')->ybirth }}"
                                        name="ybirth" size="4" maxlength="4" required>
                                </div>
                                <span style="color: red;">*</span>
                                &nbsp;<span>เช่น 2540</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">สถานภาพ :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="status" required>
                                        <option {{ session('student')->status == "โสด" ? 'selected' : '' }} value="โสด">
                                            โสด </option>
                                        <option {{ session('student')->status == "สมรส" ? 'selected' : '' }}
                                            value="สมรส">สมรส </option>
                                        <option {{ session('student')->status == "หย่า" ? 'selected' : '' }}
                                            value="หย่า">หย่า </option>
                                        <option {{ session('student')->status == "หม้าย" ? 'selected' : '' }}
                                            value="หม้าย">หม้าย </option>
                                    </select>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">สัญชาติ :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->origin }}"
                                        name="origin" required>
                                </div>
                                <span style="color: red;">*</span>
                                <label class="col-sm-2 col-form-label">เชื้อชาติ :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="{{ session('student')->national }}"
                                        name="national" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ศาสนา :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->religion }}"
                                        name="religion" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">หมายเหตุ :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="note"
                                        rows="3">{{ session('student')->note }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ที่อยู่ปัจจุบัน :</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="{{ session('student')->address }}"
                                        name="address">
                                </div>
                                &nbsp;
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">แขวง/ตำบล :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->add1 }}"
                                        name="add1">
                                </div>
                                <label class="col-sm-2 col-form-label">เขต/อำเภอ :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->add2 }}"
                                        name="add2">
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">จังหวัด :</label>
                                <div class="col-sm-3">

                                    <select name="city" class="form-control">
                                        <option value="">--------- เลือกจังหวัด ---------</option>
                                        <option {{ session('student')->city == "กรุงเทพมหานคร" ? 'selected' : '' }}
                                            value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option {{ session('student')->city == "กระบี่" ? 'selected' : '' }}
                                            value="กระบี่">กระบี่ </option>
                                        <option {{ session('student')->city == "กาญจนบุรี" ? 'selected' : '' }}
                                            value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option {{ session('student')->city == "กาฬสินธุ์" ? 'selected' : '' }}
                                            value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option {{ session('student')->city == "กำแพงเพชร" ? 'selected' : '' }}
                                            value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option {{ session('student')->city == "ขอนแก่น" ? 'selected' : '' }}
                                            value="ขอนแก่น">ขอนแก่น</option>
                                        <option {{ session('student')->city == "จันทบุรี" ? 'selected' : '' }}
                                            value="จันทบุรี">จันทบุรี</option>
                                        <option {{ session('student')->city == "ฉะเชิงเทรา" ? 'selected' : '' }}
                                            value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option {{ session('student')->city == "ชัยนาท" ? 'selected' : '' }}
                                            value="ชัยนาท">ชัยนาท </option>
                                        <option {{ session('student')->city == "ชัยภูมิ" ? 'selected' : '' }}
                                            value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option {{ session('student')->city == "ชุมพร" ? 'selected' : '' }}
                                            value="ชุมพร">ชุมพร </option>
                                        <option {{ session('student')->city == "ชลบุรี" ? 'selected' : '' }}
                                            value="ชลบุรี">ชลบุรี </option>
                                        <option {{ session('student')->city == "เชียงใหม่" ? 'selected' : '' }}
                                            value="เชียงใหม่">เชียงใหม่ </option>
                                        <option {{ session('student')->city == "เชียงราย" ? 'selected' : '' }}
                                            value="เชียงราย">เชียงราย </option>
                                        <option {{ session('student')->city == "ตรัง" ? 'selected' : '' }} value="ตรัง">
                                            ตรัง </option>
                                        <option {{ session('student')->city == "ตราด" ? 'selected' : '' }} value="ตราด">
                                            ตราด </option>
                                        <option {{ session('student')->city == "ตาก" ? 'selected' : '' }} value="ตาก">
                                            ตาก </option>
                                        <option {{ session('student')->city == "นครนายก" ? 'selected' : '' }}
                                            value="นครนายก">นครนายก </option>
                                        <option {{ session('student')->city == "นครปฐม" ? 'selected' : '' }}
                                            value="นครปฐม">นครปฐม </option>
                                        <option {{ session('student')->city == "นครพนม" ? 'selected' : '' }}
                                            value="นครพนม">นครพนม </option>
                                        <option {{ session('student')->city == "นครราชสีมา" ? 'selected' : '' }}
                                            value="นครราชสีมา">นครราชสีมา </option>
                                        <option {{ session('student')->city == "นครศรีธรรมราช" ? 'selected' : '' }}
                                            value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option {{ session('student')->city == "นครสวรรค์" ? 'selected' : '' }}
                                            value="นครสวรรค์">นครสวรรค์ </option>
                                        <option {{ session('student')->city == "นราธิวาส" ? 'selected' : '' }}
                                            value="นราธิวาส">นราธิวาส </option>
                                        <option {{ session('student')->city == "น่าน" ? 'selected' : '' }} value="น่าน">
                                            น่าน </option>
                                        <option {{ session('student')->city == "นนทบุรี" ? 'selected' : '' }}
                                            value="นนทบุรี">นนทบุรี </option>
                                        <option {{ session('student')->city == "บึงกาฬ" ? 'selected' : '' }}
                                            value="บึงกาฬ">บึงกาฬ</option>
                                        <option {{ session('student')->city == "บุรีรัมย์" ? 'selected' : '' }}
                                            value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option {{ session('student')->city == "ประจวบคีรีขันธ์" ? 'selected' : '' }}
                                            value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option {{ session('student')->city == "ปทุมธานี" ? 'selected' : '' }}
                                            value="ปทุมธานี">ปทุมธานี </option>
                                        <option {{ session('student')->city == "ปราจีนบุรี" ? 'selected' : '' }}
                                            value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option {{ session('student')->city == "ปัตตานี" ? 'selected' : '' }}
                                            value="ปัตตานี">ปัตตานี </option>
                                        <option {{ session('student')->city == "พะเยา" ? 'selected' : '' }}
                                            value="พะเยา">พะเยา </option>
                                        <option {{ session('student')->city == "พระนครศรีอยุธยา" ? 'selected' : '' }}
                                            value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option {{ session('student')->city == "พังงา" ? 'selected' : '' }}
                                            value="พังงา">พังงา </option>
                                        <option {{ session('student')->city == "พิจิตร" ? 'selected' : '' }}
                                            value="พิจิตร">พิจิตร </option>
                                        <option {{ session('student')->city == "พิษณุโลก" ? 'selected' : '' }}
                                            value="พิษณุโลก">พิษณุโลก </option>
                                        <option {{ session('student')->city == "เพชรบุรี" ? 'selected' : '' }}
                                            value="เพชรบุรี">เพชรบุรี </option>
                                        <option {{ session('student')->city == "เพชรบูรณ์" ? 'selected' : '' }}
                                            value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option {{ session('student')->city == "แพร่" ? 'selected' : '' }} value="แพร่">
                                            แพร่ </option>
                                        <option {{ session('student')->city == "พัทลุง" ? 'selected' : '' }}
                                            value="พัทลุง">พัทลุง </option>
                                        <option {{ session('student')->city == "ภูเก็ต" ? 'selected' : '' }}
                                            value="ภูเก็ต">ภูเก็ต </option>
                                        <option {{ session('student')->city == "มหาสารคาม" ? 'selected' : '' }}
                                            value="มหาสารคาม">มหาสารคาม </option>
                                        <option {{ session('student')->city == "มุกดาหาร" ? 'selected' : '' }}
                                            value="มุกดาหาร">มุกดาหาร </option>
                                        <option {{ session('student')->city == "แม่ฮ่องสอน" ? 'selected' : '' }}
                                            value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option {{ session('student')->city == "ยโสธร" ? 'selected' : '' }}
                                            value="ยโสธร">ยโสธร </option>
                                        <option {{ session('student')->city == "ยะลา" ? 'selected' : '' }} value="ยะลา">
                                            ยะลา </option>
                                        <option {{ session('student')->city == "ร้อยเอ็ด" ? 'selected' : '' }}
                                            value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option {{ session('student')->city == "ระนอง" ? 'selected' : '' }}
                                            value="ระนอง">ระนอง </option>
                                        <option {{ session('student')->city == "ระยอง" ? 'selected' : '' }}
                                            value="ระยอง">ระยอง </option>
                                        <option {{ session('student')->city == "ราชบุรี" ? 'selected' : '' }}
                                            value="ราชบุรี">ราชบุรี</option>
                                        <option {{ session('student')->city == "ลพบุรี" ? 'selected' : '' }}
                                            value="ลพบุรี">ลพบุรี </option>
                                        <option {{ session('student')->city == "ลำปาง" ? 'selected' : '' }}
                                            value="ลำปาง">ลำปาง </option>
                                        <option {{ session('student')->city == "ลำพูน" ? 'selected' : '' }}
                                            value="ลำพูน">ลำพูน </option>
                                        <option {{ session('student')->city == "เลย" ? 'selected' : '' }} value="เลย">
                                            เลย </option>
                                        <option {{ session('student')->city == "ศรีสะเกษ" ? 'selected' : '' }}
                                            value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option {{ session('student')->city == "สกลนคร" ? 'selected' : '' }}
                                            value="สกลนคร">สกลนคร</option>
                                        <option {{ session('student')->city == "สงขลา" ? 'selected' : '' }}
                                            value="สงขลา">สงขลา </option>
                                        <option {{ session('student')->city == "สมุทรสาคร" ? 'selected' : '' }}
                                            value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option {{ session('student')->city == "สมุทรปราการ" ? 'selected' : '' }}
                                            value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option {{ session('student')->city == "สมุทรสงคราม" ? 'selected' : '' }}
                                            value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option {{ session('student')->city == "สระแก้ว" ? 'selected' : '' }}
                                            value="สระแก้ว">สระแก้ว </option>
                                        <option {{ session('student')->city == "สระบุรี" ? 'selected' : '' }}
                                            value="สระบุรี">สระบุรี </option>
                                        <option {{ session('student')->city == "สิงห์บุรี" ? 'selected' : '' }}
                                            value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option {{ session('student')->city == "สุโขทัย" ? 'selected' : '' }}
                                            value="สุโขทัย">สุโขทัย </option>
                                        <option {{ session('student')->city == "สุพรรณบุรี" ? 'selected' : '' }}
                                            value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option {{ session('student')->city == "สุราษฎร์ธานี" ? 'selected' : '' }}
                                            value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option {{ session('student')->city == "สุรินทร์" ? 'selected' : '' }}
                                            value="สุรินทร์">สุรินทร์ </option>
                                        <option {{ session('student')->city == "สตูล" ? 'selected' : '' }} value="สตูล">
                                            สตูล </option>
                                        <option {{ session('student')->city == "หนองคาย" ? 'selected' : '' }}
                                            value="หนองคาย">หนองคาย </option>
                                        <option {{ session('student')->city == "หนองบัวลำภู" ? 'selected' : '' }}
                                            value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option {{ session('student')->city == "อำนาจเจริญ" ? 'selected' : '' }}
                                            value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option {{ session('student')->city == "อุดรธานี" ? 'selected' : '' }}
                                            value="อุดรธานี">อุดรธานี </option>
                                        <option {{ session('student')->city == "อุตรดิตถ์" ? 'selected' : '' }}
                                            value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option {{ session('student')->city == "อุทัยธานี" ? 'selected' : '' }}
                                            value="อุทัยธานี">อุทัยธานี </option>
                                        <option {{ session('student')->city == "อุบลราชธานี" ? 'selected' : '' }}
                                            value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option {{ session('student')->city == "อ่างทอง" ? 'selected' : '' }}
                                            value="อ่างทอง">อ่างทอง </option>
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label">รหัสไปรษณีย์ :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="{{ session('student')->zipcode }}"
                                        name="zipcode">
                                </div>
                                &nbsp;
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">โทรศัพท์บ้าน :</label>
                                <div class="col-sm-1">
                                    <input type="text" id="tel1" class="form-control"
                                        onkeyup="nextTo(this,1,this.form.tel2)"
                                        value="{{ substr(session('student')->tel,0,1) }}" size="1" maxlength="1"
                                        name="tel1">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="tel2" class="form-control"
                                        onkeyup="nextTo(this,4,this.form.tel3)"
                                        value="{{ substr(session('student')->tel,1,4) }}" size="4" maxlength="4"
                                        name="tel2">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="tel3" class="form-control"
                                        value="{{ substr(session('student')->tel,5,4) }}" size="4" maxlength="4"
                                        name="tel3">
                                </div>
                                &nbsp;&nbsp;
                                <span>เช่น : 0-2xxx-xxxx</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">โทรศัพท์มือถือ :</label>
                                <div class="col-sm-1" style="width: 70px;">
                                    <input type="text" id="mo1" onkeyup="nextTo(this,2,this.form.mo2)"
                                        class="form-control" value="{{ substr(session('student')->mobile,0,2) }}"
                                        size="2" maxlength="2" name="mobile1" required style="width: 43px;">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="mo2" onkeyup="nextTo(this,4,this.form.mo3)"
                                        class="form-control" value="{{ substr(session('student')->mobile,3,4) }}"
                                        size="4" maxlength="4" name="mobile2" required>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="mo3" class="form-control"
                                        value="{{ substr(session('student')->mobile,5,4) }}" size="4" maxlength="4"
                                        name="mobile3" required>
                                </div>
                                <span style="color: red;">*</span>
                                &nbsp;
                                <span>เช่น : 08-xxxx-xxxx</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">E-mail :</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" value="{{ session('student')->email }}"
                                        name="email" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">Line ID :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->line }}"
                                        name="line">
                                </div>
                                &nbsp;
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Facebook :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{ session('student')->facebook }}"
                                        name="facebook">
                                </div>
                                &nbsp;
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ทีอยู่ติดต่อฉุกเฉิน :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="em_address" rows="3"
                                        required>{{ session('student')->em_address }}</textarea>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ผู้ติดต่อกรณีฉุกเฉิน :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="{{ session('student')->contact }}"
                                        name="contact" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">เบอร์โทรกรณีฉุกเฉิน :</label>
                                <div class="col-sm-1" style="width: 70px;">
                                    <input type="text" id="em1" onkeyup="nextTo(this,2,this.form.em2)"
                                        class="form-control" value="{{ substr(session('student')->em_tel,0,2) }}"
                                        size="2" maxlength="2" name="em_tel1" required style="width: 43px;">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="em2" onkeyup="nextTo(this,4,this.form.em3)"
                                        class="form-control" value="{{ substr(session('student')->em_tel,3,4) }}"
                                        size="4" maxlength="4" name="em_tel2" required>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="em3" class="form-control"
                                        value="{{ substr(session('student')->em_tel,5,4) }}" size="4" maxlength="4"
                                        name="em_tel3" required>
                                </div>
                                <span style="color: red;">*</span>
                                &nbsp;
                                <span>เช่น : 08-xxxx-xxxx</span>
                            </div>
                        </div>
                    </div>
                    {{-- end div card ข้อมูลส่วนตัว --}}
                    <div class="card">
                        <div class="card-header" style="background-color: khaki;">ข้อมูลที่ทำงาน</div>
                        <div class="card-body">
                            <div class="form-group row" style="background-color: darksalmon;">
                                <label class="col-sm-3 col-form-label">บริษัท :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{ session('student')->name_bus }}"
                                        name="name_bus">
                                </div>
                                &nbsp;
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ที่อยู่บริษัท :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="workadd"
                                        rows="3">{{ session('student')->workadd }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: darksalmon;">
                                <label class="col-sm-3 col-form-label">โทรศัพท์ :</label>
                                <div class="col-sm-1">
                                    <input type="text" id="wk1" onkeyup="nextTo(this,1,this.form.wk2)"
                                        class="form-control" value="{{ substr(session('student')->telwork,0,1) }}"
                                        name="telwork1" size="1" maxlength="1">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="wk2" onkeyup="nextTo(this,4,this.form.wk3)"
                                        class="form-control" value="{{ substr(session('student')->telwork,1,4) }}"
                                        name="telwork2" size="4" maxlength="4">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" id="wk3" class="form-control"
                                        value="{{ substr(session('student')->telwork,5,4) }}" name="telwork3" size="4"
                                        maxlength="4">
                                </div>
                                &nbsp;
                                <span>เช่น : 0-2xxx-xxxx</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ตำแหน่งงาน :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{ session('student')->position }}"
                                        name="position">
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: darksalmon;">
                                <label class="col-sm-3 col-form-label">ปีที่เริ่มงาน :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="{{ session('student')->year_start }}"
                                        name="year_start" size="4" maxlength="4">
                                </div>
                                &nbsp;<span>เช่น 2549</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">หมายเหตุ :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="notework"
                                        rows="3">{{ session('student')->notework }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end div ข้อมูลที่ทำงาน --}}
                    <div class="card">
                        <div class="card-header" style="background-color: khaki;">ข้อมูลการศึกษา</div>
                        <div class="card-body">
                            <div class="form-group row" style="background-color: darkseagreen;">
                                <label class="col-sm-3 col-form-label">วุฒิการศึกษา :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{ session('student')->graduate }}"
                                        name="graduate" required>
                                </div>
                                <span style="color: red;">*</span>
                                &nbsp;<span>เช่น : ว.ท.บ.</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ปีที่จบ :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="{{ session('student')->year_end }}"
                                        name="year_end" size="4" maxlength="4" required>
                                </div>
                                <span style="color: red;">*</span>
                                &nbsp;<span>เช่น 2549</span>
                            </div>
                            <div class="form-group row" style="background-color: darkseagreen;">
                                <label class="col-sm-3 col-form-label">สถาบันที่สำเร็จการศึกษา :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="{{ session('student')->gfrom }}"
                                        name="gfrom" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">สาขาวิชาเอก :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="{{ session('student')->branch }}"
                                        name="branch" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: darkseagreen;">
                                <label class="col-sm-3 col-form-label">ประเภทสถาบัน :</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="type_edu">
                                        <option value="-">- </option>
                                        <option {{ session('student')->type_edu == "มหาวิทยาลัยรัฐ" ? 'selected' : '' }}
                                            value="มหาวิทยาลัยรัฐ">
                                            มหาวิทยาลัยรัฐ </option>
                                        <option
                                            {{ session('student')->type_edu == "มหาวิทยาลัยเปิด" ? 'selected' : '' }}
                                            value="มหาวิทยาลัยเปิด">
                                            มหาวิทยาลัยเปิด </option>
                                        <option
                                            {{ session('student')->type_edu == "มหาวิทยาลัยเอกชน" ? 'selected' : '' }}
                                            value="มหาวิทยาลัยเอกชน">
                                            มหาวิทยาลัยเอกชน </option>
                                    </select>
                                </div>
                                &nbsp;
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">เกรดเฉลี่ยสะสม :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="{{ session('student')->gpa }}"
                                        name="gpa" required maxlength="4">
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: darkseagreen;">
                                <label class="col-sm-3 col-form-label">หมายเหตุ :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="note_edu"
                                        rows="3">{{ session('student')->note_edu }}</textarea>
                                </div>
                                &nbsp;
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-secondary" value="Reset">
                        </div>
                    </div>
                    {{-- end div card ข้อมูลการศึกษา --}}
                </form>
            </div>
            {{-- end div card กรอบ --}}
        </div>
        {{-- end div col md-9 --}}
    </div>

</div>
@endsection