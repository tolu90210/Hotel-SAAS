<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\Property;
use App\Models\ProperyType;
use App\Models\User;


class PropertyController extends Controller
{
    //
    public function AllProperty(){
        
        $property = Property::latest()->get();
        return view('backend.property.all_property',compact('property'));
    }

    public function AddProperty(){

        $propertytype = ProperyType::latest()->get();
        $amenities = Amenities::latest()->get();

        $activeAgent = User::where('status','1')->where('role','agent')->latest()->get();

        return view('backend.property.add_property', compact('propertytype','amenities', 'activeAgent'));
    }
}
