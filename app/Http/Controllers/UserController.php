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


class UserController extends Controller
{
    //
    public function Index(){

        return view('frontend.index');
    }

    public function UserLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Come back soon',
            'alert-type' => 'success',
        );

        return redirect('/')->with($notification);
    }

    public function UserProfile(){
        
        $id = Auth::user()->id;
        $userProfileData = User::find($id);

        return view('user.user_profile_view', compact('userProfileData'));
    }

    public function UserProfileStore(Request $request){
        
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_image/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function UserChangePassword(){
        
        return view('user.user_change_password');
    }

    public function UserUpdatePassword(Request $request){

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
