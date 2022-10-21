<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /** @var these method is applied by blog example and it is work properly with the Blog application but not here!
        * $comments

        $comments = Comment::latest()->paginate(5);
        return view('comments.index',compact('$comments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        */
        $data['comments'] = Comment::orderBy('id','desc')->paginate(5);
        return view('comments.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comments.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'comment' => 'required',
            'name' => 'required'
        ]);
        Comment::create($request->all());

       /* $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->save();*/
        return redirect()->route('comments.index')
            ->with('success','Company has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
        return view('comments.show',compact('comment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
        return view('comments.edit',compact('comment'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment' => 'required',
          'name' => 'required',
        ]);
        $comment->update($request->all());

      /*  $comment = Comment::find($id);
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->save();*/


        return redirect()->route('comments.index')
            ->with('success','Company Has Been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index')
            ->with('success','comments deleted successfully');
    }
}
