<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Menu\ServiceFormRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServiceController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('service')->orderBy('id','desc')->paginate(3);
        if($key = request()->key){
        $data = DB::table('service')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(1);

        }
        return view('admin.service.index',['data'=>$data]);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('service')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.service.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceFormRequest $request)
    {
 
        // if($request->has('file_upload')){
        //     $file = $request->file_upload;
      
        //     $ext = $request->file_upload->extension();
         
        //     $file_name = time().'-'.'harmoney.'.$ext;
         
        //     $file->move(public_path('uploads'),$file_name);
        // }
        // $request->merge(['thumbnail'=> $file_name]);
      
            $service = new Service;
        $service->id = $request->id;
        $service->name = $request->name;
        $service->icon = $request->icon;
        $service->room_id = $request ->room_id;
        $service->serviceType = $request ->serviceType;    
        $service->save();
        return redirect()->route('service.index')
        ->with('success','Service has been created successfully.');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        {
          
            $data = DB::table('service')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.service.edit',compact('service','data'));
            // dd($province);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $province
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceFormRequest $request, Service $service)
    {
     
        // if($request->has('file_upload')){
        //     $file = $request->file_upload;
        
        //     $ext = $request->file_upload->extension();
           
        //     $file_name = time().'-'.'service.'.$ext;

        //     $file->move(public_path('uploads'),$file_name);
        // }
        // $request->merge(['thumbnail'=> $file_name]);
  
        $service->update($request->all());
        return redirect()->route('service.index')
        ->with('success','Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
      
        $service->delete();
        return redirect()->back()
->with('success','Service has been deleted successfully');
    }
}
