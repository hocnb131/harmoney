<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Menu\UserFormRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('user')->orderBy('id','desc')->paginate(3);
        if($key = request()->key){
        $data = DB::table('user')->orderBy('id','desc')->where('fullName','like','%'.$key.'%')->paginate(1);
        }
        return view('admin.user.index',['data'=>$data]);
        return $data;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('user')->orderBy('fullName','asc')->select('id','fullName')->get();
        return view('admin.user.create',['data'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'demo.'.$ext;
            
            $file->move(publih('uploads'),$file_name);
        }
            $user = new User;
        // $user->id = $request->id;
        $user->fullName = $request->fullName;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = Hash::make($request['password']);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('user.index')
        ->with('success','User has been created successfully.');
        }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        {
            $data = DB::table('user')->orderBy('fullName','asc')->select('id','fullName')->get();
            return view('admin.user.edit',compact('user','data'));
            // dd($user);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            // dd($file);
            $ext = $request->file_upload->extension();
            // dd($ext);
            // $file_name = $file->getClientoriginalName();
            $file_name = time().'-'.'user.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'),$file_name);
        }
        // dd($user);
        $user->update($request->all());
        return redirect()->route('user.index')
        ->with('success','User has been updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()
->with('success','User has been deleted successfully');
    }
}