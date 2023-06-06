<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlider;
use App\About;
use App\PortfolioPage;
use App\PortfolioImage;
use App\Client;
use App\Contact;
use App\Footer;
use App\Service;
use App\SectionOne;
use App\SectionTwo;
use App\Settings;
class PagesController extends Controller
{

   public function __construct()
    {
         app()->singleton('contact', function(){
            $settings = Settings::where('id','3')->get();
            return $settings[0];
        });
      
      }

    //home pgae
    public function home()
    {
        $home_slides = HomeSlider::all();
        $about = About::all();
        $portfolio = PortfolioPage::get();
        $portfolio_image = PortfolioImage::get();
        $clients = Client::get();
        $contact = Contact::get();
        $footer = Footer::get();
        $services_images= Service::get();
        $section_one = SectionOne::get();
        $section_two = SectionTwo::get();
        $settings = Settings::get();

      return view('layouts.app', compact('home_slides','about','portfolio','portfolio_image','clients','contact','footer','services_images','section_one','section_two','settings'));
   
    }



    // portfolio
 
    
}