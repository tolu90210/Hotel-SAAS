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

    public function EditProperty($id)
    {

        $facilities = Facility::where('property_id', $id)->get();

        $property = Property::findOrFail($id);

        $amenities_type = $property->amenities_id;
        $property_amenities = explode(",", $amenities_type);

        $multiImage = MultiImage::where('property_id',$id)->get();

        $propertytype = ProperyType::latest()->get();

        $amenities = Amenities::latest()->get();

        $activeAgent = User::where('status', '1')->where('role', 'agent')->latest()->get();

        return view('backend.property.edit_property', compact('property', 'propertytype', 'amenities', 'activeAgent', 'property_amenities', 'multiImage', 'facilities'));
    }

    public function UpdateProperty(Request $request)
    {

        $amen = $request->amenities_id;
        $amenities = implode(",", $amen);

        $property_id = $request->id;

        Property::findOrFail($property_id)->update([
            'ptype_id' => $request->ptype_id,
            'amenities_id' => $amenities,
            'property_name' => $request->property_name,
            'property_slug' => strtolower(str_replace(' ', '-', $request->property_name)),
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
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Property Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.property')->with($notification);
    }

    public function UpdatePropertyThumbnail(Request $request)
    {

        $pro_id = $request->id;
        $oldImage = $request->old_img;

        if ($request->hasFile('property_thumbnail')) {
            $pthumbnail = $request->file('property_thumbnail');

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $pthumbnail->getClientOriginalExtension();

            $manager->read($pthumbnail)
                ->resize(105, 105)
                ->save(public_path('upload/property/thumbnail/' . $name_gen));

            $save_url = 'upload/property/thumbnail/' . $name_gen;

            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }

            Property::findOrFail($pro_id)->update([
                'property_thumbnail' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
        }


        $notification = array(
            'message' => 'Property Main Thumbnail Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function UpdatePropertyMultiimage(Request $request){

        $imgs = $request->multi_img;

        foreach ($imgs as $id => $img) {
            $imgDel = MultiImage::findOrFail($id);
            unlink($imgDel->photo_name);
            
            $manager = new ImageManager(new Driver());
            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $manager->read($img)->resize(1120, 700)->save(public_path('upload/property/multi_image/' . $make_name));
            $uploadPath = 'upload/property/multi_image/' . $make_name;

            MultiImage::where('id',$id)->update([
                'photo_name' => $uploadPath,
                'updated_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Property MultiImage Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PropertyMultiimageDelete($id){

        $oldImg = MultiImage::findOrFail($id);
        unlink($oldImg->photo_name);

        MultiImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Property MultiImage Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function StoreNewMultiimage(Request $request){

        $new_multi = $request->imageid;
        $image = $request->file('multi_img');

        $manager = new ImageManager(new Driver());

        $make_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        $manager->read($image)->resize(1120, 700)->save(public_path('upload/property/multi_image/' . $make_name));

        $uploadPath = 'upload/property/multi_image/' . $make_name;

        MultiImage::insert([
            'property_id' => $new_multi,
            'photo_name' => $uploadPath,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'New Property MultiImage Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function UpdatePropertyFacilities(Request $request){

        $pid = $request->id;

        if ($request->facility_name == NULL) {
            return redirect()->back();
        }else{

            Facility::where('property_id', $pid)->delete();
            
            $facilities = Count($request->facility_name);
            
            for ($i = 0; $i < $facilities; $i++) {
                $fcount = new Facility();
                $fcount->property_id = $pid;
                $fcount->facility_name = $request->facility_name[$i];
                $fcount->distance = $request->distance[$i];
                $fcount->save();
            }
        }

        $notification = array(
            'message' => 'Property Facility Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function DeleteProperty($id){

        $property = Property::findOrFail($id);
        unlink(($property->property_thumbnail));

        Property::findOrFail($id)->delete();

        $images = MultiImage::where('property_id', $id)->get();
        foreach ($images as $image) {
            unlink($image->photo_name);
            MultiImage::where('property_id', $id)->delete();
        }

        $facilities = Facility::where('property_id', $id)->get();
        foreach ($facilities as $facility) {
            $facility->facility_name;
            Facility::where('property_id', $id)->delete();
        }

        $notification = array(
            'message' => 'Property Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function InactiveProperty(Request $request){

        $pid = $request->id;
        Property::findOrFail($pid)->update([
            'status' => 0,
        ]);

        $notification = array(
            'message' => 'Property Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveProperty(Request $request){
        
        $pid = $request->id;
        Property::findOrFail($pid)->update([
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Property Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

