@extends('blogs.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>أنشاء معاملة ترقية جديدة</h2>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
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
        <form action="{{ route('hamshs.store') }}" method="POST">
            @csrf
            <section>

                <div style="float:left;margin-right:20px;">
                    <label for="name">
                        أسم مقدم الترقية:
                        <br>
                        {{Auth::user()->name}}
                    </label>
                </div>
                <br style="clear:both;" />

            </section>

            <div class="row">
                {{--<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                </div>--}}
               <section>
                <label>أختر أسم الترقية القادمة:
                    <div>
                        <select name="sci_title">
                            <option value="">Select options</option>
                            <option value="مدرس مساعد">مدرس مساعد</option>
                            <option value="مدرس">مدرس</option>
                            <option value="استاذ مساعد">استاذ مساعد</option>
                            <option value="استاذ">استاذ</option>
                        </select>
                    </div>
                </label>
                </section>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </div>
    </div>
    </form>

@endsection
