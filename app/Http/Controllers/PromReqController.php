<?php

namespace App\Http\Controllers;

use App\Models\Hamsh;
use App\Models\PromReq;
use Illuminate\Http\Request;

class PromReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = PromReq::latest()->paginate(5);

        return view('PromReq.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('PromReq.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //change the variables based on your table
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        PromReq::create($request->all());

        return redirect()->route('PromReq.index')
            ->with('success','PromRequest created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hamsh  $hamsh
     * @return \Illuminate\Http\Response
     */
    public function show(PromReq $PromReq)
    {
        //
        return view('PromReq.show',compact('PromReq'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hamsh  $hamsh
     * @return \Illuminate\Http\Response
     */
    public function edit(PromReq $PromReq)
    {
        //
        return view('PromReq.edit',compact('PromReq'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hamsh  $hamsh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PromReq $PromReq)
    {
        //change the variable here based on your table
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $PromReq->update($request->all());

        return redirect()->route('PromReq.index')
            ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hamsh  $hamsh
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromReq $PromReq)
    {
        //
        $PromReq->delete();

        return redirect()->route('PromReq.index')
            ->with('success','PromRequest deleted successfully');
    }
}
