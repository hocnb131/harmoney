<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\Menu\BlogFormRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('blog')->orderBy('id','desc')->paginate(3);
        if($key = request()->key){
        $data = DB::table('blog')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(1);

        }
        return view('admin.blog.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('blog')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.blog.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogFormRequest $request)
    {
 
        if($request->has('file_upload')){
            $file = $request->file_upload;
     
            $ext = $request->file_upload->extension();
         
            $file_name = time().'-'.'blog.'.$ext;
         
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $request->thumbnail;
        }
    
        $request->merge(['thumbnail'=> $file_name]);
            $blog = new Blog;
        $blog->id = $request->id;
        $blog->status = $request->status;
        $blog->content = $request->content;
        $blog->slug = $request ->slug;
        $blog->name = $request ->name;    
        $blog->nameEn = $request->nameEn;
        $blog->thumbnail = $request->thumbnail;
        $blog->save();
        return redirect()->route('blog.index')
        ->with('success','Blog has been created successfully.');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        {
          
            $data = DB::table('blog')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.blog.edit',compact('blog','data'));
            // dd($province);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
     
        if($request->has('file_upload')){
            $file = $request->file_upload;
        
            $ext = $request->file_upload->extension();
           
            $file_name = time().'-'.'blog.'.$ext;

            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $request->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
  
        $blog->update($request->all());
        return redirect()->route('blog.index')
        ->with('success','Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
      
        $blog->delete();
        return redirect()->back()
->with('success','Blog has been deleted successfully');
    }
}
