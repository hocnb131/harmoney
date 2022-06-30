<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Requests\Menu\PaymentFormRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PaymentController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('payment')->orderBy('id','desc')->paginate(3);
        if($key = request()->key){
        $data = DB::table('payment')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(1);

        }
        return view('admin.payment.index',['data'=>$data]);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('payment')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.payment.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Payment $request)
    {
 
            $payment = new Payment;
        $payment->id = $request->id;
        $payment->ticket_id = $request->ticket_id;
        $payment->user_id = $request->user_id;
        $payment->paymentMethod = $request ->paymentMethod;
        $payment->amount = $request ->naamountme;    
        $payment->status = $request->status;
        $payment->save();
        return redirect()->route('payment.index')
        ->with('success','Payment has been created successfully.');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        {
          
            $data = DB::table('payment')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.payment.edit',compact('payment','data'));
            // dd($province);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return redirect()->route('payment.index')
        ->with('success','Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
      
        $payment->delete();
        return redirect()->back()
->with('success','Payment has been deleted successfully');
    }
}
