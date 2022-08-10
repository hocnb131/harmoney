<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;


class HomeController extends Controller
{
    public function login(){

        return view('auth.login');
    }
    public function register(){

        return view('auth.register');
    }
    public function index(){
        $province = DB::table('province')->orderByRaw('id')->get();
        $room = DB::table('room')->orderByRaw('id')->get();
        return view('user.index')->with(compact('province'))->with(compact('room'));
    }
    public function tintuc(){
        return view('user.news.index');
    }
    public function chitiettin(){
        return view('user.news.detail');
    }
    public function diemden(){
        $province = DB::table('province')->get();
        $branch = DB::table('branch')->get();
        return view('user.destination.index',compact('province','branch'));
    }
    public function khachsan(){
        return view('user.hotel.index');
    }
    public function editReview($review_id){
        $review = Review::find($review_id);
        if(Gate::allows('edit-review',$review)){
            return "Ban co quyen";
        }else{
            return "Ban khong co quyen";
        };
    }
}
