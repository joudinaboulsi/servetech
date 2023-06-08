<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Carbon\Carbon;
class SettingsController extends Controller
{
      public function settings()
    {
        $settings = Settings::where('id','3')->first();;
        return view('cms.settings', compact('settings'));
    }



    // update
    public function update_settings(Request $request, $id)
    { 
         $filename='';
        if ($request->hasFile('brochure') ) {
             $file = $request->file('brochure');
            $filename =time() . $file->getClientOriginalName();
            $file->move('assets', $filename);
        }
        

        Settings::where('id', '3')->update([
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'email' => $request->email,
            'address' => $request->address,
            'working_days' => $request->working_days,
            'working_hours' => $request->working_hours,
            'days_closed' => $request->closed_days,
            'closed' => $request->closed,
            'map' => $request->map,
            'brochure' => $filename,
            'updated_at' => Carbon::now(),
        ]);
        
        toastr()->success('Data has been updated successfully!');
        return redirect()->route('settings');
    }
}
