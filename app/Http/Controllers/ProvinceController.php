<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Requests\Menu\ProvinceFormRequest;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProvinceController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request()->key);
        // $data = Province::orderBy('create_at','DESC')->paginate(15);
        // return view('admin.province.index',compact('data'));
        // $data = DB::select('select * from province');
        // $data = DB::table('province')->orderBy('id','desc')->paginate(2);
        $data = DB::table('province')->orderBy('id','desc')->paginate(3);
        // $data = DB::table('province')->get();
        // dd($data);
        // $data = DB::table('province')->orderBy('id','desc')->search()->paginate(1);
        if($key = request()->key){
        $data = DB::table('province')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(1);

        }
        // $newDateFormat3 = Carbon::parse($data->create_at)->format('d/m/Y');
        // $newDateFormat2 = date('d/m/Y', strtotime($user->created_at));
        return view('admin.province.index',['data'=>$data]);
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('province')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.province.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvinceFormRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     ''
        // ],
        // [
        //     'name.required' => 'Tên không được để trống'
        // ]
        // );
        // dd($request->all());
        if($request->has('file_upload')){
            $file = $request->file_upload;
            // dd($file);
            $ext = $request->file_upload->extension();
            // dd($ext);
            // $file_name = $file->getClientoriginalName();
            $file_name = time().'-'.'harmoney.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'),$file_name);
        }
        
        $request->merge(['thumbnail'=> $file_name]);
        // dd($request->all());
    // if(DB::table('province')($request->all())){
    //     return redirect()->route('province.index')->with('success','Thêm mới Province thành công');
    //     }
    // }
            $province = new Province;
        // $province->id = $request->id;
        $province->name = $request->name;
        $province->create_at = $request->create_at;
        $province->status = $request->status;
        $province->thumbnail = $request->thumbnail;
        $province->thumbnailDescription = $request->thumbnailDescription;
        $province->description = $request->description;
        $province->save();
        return redirect()->route('province.index')
        ->with('success','Province has been created successfully.');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        {
            // $province = DB::table('province')->orderBy('name','asc')->select('id','name')->get();
            // $province = DB::table('province')->get();
            // return view('admin.province.edit',['data'=>$province]);
            $data = DB::table('province')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.province.edit',compact('province','data'));
            // dd($province);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        // $province = Province::find($province);
        // // $province->id = $request->id;
        // $province->name = $request->name;
        // $province->create_at = $request->create_at;
        // $province->status = $request->status;
        // $province->thumbnail = $request->thumbnail;
        // $province->thumbnailDescription = $request->thumbnailDescription;
        // $province->description = $request->description;
        // $province->save();
        // return redirect()->route('province.index')
        // ->with('success','Province has been updated successfully.');
        if($request->has('file_upload')){
            $file = $request->file_upload;
            // dd($file);
            $ext = $request->file_upload->extension();
            // dd($ext);
            // $file_name = $file->getClientoriginalName();
            $file_name = time().'-'.'province.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'),$file_name);
            
        }else{
            $file_name = $request->thumbnail;
        }
        // dd($request);
        $request->merge(['thumbnail'=> $file_name]);
        // dd($request);
        $province->update($request->all());
        return redirect()->route('province.index')
        ->with('success','Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        // dd($province);
        // if($province->branchs->count() > 0){
        //     return redirect()->route('province.index')->with('error','Không thể xóa Province này');
        // }else{
        //     $province->delete();
        //     return redirect()->route('province.index')->with('success','Xóa Province thành công');
        // }
        // Province::find($province)->delete();
        // return redirect()->back();
        $province->delete();
        return redirect()->back()
->with('success','Province has been deleted successfully');
    }
}
