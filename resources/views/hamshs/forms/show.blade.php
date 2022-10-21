@extends('blogs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> قائمة الهوامش ومراحل سير معاملة الترقية حسب تسلسل المرجعيات </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hamshs.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ArticalTitle:</strong>
                {{ $form->ArticalTitle }}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PublishDate:</strong>
                    {{ $form->PublishDate }}
                </div>
            </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $form->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $form->description }}
            </div>
        </div>

@endsection
