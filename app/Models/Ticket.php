<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Room;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
// use App\Http\Requests\Menu\RoomFormRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TicketController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('ticket')->orderBy('id','desc')->paginate(3);
        $datab = DB::table('room')->get();
        // dd($datab);
        if($key = request()->key){
        $data = DB::table('ticket')->orderBy('id','desc')->where('id','like','%'.$key.'%')->paginate(1);

        }
        return view('admin.ticket.index',['data'=>$data],['datab'=>$datab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datab = DB::table('room')->get();
        $data = DB::table('ticket')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.ticket.create',['data'=>$data],['datab'=>$datab]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
    //   dd($request->all());
            $ticket = new Ticket;
        $ticket->id = $request->id;
        $ticket->room_id = $request->room_id;
        $ticket->payment_id = $request->payment_id;
        $ticket->user_id = $request->user_id;
        $ticket->status = $request->status;

        
        $ticket->save();
        return redirect()->route('ticket.index')
        ->with('success','Ticket has been created successfully.');
      dd($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $province
     * @return \Illuminate\Http\Response
     *
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        {
          
            $data = DB::table('ticket')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.ticket.edit',compact('ticket','data'));
            // dd($province);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
     
        if($request->has('file_upload')){
            $file = $request->file_upload;
        
            $ext = $request->file_upload->extension();
           
            $file_name = time().'-'.'ticket.'.$ext;

            $file->move(public_path('uploads'),$file_name);
        }
        $request->merge(['thumbnail'=> $file_name]);
  
        $ticket->update($request->all());
        return redirect()->route('ticket.index')
        ->with('success','Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
      
        $ticket->delete();
        return redirect()->back()
->with('success','Ticket has been deleted successfully');
    }
}
