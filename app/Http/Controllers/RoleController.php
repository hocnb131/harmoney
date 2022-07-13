<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Menu\RoleFormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $role = Role::find($role);

        // $role = Role::create(['name' => 'Manager-Room']);
        // $permission = Permission::create(['name' => 'Room-list']);
        // $permission->syncRoles($roles);

            
        $data = DB::table('roles')->orderBy('id','desc')->paginate(5);
        
        if($key = request()->key){
        $data = DB::table('role')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(10);
        }
        return view('admin.role.index',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('role')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.role.create',['data'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleFormRequest $request)
    {

            $role = new Role;
        // $role->id = $request->id;
        $role->name = $request->name;
      
        $role->save();
        return redirect()->route('role.index')
        ->with('success','Role has been created successfully.');
        }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        {
            $data = DB::table('role')->orderBy('name','asc')->select('id','name')->get();
            return view('admin.role.edit',compact('role','data'));
            // dd($role);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        
        $role->update($request->all());
        return redirect()->route('role.index')
        ->with('success','Role has been updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->back()
->with('success','Role has been deleted successfully');
    }
    // index role
    // public function role(){

    //     return view('admin.role.role');
    // }

    // // create role 
    // public function create_role(){

    //     return view('admin.role.create_role');
    // }
    
    // // index permission
    // public function permission(){

    //     return view('admin.role.permission');
    // }

    // // create permission
    // public function create_permission(){

    //     return view('admin.role.create_permission');
    // }
    public function phanquyen($id){
        $role = Role::find($id);
        $name_role = $role->role->first()->name;
        $role = Role::orderBy('id','DESC')->get();
        $all_column_roles = $role->roles->first();
        return view('admin.role.phanquyen',compact('role','role','all_column_roles'));
    }

}