<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectionOne;
use App\SectionTwo;
use Carbon\Carbon;

class SectionsController extends Controller
{
    //index section one
    public function index()
    {
        $section_one = SectionOne::all();
        return view('cms.section_one.index', compact('section_one'));
    }
    // create section one
    public function create()
    {
        return view('cms.section_one.create');
    }
    // store section one
    public function store(Request $request)
    {
        $newPhoto = '';
        if ($request->hasFile('image_one')) {
            $photo = $request->file('image_one');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/section1', $newPhoto);
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

        SectionOne::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link_one' => $request->link_one,
            'image_one' => $newPhoto,
            'link_two' => $request->link_two,
            'logo' => $newLogo,
            'counter' => $request->counter,
            'counter_title' => $request->counter_title,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('SectionOne');
    }
    //edit
    public function edit($id)
    {
        $section = SectionOne::findOrFail($id);
        if (!$section) {
            toastr()->error('Something went wrong');

            return redirect()->route('SectionOne');
        }
        return view('cms.section_one.edit', compact('section'));
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

        SectionOne::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link_one' => $request->link_one,
            'image_one' => $newPhoto,
            'link_two' => $request->link_two,
            'logo' => $newLogo,
            'counter' => $request->counter,
            'counter_title' => $request->counter_title,
            'updated_at' => Carbon::now(),

        ]);
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('SectionOne');
    }

    //index section two
    public function index_section_two()
    {
        $section_two = SectionTwo::all();
        return view('cms.section_two.index', compact('section_two'));
    }
    // create section two
    public function create_section_two()
    {
        return view('cms.section_two.create');
    }
    // store section two
    public function store_section_two(Request $request)
    {
        $newPhoto = '';
        if ($request->hasFile('image_one')) {
            $photo = $request->file('image_one');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/section2', $newPhoto);
        }

        $newImage = '';
        if ($request->hasFile('image_two')) {
            $image = $request->file('image_two');
            $newImage = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $image->getClientOriginalName()
            );
            $image->move('assets/img/section2', $newImage);
        }

        SectionTwo::insert([
            'title' => $request->title,
            'main_title' => $request->main_title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'link' => $request->link,
            'image_one' => $newPhoto,
            'image_two' => $newImage,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('SectionTwo');
    }
    //edit section two
    public function edit_section_two($id)
    {
        $section = SectionTwo::findOrFail($id);
        if (!$section) {
            toastr()->error('Something went wrong');

            return redirect()->route('SectionTwo');
        }
        return view('cms.section_two.edit', compact('section'));
    }
    // update section two
    public function update_section_two(Request $request, $id)
    {
        $newPhoto = '';
        if ($request->hasFile('image_one')) {
            $photo = $request->file('image_one');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/section2', $newPhoto);
        }

        $newImage = '';
        if ($request->hasFile('image_two')) {
            $image = $request->file('image_two');
            $newImage = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $image->getClientOriginalName()
            );
            $image->move('assets/img/section2', $newImage);
        }

        SectionTwo::where('id', $id)->update([
            'title' => $request->title,
            'main_title' => $request->main_title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'link' => $request->link,
            'image_one' => $newPhoto,
            'image_two' => $newImage,
             'updated_at' => Carbon::now(),

        ]);
        toastr()->success('Data has been updated successfully!');
        return redirect()->route('SectionTwo');
    }
}
