<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProperyType;
use Illuminate\Support\Facades\Auth;


class PropertyTypeController extends Controller
{
    //
    public function AllType(){

        $types = ProperyType::latest()->get();
        return view('backend.type.all_type',compact('types'));
    }

    public function AddType(){

        return view('backend.type.add_type');
    }

    public function StoreType(Request $request){

        $request->validate([
            'type_name' => 'required|unique:propery_types|max:200',
            'type_icon' => 'required'
        ]);

        ProperyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = array(
            'message' => 'Property Type Created Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.type')->with($notification);
    }

    public function EditType($id){

        $types = ProperyType::findOrFail($id);
        return view('backend.type.edit_type',compact('types'));
    }

    public function UpdateType(Request $request){

        $pid = $request->id;

        ProperyType::findOrFail($pid)->update([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = array(
            'message' => 'Property Type Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.type')->with($notification);
    }

    public function DeleteType($id){

        ProperyType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Property Type Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
