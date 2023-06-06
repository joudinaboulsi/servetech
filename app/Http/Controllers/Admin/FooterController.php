<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Footer;
use Auth;
use Carbon\Carbon;
class FooterController extends Controller
{
    //index
    public function index()
    {
        $footer = Footer::all();
        return view('cms.footer.index', compact('footer'));
    }

    // create  section
    public function create()
    {
        return view('cms.footer.create');
    }

    // store  section
    public function store(Request $request)
    {
        Footer::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('footer');
    }

    // edit section
    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        if (!$footer) {
            toastr()->error('Something went wrong');

            return redirect()->route('footer');
        }
        return view('cms.footer.edit', compact('footer'));
    }

    // update section
    public function update(Request $request, $id)
    {
        $footer = Footer::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'updated_at' => Carbon::now(),
        ]);
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('footer');
    }
}
