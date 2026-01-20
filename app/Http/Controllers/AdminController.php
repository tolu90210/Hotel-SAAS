<?php

namespace App\Http\Controllers;
use File;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class AdminController extends Controller
{
    //
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminLogout(Request $request){
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Come back soon',
            'alert-type' => 'success',
        );

        return redirect('/admin/login')->with($notification);
    }

    public function AdminLogin(){

        return view('admin.admin_login');
    }

    // public function AdminDestroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     $notification = array(
    //         'message' => 'Come back soon',
    //         'alert-type' => 'success',
    //     );

    //     return redirect('/login')->with($notification);
    // }



    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ChangePassword(){

        return view('admin.admin_change_password');
    }

    public function UpdatePassword(Request $request){

        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {

            # code...
            $notification = array(
                'message' => 'Old Password doesnt match!!',
                'alert-type' => 'error',
            );

            return back()->with($notification);
        }

        // Update the password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password updated successfully',
            'alert-type' => 'success',
        );
        
        return back()->with($notification);
        
    }// End Method
}
