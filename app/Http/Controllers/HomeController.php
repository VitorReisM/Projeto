<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Image;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Noticia::All();

        $data = $data->map(function ($news) {
            $img = Image::where("post_id",$news->id)->first();
            if($img->count()>0)
            {
            return[
                "title" => $news->title,
                "image_url" => $img->img_path,
                "image_width" => 300,
                "image_height" => 300,
            ];
            }else{
                return[
                    "title" => $news->title,
                    "image_url" => "noimg",
                    "image_width" => 100,
                    "image_height" => 200,
                ];
            }
        });

        return view('home')->with("data",$data);
    }
}
