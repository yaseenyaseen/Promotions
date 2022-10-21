@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hamshs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your input code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--<form action="{{ action('HamshController@store') }}" method="POST">--}}

    <form action="{{ route('hamshs.storefH') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>


            @role('Applicant')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>مقدم الطلب :</strong>
                        <input type="text" name="Sci_plan_Applicant" class="form-control" placeholder="Sci_plan_Applicant">
                    </div>
                </div>
              {{--  @else
                I am not a Applicant readolny text...
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>مقدم الطلب :</strong>
                                <input type="text" name="Sci_plan_Applicant" value="{{ $blog->Sci_plan_Applicant }}" class="form-control" placeholder="Title" readonly>
                            </div>
                        </div>--}}

                @endrole




                @role('Coll_Sci_Affairs')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>شؤون علمية كلية:</strong>
                            <input type="text" name="Sci_plan_Coll_Sci_Affairs" class="form-control" placeholder="Sci_plan_Coll_Sci_Affairs">
                        </div>
                    </div>
                    @endrole

                    @role('Coll_Dean_ Assistant')
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>معاون عميد كلية :</strong>
                            <input type="text" name="Sci_plan_Coll_Dean_Assis" class="form-control" placeholder="Sci_plan_Coll_Dean_Assis">
                        </div>
                    </div>
                        @endrole
                        @role('Presidency_Research_Plan_Officer')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>مسؤول خطة بحثية رئاسة :</strong>
                                    <input type="text" name="Sci_plan_presidency_office" class="form-control" placeholder="Sci_plan_presidency_office">
                                </div>
                            </div>
                            @endrole
                            @role('President_University_Assistant')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong> مساعد رئيس الجامعة الشؤون العلمية :</strong>
                                        <input type="text" name="Sci_plan_Sci_Affairs_President_University_Assistant" class="form-control" placeholder="Sci_plan_Sci_Affairs_President_University_Assistant">
                                    </div>
                                </div>
                                @endrole
                                @role('presidency_Academic_Promotions_Affairs')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>المركزية :</strong>
                                            <input type="text" name="Sci_plan_presidency_Academic_Promotions_Affairs" class="form-control" placeholder="Sci_plan_presidency_Academic_Promotions_Affairs">
                                        </div>
                                    </div>
                                    @endrole

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:280px" name="description" placeholder="Description"></textarea>
                </div>

             {{--not needed to start using the select button. I can delete it.
             <div>
                    <select name="sci_title">
                        <option value="">Select options</option>
                        <option value="مدرس مساعد">مدرس مساعد</option>
                        <option value="مدرس">مدرس</option>
                        <option value="استاذ مساعد">استاذ مساعد</option>
                        <option value="استاذ">استاذ</option>
                    </select>
                </div>
--}}

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
                        </div>



    </form>


@endsection
