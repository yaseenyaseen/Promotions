@extends('prom.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>هذه الصفحة تحتوي على الهوامش الرئيسية والتعهدات حسب الصلاحيات, تقرأ للجميع ولكن التعديل حسب الصلاحية</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Add a needed buttons here!</a>
                <p> The default button link to (blogs.create), change it accordingly</p>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    @role('writer')
    <textarea class="form-control" cols="10" rows="5" placeholder=" صلاحيات مقدم الطلب writer
    أكتب صيغة التعهد حسب التعليمات" ></textarea>


    <textarea class="form-control" cols="10" rows="5" placeholder="صلاحيات رئيس القسم admin
هل صيغة التعهد صحيحة ام لا, يرجى الاجابة كهامش نصي هنا
"readonly ></textarea>
        @endrole
    @role('admin')
    <textarea class="form-control" cols="10" rows="5" placeholder=" صلاحيات مقدم الطلب writer
    أكتب صيغة التعهد حسب التعليمات"readonly ></textarea>


    <textarea class="form-control" cols="10" rows="5" placeholder="صلاحيات رئيس القسم admin
هل صيغة التعهد صحيحة ام لا, يرجى الاجابة كهامش نصي هنا
" ></textarea>
    @endrole




@endsection
