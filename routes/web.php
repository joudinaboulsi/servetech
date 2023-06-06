<?php

############# Frontend #######################################

Route::get('/', 'PagesController@home')->name('home_path');
Route::post('get-in-touch','PagesController@getContactForm')->name('contactStore');
############# Frontend #######################################

Auth::routes();

// Auth::routes(['register' => false]);

Route::group(
    ['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'],
    function () {

        Route::get('', 'AdminController@dsashboard')->name('admin');
        ##################  Page Seo  #######################################
        
        //  list
          Route::get('/pages-seo', 'AdminController@index')->name('pages');
        // create
        Route::get('/create-seo', 'AdminController@create')->name('createPageSeo');
        // store
        Route::post('pages-seo/store', 'AdminController@store')->name('store_page');
        // edit
        Route::get('/edit-seo-{id}', 'AdminController@edit')->name('editPage');
        // update
        Route::post('pages-seo/{id}/update', 'AdminController@update')->name('update_page');
        
         ############# Page Seo  #######################################


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
      

        ############# HomeSlider #######################################

        ############# Section ABout #######################################
        // list about
        Route::get('about', 'AboutController@index')->name('about');
        // create about section
        Route::get('create-about', 'AboutController@create')->name(
            'createAbout'
        );
        // store about sectiom
        Route::post('add-about', 'AboutController@store')->name('storeAbout');
        // edit
        Route::get('edit-about-{id}', 'AboutController@edit')->name(
            'editAbout'
        );
        // update
        Route::patch('update-about-{id}', 'AboutController@update')->name(
            'updateAbout'
        );

        ############# Section ABout #######################################

        ############# Section Client #######################################
        // list Client
        Route::get('clients', 'ClientCOntroller@index')->name('clients');

        // create Client section
        Route::get('create-Client', 'ClientCOntroller@create')->name(
            'createClient'
        );

        // store Client sectiom
        Route::post('add-Client', 'ClientCOntroller@store')->name(
            'storeClient'
        );

        // edit
        Route::get('edit-Client-{id}', 'ClientCOntroller@edit')->name(
            'editClient'
        );

        // update
        Route::post('update-Client-{id}', 'ClientCOntroller@update')->name(
            'updateClient'
        );

        ############# Section Client #######################################

        ############# Section Contact #######################################

        // list Contact
        Route::get('contact', 'ContactController@index')->name('contact');

        // create Contact section
        Route::get('create-contact', 'ContactController@create')->name(
            'createContact'
        );

        // store Client sectiom
        Route::post('add-contact', 'ContactController@store')->name(
            'storeContact'
        );

        // edit
        Route::get('edit-contact-{id}', 'ContactController@edit')->name(
            'editContact'
        );

        // update
        Route::post('update-contact-{id}', 'ContactController@update')->name(
            'updateContact'
        );
        ############# Section Contact #######################################

        ############# Section footer #######################################

        // list
        Route::get('footer', 'FooterController@index')->name('footer');

        // create
        Route::get('create-footer', 'FooterController@create')->name(
            'createFooter'
        );

        // store
        Route::post('add-footer', 'FooterController@store')->name(
            'storeFooter'
        );

        // edit
        Route::get('edit-footer-{id}', 'FooterController@edit')->name(
            'editFooter'
        );

        // update
        Route::post('update-footer-{id}', 'FooterController@update')->name(
            'updateFooter'
        );
        #############  footer #######################################

        ############# Section One #######################################
        // list
        Route::get('sectione-one', 'SectionsController@index')->name(
            'SectionOne'
        );
        // create
        Route::get('create-section-one', 'SectionsController@create')->name(
            'createSectionOne'
        );
        // store
        Route::post('store-section-one', 'SectionsController@store')->name(
            'storeSectionOne'
        );
        // edit
        Route::get('edit-section-one-{id}', 'SectionsController@edit')->name(
            'editSectionOne'
        );
        // update
        Route::post(
            'update-section-one-{id}',
            'SectionsController@update'
        )->name('updateSectionOne');
        ############# Section One #######################################

        ############# Section Two #######################################
        // list
        Route::get('section-two', 'SectionsController@index_section_two')->name(
            'SectionTwo'
        );
        // create
        Route::get(
            'create-section-two',
            'SectionsController@create_section_two'
        )->name('createSectionTwo');
        // store
        Route::post(
            'store-section-two',
            'SectionsController@store_section_two'
        )->name('storeSectionTwo');
        // edit
        Route::get(
            'edit-section-two-{id}',
            'SectionsController@edit_section_two'
        )->name('editSectionTwo');
        // update
        Route::post(
            'update-section-two-{id}',
            'SectionsController@update_section_two'
        )->name('updateSectionTwo');
        ############# Section Two #######################################
        ############# Portfolio #######################################
        //  list
        Route::get('portfolio', 'PortfolioController@index')->name(
            'portfolioPage'
        );
        // create
        Route::get('create-portfolio', 'PortfolioController@create')->name(
            'createportfolioPage'
        );
        // store
        Route::post('store-portfolio', 'PortfolioController@store')->name(
            'storeportfolioPage'
        );
        // edit
        Route::get('edit-portfolio-{id}', 'PortfolioController@edit')->name(
            'editportfolioPage'
        );
        // update
        Route::post(
            'update-portfolio-{id}',
            'PortfolioController@update'
        )->name('updateportfolioPage');
        ############# Portfolio #######################################

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

        Route::get('/edit/{id}', 'PortfolioController@edit_image')->name(
            'editPortfolioImage'
        );

        // update
        Route::post('/', 'PortfolioController@update_image')->name(
            'updatePortfolioImage'
        );

        ############# Portfolio Image #######################################

        ############# Settings #######################################
        Route::get('settings', 'AdminController@settings')->name('settings');
        // create
        Route::get('create-settings', 'AdminController@create_settings')->name(
            'createSettings'
        );
        // store
        Route::post('store-settings', 'AdminController@store_settings')->name(
            'storeSettings'
        );
        // edit
        Route::get('edit-{id}', 'AdminController@edit_settings')->name(
            'editSettings'
        );
        // update
        Route::post(
            'update-settings-{id}',
            'AdminController@update_settings'
        )->name('updateSettings');
        ############# Settings #######################################

        ############# Services #######################################
        // list
        Route::get('services', 'ServiceController@index')->name('services');
        // create
        Route::get('create-service', 'ServiceController@create')->name(
            'createService'
        );
        // store
        Route::post('store-service', 'ServiceController@store')->name(
            'storeService'
        );
        // edit
        Route::get('edit{id}', 'ServiceController@edit')->name('editService');
        // update
        Route::post('update/{id}', 'ServiceController@update')->name(
            'updateService'
        );
        ############# Services #######################################

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
