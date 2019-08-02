<!doctype html>
<html lang="en">

<head>
    <script>
        function nextTo(obj,len,next) {
                    if(obj.value.length == len) {
                        next.focus();
                    }
                }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        function formatTel(obj) {
            var len = obj.value.length;
            if(len==2) {
                obj.value = obj.value + "-";
            } 
        }
        function formatMobile(obj) {
            var len = obj.value.length;
            if(len==3) {
                obj.value = obj.value + "-";
            } 
        }
        // function checkPhoneNumber(){
        //     var tel = Document.getElementById("tel1");
        //     var mobile = Document.getElementById("mobile1");
        //     var emtel = Document.getElementById("emtel1");
        //     var phoneno = /^\(?([0-9]{2})\)?[-]?([0-9]{7})$/;
        //     var mobilephoneno = /^\(?([0-9]{3})\)?[-]?([0-9]{7})$/;
        //     if(tel.value.match(phoneno)){
        //         return true;
        //     }
        //     else{
        //         alert("Format เบอร์โทรไม่ถูกต้อง");
        //         return false;
        //     }
        // }        
    </script>
    {{-- template --}}

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="assets/js/jquery.validate.min.js"></script>

    {{-- end template --}}
</head>

<body style="background-color: grey;">

    <!--  Made With Material Kit  -->
    {{-- <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
        <div class="brand">MK</div>
        <div class="made-with">Made with <strong>Material Kit</strong></div>
    </a> --}}
    <a href="#" onclick="topFunction()" class="made-with-mk">
        <div class="brand">UP</div>
        <div class="made-with">copyright <strong>Material Kit</strong></div>
    </a>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-2">
                <br>
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
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizard">
                        <form method="POST" action="/update">
                            @csrf
                            <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

                            <div class="wizard-header">
                                <h3 class="wizard-title">
                                    โปรแกรมกรอกข้อมูลสำหรับนักศึกษาใหม่
                                </h3>
                                <h5>คณะเทคโนโลยีสารสนเทศ ประจำภาคการศึกษาที่ {{ session('opcl')->semester }}</h5>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#account" data-toggle="tab">ข้อมูลส่วนตัว</a></li>
                                    <li><a href="#work" data-toggle="tab">ข้อมูลที่ทำงาน</a></li>
                                    <li><a href="#study" data-toggle="tab">ข้อมูลการศึกษา</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="account">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">หลักสูตร</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->cur_name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">รหัสนักศึกษา</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->sid }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เลขบัตรประชาชน</label>
                                                <input type="text" class="form-control"
                                                    value="{{ substr(session('student')->idno,0,1) }}-{{ substr(session('student')->idno,1,4) }}-{{ substr(session('student')->idno,5,5) }}-{{ substr(session('student')->idno,10,2)}}-{{ substr(session('student')->idno,12) }}"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ชื่อ <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->nameth }}" name="nameth" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">นามสกุล <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->lastname_th }}" name="lastname_th"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->nameen }}" name="nameen" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Surname <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->lastname_en }}" name="lastname_en"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เพศ <small>(required)</small></label>
                                                <select class="form-control" name="sex" required>
                                                    <option {{ session('student')->sex == "ชาย" ? 'selected' : '' }}
                                                        value="ชาย">ชาย
                                                    </option>
                                                    <option {{ session('student')->sex == "หญิง" ? 'selected' : '' }}
                                                        value="หญิง">
                                                        หญิง</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">กรุ๊ปเลือด
                                                    <small>(required)</small></label>
                                                <select class="form-control" name="bloodtype" required>
                                                    <option {{ session('student')->bloodtype == "A" ? 'selected' : '' }}
                                                        value="A">A
                                                    </option>
                                                    <option {{ session('student')->bloodtype == "B" ? 'selected' : '' }}
                                                        value="B">B
                                                    </option>
                                                    <option {{ session('student')->bloodtype == "O" ? 'selected' : '' }}
                                                        value="O">O
                                                    </option>
                                                    <option
                                                        {{ session('student')->bloodtype == "AB" ? 'selected' : '' }}
                                                        value="AB">AB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">วัน
                                                    <small>(required)</small></label>
                                                <select class="form-control" name="dbirth" required">
                                                    <option {{ session('student')->dbirth == "01" ? 'selected' : '' }}
                                                        value="01">01
                                                    </option>
                                                    <option {{ session('student')->dbirth == "02" ? 'selected' : '' }}
                                                        value="02">02
                                                    </option>
                                                    <option {{ session('student')->dbirth == "03" ? 'selected' : '' }}
                                                        value="03">03
                                                    </option>
                                                    <option {{ session('student')->dbirth == "04" ? 'selected' : '' }}
                                                        value="04">04
                                                    </option>
                                                    <option {{ session('student')->dbirth == "05" ? 'selected' : '' }}
                                                        value="05">05
                                                    </option>
                                                    <option {{ session('student')->dbirth == "06" ? 'selected' : '' }}
                                                        value="06">06
                                                    </option>
                                                    <option {{ session('student')->dbirth == "07" ? 'selected' : '' }}
                                                        value="07">07
                                                    </option>
                                                    <option {{ session('student')->dbirth == "08" ? 'selected' : '' }}
                                                        value="08">08
                                                    </option>
                                                    <option {{ session('student')->dbirth == "09" ? 'selected' : '' }}
                                                        value="09">09
                                                    </option>
                                                    <option {{ session('student')->dbirth == "10" ? 'selected' : '' }}
                                                        value="10">10
                                                    </option>
                                                    <option {{ session('student')->dbirth == "11" ? 'selected' : '' }}
                                                        value="11">11
                                                    </option>
                                                    <option {{ session('student')->dbirth == "12" ? 'selected' : '' }}
                                                        value="12">12
                                                    </option>
                                                    <option {{ session('student')->dbirth == "13" ? 'selected' : '' }}
                                                        value="13">13
                                                    </option>
                                                    <option {{ session('student')->dbirth == "14" ? 'selected' : '' }}
                                                        value="14">14
                                                    </option>
                                                    <option {{ session('student')->dbirth == "15" ? 'selected' : '' }}
                                                        value="15">15
                                                    </option>
                                                    <option {{ session('student')->dbirth == "16" ? 'selected' : '' }}
                                                        value="16">16
                                                    </option>
                                                    <option {{ session('student')->dbirth == "17" ? 'selected' : '' }}
                                                        value="17">17
                                                    </option>
                                                    <option {{ session('student')->dbirth == "18" ? 'selected' : '' }}
                                                        value="18">18
                                                    </option>
                                                    <option {{ session('student')->dbirth == "19" ? 'selected' : '' }}
                                                        value="19">19
                                                    </option>
                                                    <option {{ session('student')->dbirth == "20" ? 'selected' : '' }}
                                                        value="20">20
                                                    </option>
                                                    <option {{ session('student')->dbirth == "21" ? 'selected' : '' }}
                                                        value="21">21
                                                    </option>
                                                    <option {{ session('student')->dbirth == "22" ? 'selected' : '' }}
                                                        value="22">22
                                                    </option>
                                                    <option {{ session('student')->dbirth == "23" ? 'selected' : '' }}
                                                        value="23">23
                                                    </option>
                                                    <option {{ session('student')->dbirth == "24" ? 'selected' : '' }}
                                                        value="24">24
                                                    </option>
                                                    <option {{ session('student')->dbirth == "25" ? 'selected' : '' }}
                                                        value="25">25
                                                    </option>
                                                    <option {{ session('student')->dbirth == "26" ? 'selected' : '' }}
                                                        value="26">26
                                                    </option>
                                                    <option {{ session('student')->dbirth == "27" ? 'selected' : '' }}
                                                        value="27">27
                                                    </option>
                                                    <option {{ session('student')->dbirth == "28" ? 'selected' : '' }}
                                                        value="28">28
                                                    </option>
                                                    <option {{ session('student')->dbirth == "29" ? 'selected' : '' }}
                                                        value="29">29
                                                    </option>
                                                    <option {{ session('student')->dbirth == "30" ? 'selected' : '' }}
                                                        value="30">30
                                                    </option>
                                                    <option {{ session('student')->dbirth == "31" ? 'selected' : '' }}
                                                        value="31">31
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เดือน
                                                    <small>(required)</small></label>
                                                <select class="form-control" name="mbirth" required>
                                                    <option {{ session('student')->mbirth == "01" ? 'selected' : '' }}
                                                        value="01">
                                                        มกราคม</option>
                                                    <option {{ session('student')->mbirth == "02" ? 'selected' : '' }}
                                                        value="02">
                                                        กุมภาพันธ์</option>
                                                    <option {{ session('student')->mbirth == "03" ? 'selected' : '' }}
                                                        value="03">
                                                        มีนาคม</option>
                                                    <option {{ session('student')->mbirth == "04" ? 'selected' : '' }}
                                                        value="04">
                                                        เมษายน</option>
                                                    <option {{ session('student')->mbirth == "05" ? 'selected' : '' }}
                                                        value="05">
                                                        พฤศภาคม</option>
                                                    <option {{ session('student')->mbirth == "06" ? 'selected' : '' }}
                                                        value="06">
                                                        มิถุนายน</option>
                                                    <option {{ session('student')->mbirth == "07" ? 'selected' : '' }}
                                                        value="07">
                                                        กรกฏาคม</option>
                                                    <option {{ session('student')->mbirth == "08" ? 'selected' : '' }}
                                                        value="08">
                                                        สิงหาคม</option>
                                                    <option {{ session('student')->mbirth == "09" ? 'selected' : '' }}
                                                        value="09">
                                                        กันยายน</option>
                                                    <option {{ session('student')->mbirth == "10" ? 'selected' : '' }}
                                                        value="10">
                                                        ตุลาคม</option>
                                                    <option {{ session('student')->mbirth == "11" ? 'selected' : '' }}
                                                        value="11">
                                                        พฤศจิกายน</option>
                                                    <option {{ session('student')->mbirth == "12" ? 'selected' : '' }}
                                                        value="12">
                                                        ธันวาคม</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ปีเกิด
                                                    <small>(required)</small></label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control"
                                                        value="{{ session('student')->ybirth }}" name="ybirth" size="4"
                                                        maxlength="4" required>
                                                    <span class="input-group-addon">เช่น 2540</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">สถานภาพ
                                                    <small>(required)</small></label>
                                                <select class="form-control" name="status" required>
                                                    <option {{ session('student')->status == "โสด" ? 'selected' : '' }}
                                                        value="โสด">
                                                        โสด </option>
                                                    <option {{ session('student')->status == "สมรส" ? 'selected' : '' }}
                                                        value="สมรส">สมรส </option>
                                                    <option {{ session('student')->status == "หย่า" ? 'selected' : '' }}
                                                        value="หย่า">หย่า </option>
                                                    <option
                                                        {{ session('student')->status == "หม้าย" ? 'selected' : '' }}
                                                        value="หม้าย">หม้าย </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">สัญชาติ
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->origin }}" name="origin" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เชื้อชาติ
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->national }}" name="national" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ศาสนา
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->religion }}" name="religion" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">หมายเหตุ</label>
                                                {{-- <input type="text" class="form-control"
                                                    value="{{ session('student')->note }}" name="note"> --}}
                                                <textarea class="form-control" placeholder="" rows="2"
                                                    name="note">{{ session('student')->note }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ที่อยู่ปัจจุบัน</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->address }}" name="address">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">แขวง/ตำบล</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->add1 }}" name="add1">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เขต/อำเภอ</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->add2 }}" name="add2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">จังหวัด</label>
                                                <select name="city" class="form-control">
                                                    <option value="">--------- เลือกจังหวัด ---------</option>
                                                    <option
                                                        {{ session('student')->city == "กรุงเทพมหานคร" ? 'selected' : '' }}
                                                        value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option {{ session('student')->city == "กระบี่" ? 'selected' : '' }}
                                                        value="กระบี่">กระบี่ </option>
                                                    <option
                                                        {{ session('student')->city == "กาญจนบุรี" ? 'selected' : '' }}
                                                        value="กาญจนบุรี">กาญจนบุรี </option>
                                                    <option
                                                        {{ session('student')->city == "กาฬสินธุ์" ? 'selected' : '' }}
                                                        value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                                    <option
                                                        {{ session('student')->city == "กำแพงเพชร" ? 'selected' : '' }}
                                                        value="กำแพงเพชร">กำแพงเพชร </option>
                                                    <option
                                                        {{ session('student')->city == "ขอนแก่น" ? 'selected' : '' }}
                                                        value="ขอนแก่น">ขอนแก่น</option>
                                                    <option
                                                        {{ session('student')->city == "จันทบุรี" ? 'selected' : '' }}
                                                        value="จันทบุรี">จันทบุรี</option>
                                                    <option
                                                        {{ session('student')->city == "ฉะเชิงเทรา" ? 'selected' : '' }}
                                                        value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                                    <option {{ session('student')->city == "ชัยนาท" ? 'selected' : '' }}
                                                        value="ชัยนาท">ชัยนาท </option>
                                                    <option
                                                        {{ session('student')->city == "ชัยภูมิ" ? 'selected' : '' }}
                                                        value="ชัยภูมิ">ชัยภูมิ </option>
                                                    <option {{ session('student')->city == "ชุมพร" ? 'selected' : '' }}
                                                        value="ชุมพร">ชุมพร </option>
                                                    <option {{ session('student')->city == "ชลบุรี" ? 'selected' : '' }}
                                                        value="ชลบุรี">ชลบุรี </option>
                                                    <option
                                                        {{ session('student')->city == "เชียงใหม่" ? 'selected' : '' }}
                                                        value="เชียงใหม่">เชียงใหม่ </option>
                                                    <option
                                                        {{ session('student')->city == "เชียงราย" ? 'selected' : '' }}
                                                        value="เชียงราย">เชียงราย </option>
                                                    <option {{ session('student')->city == "ตรัง" ? 'selected' : '' }}
                                                        value="ตรัง">
                                                        ตรัง </option>
                                                    <option {{ session('student')->city == "ตราด" ? 'selected' : '' }}
                                                        value="ตราด">
                                                        ตราด </option>
                                                    <option {{ session('student')->city == "ตาก" ? 'selected' : '' }}
                                                        value="ตาก">
                                                        ตาก </option>
                                                    <option
                                                        {{ session('student')->city == "นครนายก" ? 'selected' : '' }}
                                                        value="นครนายก">นครนายก </option>
                                                    <option {{ session('student')->city == "นครปฐม" ? 'selected' : '' }}
                                                        value="นครปฐม">นครปฐม </option>
                                                    <option {{ session('student')->city == "นครพนม" ? 'selected' : '' }}
                                                        value="นครพนม">นครพนม </option>
                                                    <option
                                                        {{ session('student')->city == "นครราชสีมา" ? 'selected' : '' }}
                                                        value="นครราชสีมา">นครราชสีมา </option>
                                                    <option
                                                        {{ session('student')->city == "นครศรีธรรมราช" ? 'selected' : '' }}
                                                        value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                                    <option
                                                        {{ session('student')->city == "นครสวรรค์" ? 'selected' : '' }}
                                                        value="นครสวรรค์">นครสวรรค์ </option>
                                                    <option
                                                        {{ session('student')->city == "นราธิวาส" ? 'selected' : '' }}
                                                        value="นราธิวาส">นราธิวาส </option>
                                                    <option {{ session('student')->city == "น่าน" ? 'selected' : '' }}
                                                        value="น่าน">
                                                        น่าน </option>
                                                    <option
                                                        {{ session('student')->city == "นนทบุรี" ? 'selected' : '' }}
                                                        value="นนทบุรี">นนทบุรี </option>
                                                    <option {{ session('student')->city == "บึงกาฬ" ? 'selected' : '' }}
                                                        value="บึงกาฬ">บึงกาฬ</option>
                                                    <option
                                                        {{ session('student')->city == "บุรีรัมย์" ? 'selected' : '' }}
                                                        value="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option
                                                        {{ session('student')->city == "ประจวบคีรีขันธ์" ? 'selected' : '' }}
                                                        value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                                    <option
                                                        {{ session('student')->city == "ปทุมธานี" ? 'selected' : '' }}
                                                        value="ปทุมธานี">ปทุมธานี </option>
                                                    <option
                                                        {{ session('student')->city == "ปราจีนบุรี" ? 'selected' : '' }}
                                                        value="ปราจีนบุรี">ปราจีนบุรี </option>
                                                    <option
                                                        {{ session('student')->city == "ปัตตานี" ? 'selected' : '' }}
                                                        value="ปัตตานี">ปัตตานี </option>
                                                    <option {{ session('student')->city == "พะเยา" ? 'selected' : '' }}
                                                        value="พะเยา">พะเยา </option>
                                                    <option
                                                        {{ session('student')->city == "พระนครศรีอยุธยา" ? 'selected' : '' }}
                                                        value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                                    <option {{ session('student')->city == "พังงา" ? 'selected' : '' }}
                                                        value="พังงา">พังงา </option>
                                                    <option {{ session('student')->city == "พิจิตร" ? 'selected' : '' }}
                                                        value="พิจิตร">พิจิตร </option>
                                                    <option
                                                        {{ session('student')->city == "พิษณุโลก" ? 'selected' : '' }}
                                                        value="พิษณุโลก">พิษณุโลก </option>
                                                    <option
                                                        {{ session('student')->city == "เพชรบุรี" ? 'selected' : '' }}
                                                        value="เพชรบุรี">เพชรบุรี </option>
                                                    <option
                                                        {{ session('student')->city == "เพชรบูรณ์" ? 'selected' : '' }}
                                                        value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                                    <option {{ session('student')->city == "แพร่" ? 'selected' : '' }}
                                                        value="แพร่">
                                                        แพร่ </option>
                                                    <option {{ session('student')->city == "พัทลุง" ? 'selected' : '' }}
                                                        value="พัทลุง">พัทลุง </option>
                                                    <option {{ session('student')->city == "ภูเก็ต" ? 'selected' : '' }}
                                                        value="ภูเก็ต">ภูเก็ต </option>
                                                    <option
                                                        {{ session('student')->city == "มหาสารคาม" ? 'selected' : '' }}
                                                        value="มหาสารคาม">มหาสารคาม </option>
                                                    <option
                                                        {{ session('student')->city == "มุกดาหาร" ? 'selected' : '' }}
                                                        value="มุกดาหาร">มุกดาหาร </option>
                                                    <option
                                                        {{ session('student')->city == "แม่ฮ่องสอน" ? 'selected' : '' }}
                                                        value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                                    <option {{ session('student')->city == "ยโสธร" ? 'selected' : '' }}
                                                        value="ยโสธร">ยโสธร </option>
                                                    <option {{ session('student')->city == "ยะลา" ? 'selected' : '' }}
                                                        value="ยะลา">
                                                        ยะลา </option>
                                                    <option
                                                        {{ session('student')->city == "ร้อยเอ็ด" ? 'selected' : '' }}
                                                        value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                                    <option {{ session('student')->city == "ระนอง" ? 'selected' : '' }}
                                                        value="ระนอง">ระนอง </option>
                                                    <option {{ session('student')->city == "ระยอง" ? 'selected' : '' }}
                                                        value="ระยอง">ระยอง </option>
                                                    <option
                                                        {{ session('student')->city == "ราชบุรี" ? 'selected' : '' }}
                                                        value="ราชบุรี">ราชบุรี</option>
                                                    <option {{ session('student')->city == "ลพบุรี" ? 'selected' : '' }}
                                                        value="ลพบุรี">ลพบุรี </option>
                                                    <option {{ session('student')->city == "ลำปาง" ? 'selected' : '' }}
                                                        value="ลำปาง">ลำปาง </option>
                                                    <option {{ session('student')->city == "ลำพูน" ? 'selected' : '' }}
                                                        value="ลำพูน">ลำพูน </option>
                                                    <option {{ session('student')->city == "เลย" ? 'selected' : '' }}
                                                        value="เลย">
                                                        เลย </option>
                                                    <option
                                                        {{ session('student')->city == "ศรีสะเกษ" ? 'selected' : '' }}
                                                        value="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option {{ session('student')->city == "สกลนคร" ? 'selected' : '' }}
                                                        value="สกลนคร">สกลนคร</option>
                                                    <option {{ session('student')->city == "สงขลา" ? 'selected' : '' }}
                                                        value="สงขลา">สงขลา </option>
                                                    <option
                                                        {{ session('student')->city == "สมุทรสาคร" ? 'selected' : '' }}
                                                        value="สมุทรสาคร">สมุทรสาคร </option>
                                                    <option
                                                        {{ session('student')->city == "สมุทรปราการ" ? 'selected' : '' }}
                                                        value="สมุทรปราการ">สมุทรปราการ </option>
                                                    <option
                                                        {{ session('student')->city == "สมุทรสงคราม" ? 'selected' : '' }}
                                                        value="สมุทรสงคราม">สมุทรสงคราม </option>
                                                    <option
                                                        {{ session('student')->city == "สระแก้ว" ? 'selected' : '' }}
                                                        value="สระแก้ว">สระแก้ว </option>
                                                    <option
                                                        {{ session('student')->city == "สระบุรี" ? 'selected' : '' }}
                                                        value="สระบุรี">สระบุรี </option>
                                                    <option
                                                        {{ session('student')->city == "สิงห์บุรี" ? 'selected' : '' }}
                                                        value="สิงห์บุรี">สิงห์บุรี </option>
                                                    <option
                                                        {{ session('student')->city == "สุโขทัย" ? 'selected' : '' }}
                                                        value="สุโขทัย">สุโขทัย </option>
                                                    <option
                                                        {{ session('student')->city == "สุพรรณบุรี" ? 'selected' : '' }}
                                                        value="สุพรรณบุรี">สุพรรณบุรี </option>
                                                    <option
                                                        {{ session('student')->city == "สุราษฎร์ธานี" ? 'selected' : '' }}
                                                        value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                                    <option
                                                        {{ session('student')->city == "สุรินทร์" ? 'selected' : '' }}
                                                        value="สุรินทร์">สุรินทร์ </option>
                                                    <option {{ session('student')->city == "สตูล" ? 'selected' : '' }}
                                                        value="สตูล">
                                                        สตูล </option>
                                                    <option
                                                        {{ session('student')->city == "หนองคาย" ? 'selected' : '' }}
                                                        value="หนองคาย">หนองคาย </option>
                                                    <option
                                                        {{ session('student')->city == "หนองบัวลำภู" ? 'selected' : '' }}
                                                        value="หนองบัวลำภู">หนองบัวลำภู </option>
                                                    <option
                                                        {{ session('student')->city == "อำนาจเจริญ" ? 'selected' : '' }}
                                                        value="อำนาจเจริญ">อำนาจเจริญ </option>
                                                    <option
                                                        {{ session('student')->city == "อุดรธานี" ? 'selected' : '' }}
                                                        value="อุดรธานี">อุดรธานี </option>
                                                    <option
                                                        {{ session('student')->city == "อุตรดิตถ์" ? 'selected' : '' }}
                                                        value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                                    <option
                                                        {{ session('student')->city == "อุทัยธานี" ? 'selected' : '' }}
                                                        value="อุทัยธานี">อุทัยธานี </option>
                                                    <option
                                                        {{ session('student')->city == "อุบลราชธานี" ? 'selected' : '' }}
                                                        value="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option
                                                        {{ session('student')->city == "อ่างทอง" ? 'selected' : '' }}
                                                        value="อ่างทอง">อ่างทอง </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">รหัสไปรษณีย์</label>
                                                <input type="number" class="form-control"
                                                    value="{{ session('student')->zipcode }}" name="zipcode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">โทรศัพท์บ้าน</label>
                                                {{-- <div class="input-group"> --}}
                                                <input type="tel" class="form-control" name="tel" size="10"
                                                    maxlength="10" id="tel1" onkeypress="formatTel(this)"
                                                    value="{{ session('student')->tel_number }}">
                                                {{-- <span class="input-group-addon">เช่น 02-XXXXXXX</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">โทรศัพท์มือถือ
                                                    <small>(required)</small></label>
                                                {{-- <div class="input-group"> --}}
                                                <input type="tel" class="form-control" name="mobile" required size="11"
                                                    maxlength="11" id="mobile1" onkeypress="formatMobile(this)"
                                                    value="{{ session('student')->mobile_number }}">
                                                {{-- <span class="input-group-addon">เช่น 08X-XXXXXXX</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">E-mail <small>(required)</small></label>
                                                <input type="email" class="form-control"
                                                    value="{{ session('student')->email }}" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Line ID <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->line }}" name="line" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Facebook <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->facebook }}" name="facebook" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ที่อยู่ติดต่อฉุกเฉิน
                                                    <small>(required)</small></label>
                                                <textarea class="form-control" placeholder="" rows="2" name="em_address"
                                                    required>{{ session('student')->em_address }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ผู้ติดต่อกรณีฉุกเฉิน
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->contact }}" name="contact" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เบอร์โทรกรณีฉุกเฉิน
                                                    <small>(required)</small></label>
                                                {{-- <div class="input-group"> --}}
                                                <input type="tel" class="form-control" name="em_tel" required size="11"
                                                    maxlength="11" id="emtel1" onkeypress="formatMobile(this)"
                                                    value="{{ session('student')->emtel_number }}">
                                                {{-- <span class="input-group-addon">เช่น 08X-XXXXXXX</span> --}}
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="work">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">บริษัท</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->name_bus }}" name="name_bus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ที่อยู่บริษัท</label>
                                                <textarea class="form-control" placeholder="" name="workadd"
                                                    rows="2">{{ session('student')->workadd }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">โทรศัพท์</label>
                                                <input type="tel" class="form-control" name="telwork"
                                                    onkeypress="formatTel(this)"
                                                    value="{{ session('student')->telwork_number }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ตำแหน่งงาน</label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->position }}" name="position">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ปีที่เริ่มงาน</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control"
                                                        value="{{ session('student')->year_start }}" name="year_start"
                                                        size="4" maxlength="4">
                                                    <span class="input-group-addon">เช่น 2540</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">หมายเหตุ</label>
                                                <textarea class="form-control" placeholder="" name="notework"
                                                    rows="2">{{ session('student')->notework }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="study">
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">วุฒิการศึกษา
                                                    <small>(required)</small></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        value="{{ session('student')->graduate }}" name="graduate"
                                                        required>
                                                    <span class="input-group-addon">เช่น ว.ท.บ.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ปีที่จบ
                                                    <small>(required)</small></label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control"
                                                        value="{{ session('student')->year_end }}" name="year_end"
                                                        size="4" maxlength="4" required>
                                                    <span class="input-group-addon">เช่น 2540</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">สถาบันที่สำเร็จการศึกษา
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->gfrom }}" name="gfrom" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">สาขาวิชาเอก
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->branch }}" name="branch" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">ประเภทสถาบัน</label>
                                                <select class="form-control" name="type_edu">
                                                    <option value="-">- </option>
                                                    <option
                                                        {{ session('student')->type_edu == "มหาวิทยาลัยรัฐ" ? 'selected' : '' }}
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
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">เกรดเฉลี่ยสะสม
                                                    <small>(required)</small></label>
                                                <input type="text" class="form-control"
                                                    value="{{ session('student')->gpa }}" name="gpa" required
                                                    maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">หมายเหตุ</label>
                                                <textarea class="form-control" placeholder="" name="note_edu"
                                                    rows="2">{{ session('student')->note_edu }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd'
                                        value='ต่อไป' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'
                                        value='ยืนยัน' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                        value='ย้อนกลับ' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->
</body>

</html>