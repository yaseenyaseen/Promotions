@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>الأستمارات-تأييد الخطة البحثية</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('PromReq.create') }}"> أنشاء هامش</a>   {{--This button is show for admin only to add a new role or Hamash--}}
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <p>This table should be deleted</p>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $blog->user_id }}</td>
                <td>{{ $blog->description }}</td>
                <td>
                    <form action="{{ route('PromReq.destroy',$blog->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('PromReq.show',$blog->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('PromReq.edit',$blog->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $blogs->links() !!}

    @role('writer')

    {{Auth::user()->name}}


      @foreach ($blogs as $blog)
            <tr>


                @if($blog->id == 1)

                        {{-- Add the submit button to update the description directly in the index page--}}
                     <form action="{{ route('PromReq.update',$blog->id) }}" method="POST">
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

                {{-- Add the submit button to update the description directly in the index page--}}
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


@endsection
