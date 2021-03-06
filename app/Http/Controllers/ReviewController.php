<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\ReviewFormRequest;
use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data_u = Review::with('user')->get();
        // $data_r =  Review::with('room')->get();
        // dd($data_u);
        $data_u = DB::table('user')->get();
        $data_r =  DB::table('room')->get();
        $data = DB::table('review')->orderBy('id', 'desc')->paginate(5);
        if ($key = request()->key) {
            $data = DB::table('review')->orderBy('id', 'desc')->where('rate', 'like', '%' . $key . '%')->paginate(10);
        }
        return view('admin.review.index',compact('data'),compact('data_u'),compact('data_r'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data_r = Review::with('room')->get();
        
        // $data_u = Review::with('user')->get();
        $data_u = DB::table('user')->get();
        $data_r =  DB::table('room')->get();
        $data = DB::table('review')->orderBy('id', 'asc')->select('id', 'rate')->get();
        return view('admin.review.create')->with(compact('data'))->with(compact('data_u'))->with(compact('data_r'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewFormRequest $request)
    {
        $review = new Review;
        $review->user_id = $request->user_id;
        $review->room_id = $request->room_id;
        $review->comment = $request->comment;
        $review->rate = $request->rate;
        $review->status = $request->status;
        $review->save();
        return redirect()->route('review.index')
            ->with('success', 'review has been created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    { {
            // $review = DB::table('review')->orderBy('name','asc')->select('id','name')->get();
            // $review = DB::table('review')->get();
            // return view('admin.review.edit',['data'=>$review]);
            // $data_u = Review::with('user')->get();
            // // dd($data_u);
            // $data_r =  Review::with('room')->get();
            $data_u = DB::table('user')->get();
            $data_r =  DB::table('room')->get();
            $data = DB::table('review')->orderBy('rate', 'asc')->select('id', 'rate')->get();
            return view('admin.review.edit')->with(compact('review'))->with(compact('data'))->with(compact('data_u'))->with(compact('data_r'));
            // dd($review);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewFormRequest $request, Review $review)
    {
        $review->update($request->all());
        return redirect()->route('review.index')
            ->with('success', 'review has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        // dd($review);
        // if($review->branchs->count() > 0){
        //     return redirect()->route('review.index')->with('error','Kh??ng th??? x??a review n??y');
        // }else{
        //     $review->delete();
        //     return redirect()->route('review.index')->with('success','X??a review th??nh c??ng');
        // }
        // review::find($review)->delete();
        // return redirect()->back();
        $review->delete();
        return redirect()->back()
            ->with('success', 'Review has been deleted successfully');
    }
}
