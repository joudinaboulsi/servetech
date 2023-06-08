<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function index(){
      $page = Page::where('id','3')->first();
        return view('cms.seo',compact('page'));
    }


// update
    public function update(Request $request){

           $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/page', $newPhoto);
        }

        $page = Page::where('id','3')->update([
            'name' => $request->name,
            'meta_title' => $request->meta_title,
            'image' => $newPhoto,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
             'updated_at' => Carbon::now(),
         
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin');
    }
}
