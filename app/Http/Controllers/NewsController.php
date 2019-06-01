<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\News;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return News::all();
        $news = News::paginate(15);
        return View('news.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return View('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request , [
            'heading' => 'required'
            , 'body' => 'required'
            ,'heading_ta' => 'required'
            , 'body_ta' => 'required'
        ]);

        $news = new News();
        $news->heading = $request->input('heading');
        $news->body = $request->input('body');
        $news->heading_ta = $request->input('heading_ta');
        $news->body_ta = $request->input('body_ta');

        $news->save();

        return redirect('/news')->with('success','News Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $news = News::find($id);
        return view('news.show')->with('news',$news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'heading' => 'required'
            , 'body' => 'required'
            ,'heading_ta' => 'required'
            , 'body_ta' => 'required'
        ]);

        $news = News::find($id);
        $news->heading = $request->input('heading');
        $news->body = $request->input('body');
        $news->heading_ta = $request->input('heading_ta');
        $news->body_ta = $request->input('body_ta');

        $news->save();

        return redirect('/news')->with('success','News Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect('/news')->with('success','News Removed');
    }
}
