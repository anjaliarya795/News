<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\City;
use App\Models\State;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view("home");
    }

    public function add_state(){
        
    }

    public function state(){
        return view("states",["states"=>State::all()]);
    }

    public function del_state(){

    }

    public function add_city(){

    }

    public function city(){
        return view("cities",["cities"=>City::all()]);
    }

    public function del_city(){

    }

    public function insertNews(Request $r){
        $validateData = $r->validate([
            'news_title' => 'required',
            'city_id' => 'required',
            'author' => 'required',
            'news' => 'required',
            'image' => 'required',
        ]);

        $filename = $r->image->getClientOriginalName();

        $r->image->move(public_path("photos"),$filename);

        $n = new News();
        $n->news_title = $r->news_title;
        $n->city_id = $r->city_id;
        $n->author = $r->author;
        $n->required = $r->required;
        $n->image = $filename;
        $n->save();

        return redirect()->back();
    }

    public function news(){
        return view('news',["news"=>News::all()]);
    }

    public function del_news(){

    }

    public function del_(){

    }

}
