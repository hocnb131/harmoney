<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Menu\PermissionFormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $permission = permission::find($permission);

        // $permission = permission::create(['name' => 'Manager-Room']);
        // $permission = Permission::create(['name' => 'Room-list']);
        // $permission->syncpermissions($permissions);

            
        $data = DB::table('permissions')->orderBy('id','desc')->paginate(5);
        
        if($key = request()->key){
        $data = DB::table('permission')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(10);
        }
        return view('admin.permission.index',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = DB::table('permission')->get();
        // return view('admin.permission.create',['data'=>$data]);
        return view('admin.permission.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $permission = new permission;
        // $permission->id = $request->id;
        $permission->name = $request->name;
      
        $permission->save();
        return redirect()->route('permission.index')
        ->with('success','Permission has been created successfully.');
        }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        {
            $data = DB::table('permission')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.permission.edit',compact('permission','data'));
            // dd($permission);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
        
        $permission->update($request->all());
        return redirect()->route('permission.index')
        ->with('success','Permission has been updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        $permission->delete();
        return redirect()->back()
->with('success','Permission has been deleted successfully');
    }
    // index permission
    // public function permission(){

    //     return view('admin.permission.permission');
    // }

    // // create permission 
    // public function create_permission(){

    //     return view('admin.permission.create_permission');
    // }
    
    // // index permission
    // public function permission(){

    //     return view('admin.permission.permission');
    // }

    // // create permission
    // public function create_permission(){

    //     return view('admin.permission.create_permission');
    // }
    public function phanquyen($id){
        $permission = permission::find($id);
        $name_permission = $permission->permission->first()->name;
        $permission = permission::orderBy('id','DESC')->get();
        $all_column_permissions = $permission->permissions->first();
        return view('admin.permission.phanquyen',compact('permission','permission','all_column_permissions'));
    }

}