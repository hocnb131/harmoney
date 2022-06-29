<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
// use App\Http\Requests\Menu\RoomFormRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('room')->orderBy('id','desc')->paginate(3);
        if($key = request()->key){
        $data = DB::table('room')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(1);

        }
        return view('admin.room.index',['data'=>$data]);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('room')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.room.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        if($request->has('file_upload')){
            $file = $request->file_upload;
      
            $ext = $request->file_upload->extension();
         
            $file_name = time().'-'.'harmoney.'.$ext;
         
            $file->move(public_path('uploads'),$file_name);
        }
        $request->merge(['thumbnail'=> $file_name]);
      
            $room = new Room;
        $room->id = $request->id;
        $room->name = $request->name;
        $room->adults = $request->adults;
        $room->children = $request->children;
        $room->description = $request->description;
        $room->calendar = $request->calendar;
        $room->thumbnail = $request->thumbnail;
        $room->thumbnailDescription = $request->thumbnailDescription;
        $room->price = $request->price;
        $room->bedType = $request->bedType;
        $room->area = $request->area;
        $room->slug = $request ->slug;
        $room->nameEn = $request->nameEn;
        $room->status = $request->status;
        $room->branch_id = $request->branch_id;
        $room->roomType = $request->roomType;
        $room->save();
        return redirect()->route('room.index')
        ->with('success','Room has been created successfully.');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        {
          
            $data = DB::table('room')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.room.edit',compact('room','data'));
            // dd($province);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
     
        if($request->has('file_upload')){
            $file = $request->file_upload;
        
            $ext = $request->file_upload->extension();
           
            $file_name = time().'-'.'room.'.$ext;

            $file->move(public_path('uploads'),$file_name);
        }
        $request->merge(['thumbnail'=> $file_name]);
  
        $room->update($request->all());
        return redirect()->route('room.index')
        ->with('success','Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
      
        $room->delete();
        return redirect()->back()
->with('success','Room has been deleted successfully');
    }
}
