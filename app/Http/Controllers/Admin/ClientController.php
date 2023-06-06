<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use Carbon\Carbon;

class ClientController extends Controller
{
    //index page
    public function index()
    {
        $clients = Client::all();
        return view('cms.client.index', compact('clients'));
    }

    // create  section
    public function create()
    {
        return view('cms.client.create');
    }
    // store  section
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
            $photo->move('assets/img/client', $newPhoto);
        }

        $client = CLient::insert([
            'title' => $request->title,
            'mini_title' => $request->mini_title,
            'image' => $newPhoto,
        ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('clients');
    }
    // edit section
    public function edit($id)
    {
        $client = CLient::findOrFail($id);
        if (!$client) {
            toastr()->error('Something went wrong');

            return redirect()->route('client');
        }
        return view('cms.client.edit', compact('client'));
    }

    // update section
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
            $photo->move('assets/img/client', $newPhoto);
        }

        $client = CLient::where('id', $id)->update([
            'title' => $request->title,
              'mini_title' => $request->mini_title,
            'image' => $newPhoto,
            'updated_at' => Carbon::now(),

        ]);
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('clients');
    }
}