<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Carbon\Carbon;


class ContactController extends Controller
{
    //index
    public function index()
    {
        $contacts = Contact::all();
        return view('cms.contact.index', compact('contacts'));
    }

    // create  section
    public function create()
    {
        return view('cms.contact.create');
    }

    // store  section
    public function store(Request $request)
    {
        Contact::insert([
            'title' => $request->title,
            'title_contact' => $request->title_contact,
            'title_address' => $request->title_address,
            'title_working' => $request->title_working,
            'title_message' => $request->title_message,
            'map' => $request->map,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('contact');
    }

    // edit section
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        if (!$contact) {
            toastr()->error('Something went wrong');

            return redirect()->route('contact');
        }
        return view('cms.contact.edit', compact('contact'));
    }

    // update section
    public function update(Request $request, $id)
    {
        $contact = Contact::where('id', $id)->update([
            'title' => $request->title,
            'title_contact' => $request->title_contact,
            'title_address' => $request->title_address,
            'title_working' => $request->title_working,
            'title_message' => $request->title_message,
            'map' => $request->map,
            'updated_at' => Carbon::now(),

        ]);
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('contact');
    }
}
