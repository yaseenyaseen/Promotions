@extends('blogs.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>متطلبات الترقية- الخطة البحثية </h2>

                {{--Add drop list of 4 promotion requests. --}}

                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        {{--
                                                <option value="Male"> Male </option>
                        --}}
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <div class="card-body">
                    {{--<form action="{{ action('HamshController@store') }}" method="POST">--}}

                    {{--
                                        <form action="code.php" method="POST">
                    --}}
                    <div class="from-group mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="from-group mb-3">
                        <label for="">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">--Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="from-group mb-3">
                        <button type="submit" name="save_select" class="btn btn-primary">Save Selectbox</button>
                    </div>
                    </form>

                </div>

                {{--  <br>
                  The user id is: <br>
                  {{Auth::user()->id}} <br>--}}
                The user name is: <br>
                {{Auth::user()->name}} <br> <br>
                <h4> ID الترقية:
                    <br> {{$reqsos->id}}<br><br>
                    user id:
                    <br> {{$reqsos->user_id}}<br><br></h4>
                </h4>


                <br>

                <h4> اسم الكلية:
                    @foreach ($reqcolls as $reqcoll)
                        {{ $reqcoll->name }}
                    @endforeach

                    {{--<br> {{$reqcoll->name}}<br><br></h4>--}}

                    <br>
                    {{--

                                    The Promotions of this user : <br>

                                    @foreach ($reqs as $req)
                                        <tr>
                                            <td>{{ $req->sci_title }}</td><br>
                                         </tr>
                                    @endforeach

                                    <br> The current promotions status are: <br>

                                    @foreach ($reqs as $req)
                                        <tr>
                                            @if($req->confirmed == 1)
                                                The promotion request ID is {{$req->id}}<br>
                                                 with title {{ $req->sci_title }} is achievd <br>
                                            @else
                                                {{ $req->sci_title }} is under processing<br>
                                            @endif
                                        </tr>

                                    @endforeach
                                    <br>The Hamshes of this promotion is: <br>
                                    @foreach ($Hams as $Ham)
                                        <tr>
                                            The following Hamshes are belong to <br>
                                            The user id is: <br>
                                            {{Auth::user()->id}} <br>
                                            The user name is: <br>
                                            {{Auth::user()->name}} <br>

                                            The Hamshes data are belong to Promotion request ID :
                                            <td>{{ $Ham->Pro_req_id }}</td><br>
                                           The desectiption column of this hamsh record is

                                            <br><td>{{ $Ham->description }}</td><br>
                                          <br>  Backward data Request---
                                    <br>

                                        @foreach ($reqs as $req)
                                            <tr>
                                                @if($req->id == $Ham->Pro_req_id)
                                                    The promotion request ID is {{$req->id}} <br>
                                                   with title {{ $req->sci_title }} is allocated <br>
                                                @else
                                                    is under processing<br>
                                                @endif
                                            </tr>

                                        @endforeach
                                        </tr>
                                    @endforeach


                    --}}{{--                {{Auth::proreq()->id}}--}}{{--
                                </div>--}}
                    {{--<div class="pull-right">
                        <a class="btn btn-success" href="{{ route('hamshs.Sci_plan_') }}"> ملئ استمارة الخطة البحثية</a>  --}}{{--This button is show for admin only to add a new role or Hamash--}}{{--
                    </div>--}}
                    <h4>أستمارة- الخطة البحثية</h4>

                   {{-- <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('sciplan') }}"> ملئ استمارة
                            جديدة</a> --}}{{--This button is show for admin only to add a new role or Hamash--}}{{--
                    </div>--}}
                    <br>

                    <br>
                    {{--
                                    Add edit form HERE
                    --}}

                    @foreach ($Forms as $form)
                        @if($form->Pro_req_id == $reqsos->id)
                            {{--access the last created promotion request--}}
                            <tr>
                                <td>
                                    <form action="{{ route('hamshs.destroy',$form->id) }}" method="POST">
                                        <a class="btn btn-primary"
                                           href="{{ route('hamshs.forms.edit',$form->id) }}">تعديل الاستمارة</a>
                                        <br> <br>

                                        <a class="btn btn-info"
                                           href="{{ route('hamshs.forms.show',$form->id) }}">طباعة</a>

                                        @csrf
                                        @method('DELETE')

                                        {{--
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                        --}}
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach


                    {{--
                                    @role('admin')
                    --}}
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('hamshs.create') }}"> أنشاء
                            هامش</a> {{--This button is show for admin only to add a new role or Hamash--}}
                    </div>
                {{--
                                @endrole
                --}}
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        {{--  <br>
          This is the starting code modification to show last  hamesh row of an applicant
          <br>

  --}}
        {{--// This loop to make sure of the reqos content after changing in controller.--}}

        @foreach ($Hams as $Ham)
            @if($Ham->proreq_id == $reqsos->id)

                <tr>
                    <br>
                   {{-- <td>{{ $Ham->title }}</td>
                    <td>{{ $Ham->description }}</td>--}}
                    <td>
                        <form action="{{ route('hamshs.destroy',$Ham->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('hamshs.show',$Ham->id) }}">طباعة الهامش</a>

                            <a class="btn btn-primary" href="{{ route('hamshs.edit',$Ham->id) }}"> تعديل الهامش</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
{{--
        <h5><br><br><br> الهوامش ومراحل سير معاملة الترقية حسب تسلسل المرجعيات:
        </h5>

        <br>
        <table class="table table-bordered">
            --}}{{--<p>This table should be deleted</p>--}}{{--
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th width="250px">Action</th>
            </tr>
            --}}{{--  @foreach ($Hams as $Ham)
                  @if($Ham->Pro_req_id == $reqsos->id)
                  --}}{{----}}{{--// to hide the reset hemeshes rows data. This condition should be modified to use current users applicant id only.--}}{{----}}{{--
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $Ham->title }}</td>
                      <td>{{ $Ham->description }}</td>
                      <td>
                          <form action="{{ route('hamshs.destroy',$Ham->id) }}" method="POST">

                              <a class="btn btn-info" href="{{ route('hamshs.show',$Ham->id) }}">Show</a>

                              <a class="btn btn-primary" href="{{ route('hamshs.edit',$Ham->id) }}">Edit</a>

                              @csrf
                              @method('DELETE')

                              --}}{{----}}{{--<button type="submit" class="btn btn-danger">Delete</button>--}}{{----}}{{--
                          </form>
                      </td>
                  </tr>
                  @endif

              @endforeach--}}{{--
        </table>--}}
    {{--

The promotion request ID is {{$req->id}} <br>
with title {{ $req->sci_title }} is allocated <br>
@endif


@if($blog->Pro_req_id == $req->add unique identifier )
<tr>
@if($req->confirmed == 1)
    The promotion request ID is {{$req->id}}<br>
    with title {{ $req->sci_title }} is achievd <br>
@else
    {{ $req->sci_title }} is under processing<br>
@endif
</tr>

@endforeach--}}
    {{--following hameshes for a specific prom-req id, for example, prom-req id == 2
    <br>
<table class="table table-bordered">
    --}}{{--<p>This table should be deleted</p>--}}{{--
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Description</th>
        <th width="250px">Action</th>
    </tr>
    @foreach ($blogs as $blog)
        @if($blog->Pro_req_id == 2) --}}{{--// to hide the reset hemeshes rows data. This condition should be modified to use current users applicant id only.--}}{{--
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="{{ route('hamshs.destroy',$blog->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('hamshs.show',$blog->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('hamshs.edit',$blog->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endif

    @endforeach
</table>
--}}
    {{--

        {!! $blogs->links() !!}

        @role('writer')

        {{Auth::user()->name}}


          @foreach ($blogs as $blog)
                <tr>


                    @if($blog->id == 1)

                            --}}
    {{-- Add the submit button to update the description directly in the index page--}}{{--

                         <form action="{{ route('hamshs.update',$blog->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عنوان مستخدم النظام:</strong>
                                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>هامش:</strong>
                                            <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $blog->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                         </form>

                            @elseif($blog->id == 4)

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>عنوان مستخدم النظام:</strong>
                                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title" readonly>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>هامش:</strong>
                                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description" readonly>{{ $blog->description }}</textarea>
                                    </div>
                                </div>

                            </div>

                        </form>


                    @endif
                </tr>
          @endforeach


        @endrole
        @role('admin')
        {{Auth::user()->name}}

        @foreach ($blogs as $blog)
            <tr>


                @if($blog->id == 1)

                    --}}
    {{-- Add the submit button to update the description directly in the index page--}}{{--

                    <form action="{{ route('hamshs.update',$blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>عنوان مستخدم النظام:</strong>
                                    <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title"readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>هامش:</strong>
                                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description"readonly>{{ $blog->description }}</textarea>
                                </div>
                            </div>

                        </div>

                    </form>

                @elseif($blog->id == 4)
                    <form action="{{ route('hamshs.update',$blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>عنوان مستخدم النظام:</strong>
                                <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>هامش:</strong>
                                <textarea class="form-control" style="height:150px" name="description" placeholder="Description" >{{ $blog->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    </form>


                @endif
            </tr>
        @endforeach

        @endrole

    --}}
    {{--code related to forms section--}}
    {{--    @foreach ($Forms as $form)
            @if($form->Pro_req_id == $reqsos->id)  --}}{{--access the last created promotion request--}}{{--
                --}}{{--@if($Ham->Pro_req_id == $reqsos->id)--}}{{--
            {{ $form->title }}
                --}}{{--// to hide the reset hemeshes rows data. This condition should be modified to use current users applicant id only.--}}{{--
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $form->title }}</td>
                    <td>{{ $form->description }}</td>
                    <td>
                        --}}{{--<form action="{{ route('hamshs.destroy',$Ham->id) }}" method="POST">--}}{{--

                            --}}{{--<a class="btn btn-info" href="{{ route('hamshs.show',$Ham->id) }}">Show</a>--}}{{--
                        <a class="btn btn-primary" href="{{ route('hamshs.forms.edit',['form_id'=>$form->id]) }}">Edit</a>
--}}{{--
                        --}}{{----}}{{--<a class="btn btn-primary" href="{{ route('hamshs.edit',$Ham->id) }}">Edit</a>--}}{{----}}{{--
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('sciplanEdit') }}"> تعديل الاستمارة</a>  --}}{{----}}{{--This button This button without a correct page route--}}{{----}}{{--
                        </div>--}}{{--

                            @csrf
                            @method('DELETE')

                            --}}{{--<button type="submit" class="btn btn-danger">Delete</button>--}}{{--
                        </form>
                    </td>
                </tr>
            @endif

        @endforeach
--}}
    {{--
            @foreach ($Forms as $form)

                <tr>


                    @if($blog->id == 1)

                        --}}{{-- Add the submit button to update the description directly in the index page--}}{{--
                        <form action="{{ route('hamshs.update',$blog->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>عنوان مستخدم النظام:</strong>
                                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>هامش:</strong>
                                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $blog->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>



                    @endif
                </tr>
        @endforeach--}}

@endsection
