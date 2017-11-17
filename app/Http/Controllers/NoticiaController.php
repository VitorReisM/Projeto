<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Noticia;
use App\Image;
use Validator;
use Auth;
use DB;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticia= Noticia::find($id);


        return view("/test")->with($noticia);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addnews");
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
            'title'         => 'required',
            'body'          => 'required',
            'type'          => 'required',
        ]);

            DB::transaction(function () use($request,&$table)
            {
                $table = new Noticia;

                $table->title = $request->title;
                $table->body = $request->body;
                if($request->type == "single")
                {
                    $table->type_page = 1;
                }
                else
                {
                    $table->type_page = 0;
                }
                $table->author = "Vitor"; //Auth::user()->name;
                $table->save();
            });
            if ($request->hasFile('files'))
            {
                foreach($request->files as $key)
                {
                    for ($i=0; $i < count($key); $i++)
                    {
                        $ext = pathinfo($key[$i]->getClientOriginalName(), PATHINFO_EXTENSION);
                        $filename = $table->id . "." . Carbon::now() . $ext;
                        $location = 'imgs_news/';
                        $upload_success = $key[$i]->move($location, $filename);
                        $location = $location . $filename;
                        $size = getimagesize("$location");
                        $width = $size[0];
                        $height = $size[1];
                        $img = new Image;
                        $img->post_id = $table->id;
                        $img->img_path =  $location;
                        $img->width = $width;
                        $img->height = $height;
                        $img->save();
                    }
                }
            }
        return back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
