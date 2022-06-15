<?php

namespace App\Http\Controllers\Users;

use App\Models\Role;
use App\Models\User;
use App\Helpers\CRMHelper;
use App\Jobs\SendEmailJob;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Mail\RegisterStaffMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $current_user = Auth::user();
        $route_active = 'users';
        $users = User::where('id','!=','1')->where('id','!=',$current_user->id)->get();
        $user_ids = response()->json($users->modelKeys());
        $roles = Role::where('id','!=','1')->get();
        return view('crm.user.users', compact(['route_active','users','roles','user_ids']));
    }

    public function import()
    {
        $route_active = 'users';
        $current_user = Auth::user();
        $users = User::where('id','!=','1')->where('id','!=',$current_user->id)->get();
        $user_ids = response()->json($users->modelKeys());
        $roles = Role::where('id','!=','1')->get();
        return view('crm.user.users_import', compact(['route_active','users','roles','user_ids']));
    }

    public function importStore(Request $request){
        $file = $request->file('file')->store('import');
        $import = new UsersImport;
        $import->import($file);
        if(count($import->errors()) == 0){
            $notification = array(
                'message' => $import->getRowCount().' '.__('users imported successfully'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->withErrors($import->errors());
        }
    }

    public function userProfile()
    {
        $route_active = 'users_profile';
        $user = Auth::user();
        return view('crm.user.profile', compact(['route_active','user']));
    }

    public function updatePorfile(Request $request, User $user)
    {
        $validator = $request->validate([
            'name'=> 'required',
        ]);

        if($validator){
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->save();
            $notification = array(
                'message' => __('User updated successfully'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function updatePassword(Request $request, User $user)
    {
        $validator = $request->validate([
            'old_password'=> 'required',
            'new_password'=> 'required',
            'confirm_password'=> 'required',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            $notification = array(
                'message' => __('Old password is incorrect'),
                'alert-type' => 'error'
            );
            return back()->with($notification)->withInput();
        }

        if($request->new_password != $request->confirm_password){
            $notification = array(
                'message' => __('New password and confirm password does not match'),
                'alert-type' => 'error'
            );
            return back()->with($notification)->withInput();
        }

        $hashed = Hash::make($request->new_password);
        
        if($validator){
            $user->password = $hashed;
            $user->save();
            $notification = array(
                'message' => __('Password updated successfully'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function mailToStaff(User $user, $password){
        $company_details = CRMHelper::company_details();
        if(CRMHelper::cron_status() == '1'){
            SendEmailJob::dispatch($user, $password, $company_details);
            $notification = array(
                'message' => __('User added and notified successfully'),
                'alert-type' => 'success'
            );
        }else{
            Mail::to($user->email)
            ->send(new RegisterStaffMail($user, $password, $company_details));
            $notification = array(
                'message' => __('User added and notified successfully'),
                'alert-type' => 'success'
            );
        }
        
        return back()->with($notification);
    }

    public function store(Request $request)
    {
        $admin = User::where(['id'=>'1'])->first();
        $validator = $request->validate([
            'email'=>'required | email | unique:users',
            'name'=> 'required',
            'password'=>'required'
        ]);
        if($validator){
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'role_id'=>$request->role_id,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password)
            ]);

            if ($request->welcome_email == 'yes') {
                return $this->mailToStaff($user, $request->password);
            }    

            $notification = array(
                'message' => __('User added successfully'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function update(Request $request, User $user)
    {
        $validator = $request->validate([
            'name'=> 'required',
        ]);

        if($validator){
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->role_id = $request->role_id;
            $user->status = $request->status;
            $user->save();
            $notification = array(
                'message' => __('User updated successfully'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }


    public function destroy(User $user)
    {
        if($user->delete()){
            $notification = [
                'alert-type'=>'success',
                'message'=>__('User deleted successfully')
            ];
            return back()->with($notification);
        }else{
            $notification = [
                'alert-type'=>'error',
                'message'=>__('Please try again')
            ];
            return back()->with($notification);            
        }
    }
}
