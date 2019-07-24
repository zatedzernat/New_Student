@extends('master')

@section('title')
SIT New Student
@endsection

@section('header')
<script>
    var phone_field_length=0;
    function TabNext(obj,event,len,next_field) {
        if (event == "down") {
            phone_field_length=obj.value.length;
            }
        else if (event == "up") {
            if (obj.value.length != phone_field_length) {
                phone_field_length=obj.value.length;
                if (phone_field_length == len) {
                    next_field.focus();
                    }
                }
            }
        }
    // function checkform(){
    //         if(document.form.idno1.value==""){
    //         alert(" กรุณา ป้อนหมายเลขบัตรประจำตัวประชาชน 13 หลัก");
    //         document.form.idno1.focus();
    //         return false;
    //     }
    // return true;
    // }
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
                <form method="POST" action="/detail">
                    @csrf
                    @method('POST')
                    <table width="750" border="0" align="center" cellpadding="2" cellspacing="0">
                        <tr>
                            <td>เลขบัตรประชาชน/Passport No.</td>
                            <td>
                                <span>
                                    <input name="idno1" type="text" id="idno1" size="1" maxlength="1"
                                        onKeyUp="TabNext(this,'up',1,this.form.idno2)" autofocus required
                                        placeholder="0">
                                    -
                                    <input name="idno2" type="text" id="idno2" size="4" maxlength="4"
                                        onKeyUp="TabNext(this,'up',4,this.form.idno3)" required placeholder="0000">
                                    -
                                    <input name="idno3" type="text" id="idno3" size="5" maxlength="5"
                                        onKeyUp="TabNext(this,'up',5,this.form.idno4)" required placeholder="00000">
                                    -
                                    <input name="idno4" type="text" id="idno4" size="2" maxlength="2"
                                        onKeyUp="TabNext(this,'up',2,this.form.idno5)" required placeholder="00">
                                    -
                                    <input name="idno5" type="text" id="idno5" size="1" maxlength="1" placeholder="0">
                                </span>
                        </tr>
                        <tr>
                            <td width="208" class="big">&nbsp;</td>
                            <td width="484">หากไม่สามารถ Log in ได้ กรุณาติดต่อที่เบอร์ 02-470-9888 หรือ <br>
                                e-mail
                                : <a href="mailto:webadmin@sit.kmutt.ac.th">webadmin@sit.kmutt.ac.th</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div align="center"></div>
                            </td>
                            <td>
                                <input name="Submit" class="btn btn-primary" type="submit" id="Submit" value="Login">
                                <input type="reset" class="btn btn-secondary" name="Reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<div align="center">
    <a href="http://www.sit.kmutt.ac.th">
        <span style="color: white; font-size: 18px">
            www.sit.kmutt.ac.th
        </span>
    </a>
</div>
@endsection