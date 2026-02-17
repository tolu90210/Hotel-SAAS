<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\MultiImage;
use App\Models\Property;
use App\Models\ProperyType;
use App\Models\User;
use App\Models\Facility;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class PropertyController extends Controller
{
    //
    public function AllProperty()
    {

        $property = Property::latest()->get();
        return view('backend.property.all_property', compact('property'));
    }

    public function AddProperty()
    {

        $propertytype = ProperyType::latest()->get();
        $amenities = Amenities::latest()->get();

        $activeAgent = User::where('status', '1')->where('role', 'agent')->latest()->get();

        return view('backend.property.add_property', compact('propertytype', 'amenities', 'activeAgent'));
    }

    public function StoreProperty(Request $request)
    {

        $amen = $request->amenities_id;
        $amenities = implode(",", $amen);
        // dd($amenities);

        $prop_code = IdGenerator::generate(['table' => 'properties', 'field' => 'property_code', 'length' => 5, 'prefix' => 'PC']);

        $pthumbnail = $request->file('property_thumbnail');

        if ($pthumbnail) {

            $manager = new ImageManager(new Driver());

            $name_gen = hexdec(uniqid()) . '.' . $pthumbnail->getClientOriginalExtension();

            $manager->read($pthumbnail)->resize(105, 105)->save(public_path('upload/property/thumbnail/' . $name_gen));

            $save_url = 'upload/property/thumbnail/' . $name_gen;
        } else {
            $save_url = null;
        }

        $property_id = Property::insertGetId([
            'ptype_id' => $request->ptype_id,
            'amenities_id' => $amenities,
            'property_name' => $request->property_name,
            'property_slug' => strtolower(str_replace(' ', '-', $request->property_name)),
            'property_code' => $prop_code,
            'property_status' => $request->property_status,

            'lowest_price' => $request->lowest_price,
            'max_price' => $request->max_price,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garage' => $request->garage,
            'garage_size' => $request->garage_size,

            'property_size' => $request->property_size,
            'property_video' => $request->property_video,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,

            'neighborhood' => $request->neighborhood,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'featured' => $request->featured,
            'hot' => $request->hot,
            'agent_id' => $request->agent_id,
            'status' => 1,
            'property_thumbnail' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $images = $request->file('multi_img');

        if ($images) {
            foreach ($images as $img) {

                $manager = new ImageManager(new Driver());

                $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

                $manager->read($img)->resize(1120, 700)->save(public_path('upload/property/multi_image/' . $make_name));

                $uploadPath = 'upload/property/multi_image/' . $make_name;

                MultiImage::insert([
                    'property_id' => $property_id,
                    'photo_name' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);
            }
        }

        $facilities = Count($request->facility_name);
        if ($facilities != NULL) {
            for ($i = 0; $i < $facilities; $i++) {
                $fcount = new Facility();
                $fcount->property_id = $property_id;
                $fcount->facility_name = $request->facility_name[$i];
                $fcount->distance = $request->distance[$i];
                $fcount->save();
            }
        }

        $notification = array(
            'message' => 'Property Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.property')->with($notification);
    }
}
