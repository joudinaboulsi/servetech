<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Carbon\Carbon;

class ServicerCardController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        return view('cms.services_images.index', compact('services'));
    }
    // create
       public function create()
    {
        return view('cms.services_images.create');
    }
   

    // store
    public function store(Request $request)
    {
         $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/service', $newPhoto);
        }

     
     
       Service::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $newPhoto,
           
        ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('servicesImages');
    }

    // edit
    public function edit($id)
    {
        $service = Service::find($id);
        return view('cms.services_images.edit', compact('service'));
    }

    // update
    public function update(Request $request, $id)
    {
          $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/service', $newPhoto);
        }

     
     
       Service::where('id',$id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $newPhoto,
                        'updated_at' => Carbon::now(),

           
        ]);
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('servicesImages');
    }
}