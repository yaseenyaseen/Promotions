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
                <strong>Title:</strong>
                {{ $hamsh->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $hamsh->description }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مقدم الطلب :</strong>
                {{ $hamsh->Sci_plan_Applicant }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>شؤون علمية كلية:</strong>
                {{ $hamsh->Sci_plan_Coll_Sci_Affairs }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>معاون عميد كلية :</strong>
                {{ $hamsh->Sci_plan_Coll_Dean_Assis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مسؤول خطة بحثية رئاسة :</strong>
                {{ $hamsh->Sci_plan_presidency_office }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مساعد رئيس الجامعة الشؤون العلمية :</strong>
                {{ $hamsh->Sci_plan_Sci_Affairs_President_University_Assistant }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>المركزية :</strong>
                {{ $hamsh->Sci_plan_presidency_Academic_Promotions_Affairs }}
            </div>
        </div>


    </div>
@endsection
