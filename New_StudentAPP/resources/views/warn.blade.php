@extends('master')


@section('title')
CAN NOT LOGIN!!
@endsection

@section('content')
    @if (session('student'))
        <div class="alert alert-success">
                {{ session('student')->idno }}
        </div>
    @endif
@endsection