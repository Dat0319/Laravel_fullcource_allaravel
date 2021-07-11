@extends('layouts.default')

@section('title', 'All Laravel - Liên hệ với chúng tôi')

@section('content')
    {!! Form::open(['url' => '/contact', 'class' => 'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Họ và tên', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', isset($name) ? $name : '', ['class' => 'form-control', 'placeholder' => 'Nhập họ tên đầy đủ']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Địa chỉ email', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::email('email', isset($email) ? $email : '', ['class' => 'form-control', 'placeholder' => 'Địa chỉ email thật để nhận phản hồi']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Tiêu đề', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tiêu đề tin nhắn']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Nội dung liên hệ', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Nội dung không quá 200 từ', 'rows' => '3']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Gửi tin nhắn', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection
