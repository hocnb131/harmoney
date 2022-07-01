<?php
namespace App\Http\Controllers;
use App\Http\Requests\Menu\CouponFormRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('coupon')->orderBy('id','desc')->paginate(5);
        if($key = request()->key){
        $data = DB::table('coupon')->orderBy('id','desc')->where('code','like','%'.$key.'%')->paginate(10);
        }
        return view('admin.coupon.index',['data'=>$data]);
        return $data;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('coupon')->orderBy('code','asc')->select('id','code')->get();
        return view('admin.coupon.create',['data'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponFormRequest $request)
    {
            $coupon = new Coupon;
        // $coupon->id = $request->id;
        $coupon->code = $request->code;
        $coupon->started_at = $request->started_at;
        $coupon->ended_at = $request->ended_at;
        $coupon->percent = $request->percent;
        $coupon->amount = $request->amount;
        $coupon->used = $request->used;
        $coupon->ticket_id = $request->ticket_id;
        $coupon->save();
        return redirect()->route('coupon.index')
        ->with('success','Coupon has been created successfully.');
        }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        {
            $data = DB::table('coupon')->orderBy('code','asc')->select('id','code')->get();
            return view('admin.coupon.edit',compact('coupon','data'));
            // dd($coupon);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        // dd($coupon);
        $coupon->update($request->all());
        return redirect()->route('coupon.index')
        ->with('success','Coupon has been updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->back()
->with('success','Coupon has been deleted successfully');
    }
}