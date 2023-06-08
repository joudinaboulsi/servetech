<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

use Carbon\Carbon;
class AboutController extends Controller
{
    //index page
    public function index()
    {
        $about = About::where('id','2')->first();
        return view('cms.about', compact('about'));
    }

 
    // update section about
    public function update_about(Request $request)
    {
        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/about', $newPhoto);
        }

        $newLogo = '';
        if ($request->hasFile('logo')) {
            $photoLogo = $request->file('logo');
            $newLogo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photoLogo->getClientOriginalName()
            );
            $photoLogo->move('assets/img/logo', $newLogo);
        }
        $about = About::where('id','2')->update([
            'title' => $request->title,
            'content_one' => $request->content_one,
            'image' => $newPhoto,
            'content_two' => $request->content_two,
            'logo' => $newLogo,
            'counter' => $request->counter,
            'counter_title' => $request->counter_title,
            'updated_at' => Carbon::now(),

        ]);
        
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('about_path');
    }
}
