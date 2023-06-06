<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortfolioPage;
use App\PortfolioImage;
use Carbon\Carbon;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $portfioPage = PortfolioPage::all();
        return view('cms.portfolio_page.index', compact('portfioPage'));
    }
    // create
    public function create()
    {
        return view('cms.portfolio_page.create');
    }

    // store
    public function store(Request $request)
    {
        PortfolioPage::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        toastr()->success('Data has been saved  successfully!');

        return redirect()->route('portfolioPage');
    }

    // edit
    public function edit($id)
    {
        $portfolio = PortfolioPage::findOrFail($id);
        if (!$portfolio) {
            toastr()->error('Something went wrong');

            return redirect()->route('portfolioPage');
        }
        return view('cms.portfolio_page.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        PortfolioPage::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        toastr()->success('Data has been updated successfully!');

        return redirect()->route('portfolioPage');
    }

    ##################################### Portfilio Images ########################################

    // list

    public function index_image()
    {
        $portfolio_images = PortfolioImage::all();
        return view('cms.portfolio_image.index', compact('portfolio_images'));
    }

    // create

    public function create_image()
    {
        return view('cms.portfolio_image.create');
    }

    // store
    public function store_image(Request $request)
    {
        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/portfolio', $newPhoto);
        }

        PortfolioImage::insert([
            'title' => $request->title,
            'image' => $newPhoto,
        ]);

        toastr()->success('Data has been saved  successfully!');

        return redirect()->route('PortfolioImage');
    }

    // edit
    public function edit_image($id)
    {
        $pImage = PortfolioImage::findOrFail($id);
        if (!$pImage) {
            toastr()->error('Something went wrong');

            return redirect()->route('PortfolioImage');
        }
        return view('cms.portfolio_image.edit', compact('pImage'));
    }

    // update

    public function update_image(Request $request, $id)
    {
        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/portfolio', $newPhoto);
        }
        PortfolioImage::where('id', $id)->update([
            'title' => $request->title,
            'image' => $newPhoto,
            'updated_at' => Carbon::now(),

        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('PortfolioImage');
    }
}
