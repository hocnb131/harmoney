<?php

namespace App\Http\Controllers;
use App\Http\Requests\Menu\branchFormRequest;
use App\Models\Branch;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BranchController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request()->key);
        // $data = branch::orderBy('create_at','DESC')->paginate(15);
        // return view('admin.branch.index',compact('data'));
        // $data = DB::select('select * from branch');
        // $data = DB::table('branch')->orderBy('id','desc')->paginate(2);
        $data = DB::table('branch')->orderBy('id','desc')->paginate(5);
        $datab = DB::table('province')->get();
        // $provinces = Province::find(1)->provinces;
        // dd($provinces);
        // $data = DB::table('branch')->get();
        // dd($data);
        // $data = DB::table('branch')->orderBy('id','desc')->search()->paginate(1);
        if($key = request()->key){
        $data = DB::table('branch')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(1);

        }
        // $newDateFormat3 = Carbon::parse($data->create_at)->format('d/m/Y');
        // $newDateFormat2 = date('d/m/Y', strtotime($user->created_at));
        return view('admin.branch.index',['data'=>$data],['datab'=>$datab]);
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datab = DB::table('province')->get();
        // dd($datab);

        $data = DB::table('branch')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.branch.create',['data'=>$data],['datab'=>$datab]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        //     ''
        // ],
        // [
        //     'name.required' => 'Tên không được để trống'
        // ]
        // );
        dd($request->all());
        if($request->has('file_upload')){
            $file = $request->file_upload;
            // dd($file);
            $ext = $request->file_upload->extension();
            // dd($ext);
            // $file_name = $file->getClientoriginalName();
            $file_name = time().'-'.'branch.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $request->thumbnail;
        }
        
        $request->merge(['thumbnail'=> $file_name]);
        
        // dd($request->all());
    // if(DB::table('branch')($request->all())){
    //     return redirect()->route('branch.index')->with('success','Thêm mới branch thành công');
    //     }
    // }
            $branch = new Branch;
        // $branch->id = $request->id;
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->address = $request->email;
        $branch->phoneNumber = $request->phoneNumber;
        $branch->description = $request->description;
        $branch->thumbnail = $request->thumbnail;
        $branch->thumbnailDescription = $request->thumbnailDescription;
        $branch->slug = $request->slug;
        $branch->status = $request->status;
        $branch->nameEn = $request->nameEn;
        $branch->province_id = $request->province_id;
        $branch->save();
        return redirect()->route('branch.index')
        ->with('success','Branch has been created successfully.');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(branch $branch)
    {
        {
            // $branch = DB::table('branch')->orderBy('name','asc')->select('id','name')->get();
            // $branch = DB::table('branch')->get();
            // return view('admin.branch.edit',['data'=>$branch]);
            $datab = DB::table('province')->get();
            $data = DB::table('branch')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.branch.edit',compact('branch','data'),compact('branch','datab'));
            // dd($branch);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        // $branch = branch::find($branch);
        // // $branch->id = $request->id;
        // $branch->name = $request->name;
        // $branch->create_at = $request->create_at;
        // $branch->status = $request->status;
        // $branch->thumbnail = $request->thumbnail;
        // $branch->thumbnailDescription = $request->thumbnailDescription;
        // $branch->description = $request->description;
        // $branch->save();
        // return redirect()->route('branch.index')
        // ->with('success','branch has been updated successfully.');
        if($request->has('file_upload')){
            $file = $request->file_upload;
            // dd($file);
            $ext = $request->file_upload->extension();
            // dd($ext);
            // $file_name = $file->getClientoriginalName();
            $file_name = time().'-'.'branch.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'),$file_name);
            
        }else{
            $file_name = $request->thumbnail;
        }
        // dd($request);
        $request->merge(['thumbnail'=> $file_name]);
        // dd($request);
        $branch->update($request->all());
        return redirect()->route('branch.index')
        ->with('success','Branch has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(branch $branch)
    {
        // dd($branch);
        // if($branch->branchs->count() > 0){
        //     return redirect()->route('branch.index')->with('error','Không thể xóa branch này');
        // }else{
        //     $branch->delete();
        //     return redirect()->route('branch.index')->with('success','Xóa branch thành công');
        // }
        // branch::find($branch)->delete();
        // return redirect()->back();
        $branch->delete();
        return redirect()->back()
->with('success','Branch has been deleted successfully');
    }
}
