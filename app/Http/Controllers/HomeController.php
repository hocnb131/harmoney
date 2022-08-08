<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;


class HomeController extends Controller
{
    public function index(){

        return view('user.language.vi.index');
    }
    public function tintuc(){
        return view('user.language.vi.news.index');
    }
    public function chitiettin(){
        return view('user.language.vi.news.detail');
    }
    public function diemden(){
        $province = DB::table('province')->get();
        $branch = DB::table('branch')->get();
        return view('user.language.vi.destination.index',compact('province','branch'));
    }
    public function khachsan(){
        return view('user.language.vi.hotel.index');
    }
}
