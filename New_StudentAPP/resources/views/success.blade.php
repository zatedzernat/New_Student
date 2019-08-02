@extends('master')


@section('title')
Profile Update Success
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
                        คณะเทคโนโลยีสารสนเทศ ประจำภาคการศึกษาที่ {{ session('opcl')->semester }}
                    </strong>
                </p>

                <div class="alert alert-success alert-dismissible">
                    <h6>จัดเก็บข้อมูลเรียบร้อยแล้วค่ะ ขอบคุณค่ะ</h6>
                </div>
                
                <div style="text-align: center;">
                    <a href="/" class="btn btn-primary">กลับหน้าแรก</a>
                    &nbsp;
                    &nbsp;
                    <a href="https://www.sit.kmutt.ac.th/" class="btn btn-outline-primary">หน้าหลักเว็บไซต์ คณะฯ</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection