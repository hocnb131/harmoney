<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\Review;
use Illuminate\Contracts\View\View;
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
        $room = DB::table('room')->orderByDesc('id')->get();
        return view('user.index')->with(compact('province'))->with(compact('room'));
    }
    public function tintuc(){
        $province = DB::table('province')->get();
        return view('user.news.index', compact('province'));
    }
    public function chitiettin(){


        $province = DB::table('province')->get();
        $branch = DB::table('branch')->get();
        return view('user.news.detail', compact('province'));
    }
    public function diemden(){

        $province = DB::table('province')->get();
        $branch = DB::table('branch')->get();
        return view('user.news.detail', compact('province'));
    }
    public function diemden($id = null){
        $province = DB::table('province')->orderByRaw('id')->get();
        $branch = DB::table('branch')->orderByRaw('id')->get();
        return view('user.destination.diem-den'.$id,compact('province','id'));
        
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
    public function datkhachsan(){
        $province = DB::table('province')->get();
        return view('user.booking.hotel', compact('province'));
    }
    public function datphong(){
        $province = DB::table('province')->get();
        $branch = DB::table('branch')->get();
        return view('user.booking.room', compact('province'));
    }
}
