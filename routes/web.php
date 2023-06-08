<?php
Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix'=>'admin'], function () {
 Route::get('','AdminController@index')->name('admin');
 Route::post('/seo','AdminController@update')->name('adminSeo');


Route::get('/about', ['as' => 'about_path','uses' => 'AboutController@index']);
Route::post('/about/save', ['as' => 'update_path','uses' => 'AboutController@update_about']);
########################## section one ###########################################
Route::get('/section-one','SectionsController@index')->name('admin-section-one');
Route::post('/section-one/update','SectionsController@update')->name('updateSectionOne');
########################## section Two ###########################################
Route::get('/section-two','SectionsController@index_section_two')->name('admin-section-two');
Route::post('/section-two/update','SectionsController@update_section_two')->name('updateSectionTwo');
###################### Portfolio Page #########################
 Route::get('portfolio', 'PortfolioController@index')->name('portfolioPage');
  Route::post('update-portfolio}', 'PortfolioController@update')->name('updateportfolioPage');
################################### service Page ########################################
 Route::get('services', 'ServiceController@index')->name('services');
  Route::post('service/update', 'ServiceController@update')->name('updateService');

  ######################## contact ############################################
  Route::get('contact', 'ContactController@index')->name('contact');
   Route::post('contact/save', 'ContactController@update')->name('updateContact' );
   ####################### footer ############################################
    Route::get('footer', 'FooterController@index')->name('footer');
   Route::post('update-footer', 'FooterController@update')->name('updateFooter');
   ############################ settings ##########################################
  Route::get('settings', 'SettingsController@settings')->name('settings');
   Route::post('update-settings','SettingsController@update_settings')->name('updateSettings');


   ############# HomeSlider #######################################
        // list
        Route::get('home-slider', 'HomeSliderController@index')->name(
            'homeSlider'
        );
        // create new slide
        Route::get('/create-home-slider', 'HomeSliderController@create')->name(
            'createHomeSlider'
        );
        // store new slide
        Route::post('/add-home-slider', 'HomeSliderController@store')->name(
            'storeHomeSlider'
        );
        // Edit slide
        Route::get('/edit-home-slider-{id}', 'HomeSliderController@edit')->name(
            'editHomeSlider'
        );
        // Update slide
        Route::patch(
            '/update-home-slider-{id}',
            'HomeSliderController@update'
        )->name('updateHomeSlider');
        // delete slide

        Route::post('/delete-home-slider/{id}',
            'HomeSliderController@destroy'
        )->name('deleteHomeSlider');

        ############# HomeSlider #######################################

        ############# Section Client #######################################
        // list Client
        Route::get('clients', 'ClientController@index')->name('clients');

        // create Client section
        Route::get('create-Client', 'ClientController@create')->name(
            'createClient'
        );

        // store Client sectiom
        Route::post('add-Client', 'ClientController@store')->name(
            'storeClient'
        );

        // edit
        Route::get('edit-Client-{id}', 'ClientController@edit')->name(
            'editClient'
        );

        // update
        Route::post('update-Client-{id}', 'ClientController@update')->name(
            'updateClient'
        );

        //delete
        Route::post('/delete-Client-{id}', 'ClientController@delete')->name(
            'deleteClient'
        );

        ############# Section Client #######################################


        ############# Portfolio Image #######################################
        // list
        Route::get('portfolio-image', 'PortfolioController@index_image')->name(
            'PortfolioImage'
        );
        // create
        Route::get(
            'create-portfolio-image',
            'PortfolioController@create_image'
        )->name('createPortfolioImage');

        // store
        Route::post(
            'store-portfolio-image',
            'PortfolioController@store_image'
        )->name('storePortfolioImage');
        // edit

        Route::get('portfolio-image-{id}', 'PortfolioController@edit_image')->name(
            'editImage'
        );

        // update
        Route::post('/{id}', 'PortfolioController@update_image')->name(
            'updatePortfolioImage'
        );
             Route::post('/delete/{id}', 'PortfolioController@delete_image')->name(
            'deletePortfolioImage'
        );

        ############# Portfolio Image #######################################

      

        ############# Services images #######################################
        Route::get('/service-images', 'ServicerCardController@index')->name(
            'servicesImages'
        );
        // // create
        Route::get('/create','ServicerCardController@create')->name('createrviceImage');
        // // store
        Route::post(
            '/store',
            'ServicerCardController@store'
        )->name('storeServiceImage');
        // // edit
        Route::get(
            'edit/{id}',
            'ServicerCardController@edit'
        )->name('editServiceImage');
        // // update
        Route::post(
            'update-services-image-{id}',
            'ServicerCardController@update'
        )->name('updateServiceImage');

        ############# Services images #######################################
    }
);

Auth::routes();

// Auth::routes(['register' => false]);

############# Frontend #######################################

Route::get('/', 'PagesController@home')->name('home_path');
Route::post('get-in-touch','PagesController@getContactForm')->name('contactStore');
############# Frontend #######################################
