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
        $service = ServicePage::where('id','1')->first();
        return view('cms.service_page', compact('service'));
    }

    
    // update
    public function update(Request $request)
    {
        ServicePage::where('id','1')->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('services');
    }
}
