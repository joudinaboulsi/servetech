<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Settings;
use Carbon\Carbon;
class AdminController extends Controller
{
    //index
    public function index()
    {
        return view('cms.dashboard');
    }

    public function pages()
    {
        $pages = Page::all();
        return view('cms.pages_seo.index', compact('pages'));
    }

    // create
    public function Page_create(){
        return view('cms.pages_seo.create');
    }

    // store
    public function store(Request $request){
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

        
        $page = Page::insert([
            'page_name' => $request->page_name,
            'meta_title' => $request->meta_title,
            'image' => $newPhoto,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
             'updated_at' => Carbon::now(),
         
        ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('pages');

     }


    public function edit($id)
    {
        $page = Page::where('id', $id)->get();
        $page = $page[0];
        return view('cms.pages_seo.edit', compact('page'));
    }
    public function update(Request $request,$id){

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

        
        $page = Page::where('id',$id)->update([
            'page_name' => $request->page_name,
            'meta_title' => $request->meta_title,
            'image' => $newPhoto,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
             'updated_at' => Carbon::now(),
         
        ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('pages');


    }



#################################### Settings ##########################################################

// list
    public function settings()
    {
        $settings = Settings::all();
        return view('cms.settings.index', compact('settings'));
    }

    // create
    public function create_settings()
    {
        return view('cms.settings.create');
    }

    // store
    public function store_settings(Request $request)
    {
        $file = $request->file('brochure');
        $filename =time().$file->getClientOriginalName();
         $file->move('assets', $filename);

        Settings::insert([
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
          
        ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('settings');
    }

    // edit
    public function edit_settings($id)
    {
        $settings = Settings::findOrFail($id);
        if (!$settings) {
            toastr()->error('Something went wrong');
            return redirect()->route('settings');
        }
        return view('cms.settings.edit', compact('settings'));
    }


    // update
    public function update_settings(Request $request, $id)
    { 
         $filename='';
        if ($request->hasFile('brochure') ) {
             $file = $request->file('brochure');
            $filename =time().$file->getClientOriginalName();
           
            $file->move('assets', $filename);
        }
        
      
     
        Settings::where('id', $id)->update([
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
