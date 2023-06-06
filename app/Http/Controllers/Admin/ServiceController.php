<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServicePage;
use Carbon\Carbon;

class ServiceController extends Controller
{
    //index
    public function index()
    {
        $services = ServicePage::all();
        return view('cms.services.index', compact('services'));
    }

    // create
    public function create()
    {
        return view('cms.services.create');
    }
    // store
    public function store(Request $request)
    {
        ServicePage::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('services');
    }

    // edit
    public function edit($id)
    {
        $service = ServicePage::find($id);
        return view('cms.services.edit', compact('service'));
    }


    // update
    public function update(Request $request, $id)
    {
        ServicePage::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'updated_at' => Carbon::now(),


        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('services');
    }
}
