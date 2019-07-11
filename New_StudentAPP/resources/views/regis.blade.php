@extends('master')

@section('title')
SIT New Student Register
@endsection

@section('header')
{{-- jquery script --}}
<script>
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
                <form id="example-advanced-form" action="register/update" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header" style="background-color: khaki;">ข้อมูลส่วนตัว</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">หลักสูตร :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="000" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">รหัสนักศึกษา :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="000000000000" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">เลขบัตรประชาชน :</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" value="0" readonly>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="0000" readonly>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="00000" readonly>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="00" readonly>
                                </div>
                                -
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" value="0" readonly>
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ชื่อ :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="abcdefg" name="nameth" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">นามสกุล :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="abcdefg" name="lastname_th" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">Name :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="ABCDEF" name="nameen" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Surname :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="ABCDEF" name="lastname_en" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">เพศ :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="sex" required>
                                        <option value="ชาย">ชาย
                                        <option value="หญิง">หญิง
                                    </select>
                                </div>
                                <span style="color: red;">*</span>
                                <label class="col-sm-2 col-form-label">กรุ๊ปเลือด :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="bloodtype" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">วันเดือนปีเกิด :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="dbirth" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control" name="mbirth" required>
                                        <option value="1">มกราคม</option>
                                        <option value="2">กุมภาพันธ์</option>
                                        <option value="3">มีนาคม</option>
                                        <option value="4">เมษายน</option>
                                        <option value="5">พฤศภาคม</option>
                                        <option value="6">มิถุนายน</option>
                                        <option value="7">กรกฏาคม</option>
                                        <option value="8">สิงหาคม</option>
                                        <option value="9">กันยายน</option>
                                        <option value="10">ตุลาคม</option>
                                        <option value="11">พฤศจิกายน</option>
                                        <option value="12">ธันวาคม</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="2555" name="ybirth" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">สถานภาพ :</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="status" required>
                                        <option value="-">- </option>
                                        <option value="โสด">โสด </option>
                                        <option value="สมรส">สมรส </option>
                                        <option value="หย่า">หย่า </option>
                                        <option value="หม้าย">หม้าย </option>
                                    </select>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">สัญชาติ :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="ไทย" name="origin" required>
                                </div>
                                <span style="color: red;">*</span>
                                <label class="col-sm-2 col-form-label">เชื้อชาติ :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="ไทย" name="national" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ศาสนา :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="พุทธ" name="religion" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">หมายเหตุ :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="note" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ที่อยู่ปัจจุบัน :</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="1/12 ชิชาวิลล่า ถนนพระราม 2 ติด 7-11"
                                        name="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">แขวง/ตำบล :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="บางบอน" name="add1">
                                </div>
                                <label class="col-sm-2 col-form-label">เขต/อำเภอ :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="ลำลูกกา" name="add2">
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">จังหวัด :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="กรุงเทพ" name="city">
                                </div>
                                <label class="col-sm-2 col-form-label">รหัสไปรษณีย์ :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="10260" name="zipcode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">โทรศัพท์บ้าน :</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" value="0" name="tel1">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="tel2">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="tel3">
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">โทรศัพท์มือถือ :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="0X" name="mobile1" required>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="mobile2" required>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="mobile3" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">E-mail :</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" value="x@mail.com" name="email" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ทีอยู่ติดต่อฉุกเฉิน :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="em_address" rows="3" required></textarea>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ผู้ติดต่อกรณีฉุกเฉิน :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="นางสมใจ ใจดี" name="contact" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">เบอร์โทรกรณีฉุกเฉิน :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="0X" name="em-tel1" required>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="em-tel2" required>
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="em_tel3" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                        </div>
                    </div>
                    {{-- end div card ข้อมูลส่วนตัว --}}
                    <div class="card">
                        <div class="card-header" style="background-color: khaki;">ข้อมูลที่ทำงาน</div>
                        <div class="card-body">
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">บริษัท :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="IBM Thailand" name="namebus">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ที่อยู่บริษัท :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="workadd" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">โทรศัพท์ :</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" value="0" name="telwork1">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="telwork2">
                                </div>
                                -
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="XXXX" name="telwork3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ตำแหน่งงาน :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="ผู้จัดการ" name="position">
                                </div>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ปีที่เริ่มงาน :</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" value="2555" name="year_start" max="2562"
                                        min="2530">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">หมายเหตุ :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="note_work" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end div ข้อมูลที่ทำงาน --}}
                    <div class="card">
                        <div class="card-header" style="background-color: khaki;">ข้อมูลการศึกษา</div>
                        <div class="card-body">
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">วุฒิการศึกษา :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="ว.ท.บ" name="graduate" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ปีที่จบ :</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" value="2555" name="year_end" max="2562"
                                        min="2520" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">สถาบันที่สำเร็จการศึกษา :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="ว.ท.บ" name="gfrom" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">สาขาวิชาเอก :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="เทคโนโลยีสารสนเทศ" name="branch" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">ประเภทสถาบัน :</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="type_edu">
                                        <option value="-">- </option>
                                        <option value="มหาวิทยาลัยรัฐ">มหาวิทยาลัยรัฐ </option>
                                        <option value="มหาวิทยาลัยเปิด">มหาวิทยาลัยเปิด </option>
                                        <option value="มหาวิทยาลัยเอกชน">มหาวิทยาลัยเอกชน </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">เกรดเฉลี่ยสะสม :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="3.99" name="gpa" required>
                                </div>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="form-group row" style="background-color: lightblue;">
                                <label class="col-sm-3 col-form-label">หมายเหตุ :</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="note_edu" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                        </div>
                        <div class="col-sm-4">
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