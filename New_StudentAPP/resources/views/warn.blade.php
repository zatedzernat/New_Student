@extends('master')


@section('title')
CAN NOT LOGIN!!
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
                
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h5>คุณไม่สามารถเข้าระบบได้ อาจมีสาเหตุเนื่องจาก</h5>
                    <ol>
                        <li>รหัสบัตรประชาชนไม่ถูกต้อง
                        </li>
                        <li>ไม่มี user นี้ในระบบ
                        </li>
                        <li>หากเป็นผู้มีสิทธิ์ แต่ไม่สามารถเข้าระบบได้
                            โปรด e-mail แจ้ง (ชื่อ-นามสกุล, สาขาที่เรียน และรหัสบัตรประชาชน)
                            มาที่ webadmin@sit.kmutt.ac.th
                        </li>
                    </ol>
                </div>

                <div style="text-align: center;">
                    <a href="/" class="btn btn-primary">กลับหน้าแรก</a>
                    
                    <a href="https://www.sit.kmutt.ac.th/" class="btn btn-outline-primary">หน้าหลักเว็บไซต์ คณะฯ</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection