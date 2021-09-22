<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
//route::get('/Admin',function (){
//    return view('admin.dashboard');
//});
define('PAGINATION_COUNT',10);
Route::group(['namespace' => 'admin','prefix' => 'admin','middleware'=>'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('delete/{id}','DashboardController@destroy') -> name('admin.dashboard.delete');
    ######################### Begin Languages Route ########################

        Route::group(['prefix' => 'languages'], function () {
        Route::get('/','LanguagesController@index') -> name('admin.languages');
        Route::get('create','LanguagesController@create') -> name('admin.languages.create');

        Route::post('store','LanguagesController@store') -> name('admin.languages.store');
        Route::get('edit/{id}','LanguagesController@edit') -> name('admin.languages.edit');
        Route::post('update/{id}','LanguagesController@update') -> name('admin.languages.update');

        Route::get('delete/{id}','LanguagesController@destroy') -> name('admin.languages.delete');
        Route::get('changeStatus/{id}','LanguagesController@changeStatus') -> name('admin.languages.status');



    });
    ######################### End Languages Route ########################

    ######################### Begin Languages Route ########################

    Route::group(['prefix' => 'Sliders'], function () {
        Route::get('/','SliderController@index') -> name('admin.Sliders');
        Route::get('create','SliderController@create') -> name('admin.Sliders.create');

        Route::post('store','SliderController@store') -> name('admin.Sliders.store');
        Route::get('edit/{id}','SliderController@edit') -> name('admin.Sliders.edit');
        Route::post('update/{id}','SliderController@update') -> name('admin.Sliders.update');

        Route::get('delete/{id}','SliderController@destroy') -> name('admin.Sliders.delete');
        Route::get('changeStatus/{id}','SliderController@changeStatus') -> name('admin.Sliders.status');


    });
    ######################### End Languages Route ########################


    ######################### Begin currency  ########################

    Route::group(['prefix' => 'currency'], function () {
        Route::get('/','CurrencyController@index') -> name('admin.currency');
        Route::get('create','CurrencyController@create') -> name('admin.currency.create');
        Route::post('store','CurrencyController@store') -> name('admin.currency.store');
        Route::get('edit/{id}','CurrencyController@edit') -> name('admin.currency.edit');
        Route::post('update/{id}','CurrencyController@update') -> name('admin.currency.update');
        Route::get('delete/{id}','CurrencyController@destroy') -> name('admin.currency.delete');
        Route::get('changeStatus/{id}','CurrencyController@changeStatus') -> name('admin.currency.status');

    });

    ######################### End currency########################


    ######################### Begin SERVICE  Route ########################
    Route::group(['prefix' => 'services'], function () {
        Route::get('/','ServicesController@index') -> name('admin.mainservice');
        Route::get('create','ServicesController@create') -> name('admin.mainservice.create');

        Route::post('store','ServicesController@store') -> name('admin.mainservice.store');
        Route::get('edit/{id}','ServicesController@edit') -> name('admin.mainservice.edit');
        Route::post('update/{id}','ServicesController@update') -> name('admin.mainservice.update');

        Route::get('delete/{id}','ServicesController@destroy') -> name('admin.mainservice.delete');
        Route::get('changeStatus/{id}','ServicesController@changeStatus') -> name('admin.mainservice.status');


    });



    ######################### End SERVICE Route ########################


    ######################### Begin  locations  Route ########################

    Route::group(['prefix' => 'branches'], function () {
        Route::get('/','BranchesController@index') -> name('admin.branches');
        Route::get('create','BranchesController@create') -> name('admin.branches.create');

        Route::post('store','BranchesController@store') -> name('admin.branches.store');
        Route::get('edit/{id}','BranchesController@edit') -> name('admin.branches.edit');
        Route::post('update/{id}','BranchesController@update') -> name('admin.branches.update');

        Route::get('delete/{id}','BranchesController@destroy') -> name('admin.branches.delete');



    });


    ######################### End locations Route ########################
    ######################### Begin  locations  Route ########################

    Route::group(['prefix' => 'Services'], function () {
        Route::get('/','ServicesController@index') -> name('admin.Services');
        Route::get('create','ServicesController@create') -> name('admin.Services.create');

        Route::post('store','ServicesController@store') -> name('admin.Services.store');
        Route::get('edit/{id}','ServicesController@edit') -> name('admin.Services.edit');
        Route::post('update/{id}','ServicesController@update') -> name('admin.Services.update');

        Route::get('delete/{id}','ServicesController@destroy') -> name('admin.Services.delete');



    });


    ######################### End locations Route ########################

    ######################### Begin  partners  Route ########################

    Route::group(['prefix' => 'partners'], function () {
        Route::get('/','PartnersController@index') -> name('admin.mainparnters');
        Route::get('create','PartnersController@create') -> name('admin.mainparnters.create');

        Route::post('store','PartnersController@store') -> name('admin.mainparnters.store');
        Route::get('edit/{id}','PartnersController@edit') -> name('admin.mainparnters.edit');
        Route::post('update/{id}','PartnersController@update') -> name('admin.mainparnters.update');

        Route::get('delete/{id}','PartnersController@destroy') -> name('admin.mainparnters.delete');
        Route::get('changeStatus/{id}','PartnersController@changeStatus') -> name('admin.mainparnters.status');


    });
    ######################### End partners Route ########################


    ######################### Begin  partners  Route ########################

    Route::group(['prefix' => 'about'], function () {
        Route::get('/','AboutsController@index') -> name('admin.about');
        Route::get('create','AboutsController@create') -> name('admin.about.create');

        Route::post('store','AboutsController@store') -> name('admin.about.store');
        Route::get('edit/{id}','AboutsController@edit') -> name('admin.about.edit');
        Route::post('update/{id}','AboutsController@update') -> name('admin.about.update');

        Route::get('delete/{id}','AboutsController@destroy') -> name('admin.about.delete');
        Route::get('changeStatus/{id}','AboutsController@changeStatus') -> name('admin.about.status');


    });
    ######################### End partners Route ########################

    ######################### Begin Main ServicePoint Routes ########################


    Route::group(['prefix' => 'Points'], function () {
        Route::get('/','PointsController@index') -> name('admin.ServicePoint');
        Route::get('create','PointsController@create') -> name('admin.ServicePoint.create');

        Route::post('store','PointsController@store') -> name('admin.ServicePoint.store');
        Route::get('edit/{id}','PointsController@edit') -> name('admin.ServicePoint.edit');
        Route::post('update/{id}','PointsController@update') -> name('admin.ServicePoint.update');
        Route::get('getstates/{id}','PointsController@getStates') ->name('admin.ServicePoint.getstates');

        Route::get('delete/{id}','PointsController@destroy') -> name('admin.ServicePoint.delete');
        Route::get('changeStatus/{id}','PointsController@changeStatus') -> name('admin.ServicePoint.status');


    });


    ######################### End ServicePoint Route ########################


    ######################### Begin NEWS Routes ########################



        Route::group(['prefix' => 'News'], function () {
        Route::get('/','ComeNewsController@index') -> name('admin.comenew');
        Route::get('create','ComeNewsController@create') -> name('admin.comenew.create');

        Route::post('store','ComeNewsController@store') -> name('admin.comenew.store');
        Route::get('edit/{id}','ComeNewsController@edit') -> name('admin.comenew.edit');
        Route::post('update/{id}','ComeNewsController@update') -> name('admin.comenew.update');
        Route::get('delete/{id}','ComeNewsController@destroy') -> name('admin.comenew.delete');




    });

    ######################### End opinion Route ########################

    Route::group(['prefix' => 'Opnoin'], function () {
        Route::get('/','opinionController@index') -> name('admin.opinion');
        Route::get('create','opinionController@create') -> name('admin.opinion.create');
        Route::post('store','opinionController@store') -> name('admin.opinion.store');
        Route::get('edit/{id}','opinionController@edit') -> name('admin.opinion.edit');
        Route::post('update/{id}','opinionController@update') -> name('admin.opinion.update');
        Route::get('delete/{id}','opinionController@destroy') -> name('admin.opinion.delete');
    });

    ######################### End opinion Route ########################

     ######################### End Customer Route ########################

    Route::group(['prefix' => 'Customer'], function () {
        Route::get('/','CustomerController@index') -> name('admin.Customer');
        Route::get('create','CustomerController@create') -> name('admin.Customer.create');
        Route::post('store','CustomerController@store') -> name('admin.Customer.store');
        Route::get('edit/{id}','CustomerController@edit') -> name('admin.Customer.edit');
        Route::post('update/{id}','CustomerController@update') -> name('admin.Customer.update');
        Route::get('delete/{id}','CustomerController@destroy') -> name('admin.Customer.delete');
    });

        ######################### End Customer Route ########################

    ######################### End Breackfast Route ########################

    Route::group(['prefix' => 'Breackfast'], function () {
        Route::get('/','BreackfastController@index') -> name('admin.Breackfast');
        Route::get('create','BreackfastController@create') -> name('admin.Breackfast.create');
        Route::post('store','BreackfastController@store') -> name('admin.Breackfast.store');
        Route::get('edit/{id}','BreackfastController@edit') -> name('admin.Breackfast.edit');
        Route::post('update/{id}','BreackfastController@update') -> name('admin.Breackfast.update');
        Route::get('delete/{id}','BreackfastController@destroy') -> name('admin.Breackfast.delete');
    });

        ######################### End Breackfast Route ########################


        ######################### End NEWS Route ########################

    Route::group(['prefix' => 'Dinner'], function () {
        Route::get('/','DinnerController@index') -> name('admin.Dinner');
        Route::get('create','DinnerController@create') -> name('admin.Dinner.create');
        Route::post('store','DinnerController@store') -> name('admin.Dinner.store');
        Route::get('edit/{id}','DinnerController@edit') -> name('admin.Dinner.edit');
        Route::post('update/{id}','DinnerController@update') -> name('admin.Dinner.update');
        Route::get('delete/{id}','DinnerController@destroy') -> name('admin.Dinner.delete');
    });

        ######################### End NEWS Route ########################
    Route::group(['prefix' => 'Lunches'], function () {
        Route::get('/','LuncheController@index') -> name('admin.Lunches');
        Route::get('create','LuncheController@create') -> name('admin.Lunches.create');
        Route::post('store','LuncheController@store') -> name('admin.Lunches.store');
        Route::get('edit/{id}','LuncheController@edit') -> name('admin.Lunches.edit');
        Route::post('update/{id}','LuncheController@update') -> name('admin.Lunches.update');
        Route::get('delete/{id}','LuncheController@destroy') -> name('admin.Lunches.delete');


    });


    ######################### End jobs Route ########################


    Route::group(['prefix' => 'Jobs'], function () {
        Route::get('/','JobsController@index') -> name('admin.Jobs');
        Route::get('create','JobsController@create') -> name('admin.Jobs.create');

        Route::post('store','JobsController@store') -> name('admin.Jobs.store');
        Route::get('edit/{id}','JobsController@edit') -> name('admin.Jobs.edit');
        Route::post('update/{id}','JobsController@update') -> name('admin.Jobs.update');
        Route::get('delete/{id}','JobsController@destroy') -> name('admin.Jobs.delete');
        Route::get('details/{id}','JobsController@details') -> name('admin.Jobs.details');
        Route::get('getDownload/{filename}','JobsController@getDownload') -> name('admin.Jobs.getDownload');

    });



    ######################### Begin jobs Routes ########################

    ######################### Begin Main Categoris Routes ########################
    Route::group(['prefix' => 'main_categories'], function () {
        Route::get('/','CategoriesController@index') -> name('admin.maincategories');
        Route::get('create','CategoriesController@create') -> name('admin.maincategories.create');
        Route::post('store','CategoriesController@store') -> name('admin.maincategories.store');
        Route::get('edit/{id}','CategoriesController@edit') -> name('admin.maincategories.edit');
        Route::post('update/{id}','CategoriesController@update') -> name('admin.maincategories.update');
        Route::get('delete/{id}','CategoriesController@destroy') -> name('admin.maincategories.delete');


    });

    ######################### End  Main Categoris Routes  ########################


    ######################### Begin jobs Routes ########################

    ######################### Begin Main Categoris Routes ########################
    Route::group(['prefix' => 'Items'], function () {
        Route::get('/','ItemsController@index') -> name('admin.items');
        Route::get('create','ItemsController@create') -> name('admin.items.create');
        Route::post('store','ItemsController@store') -> name('admin.items.store');
        Route::get('edit/{id}','ItemsController@edit') -> name('admin.items.edit');
        Route::post('update/{id}','ItemsController@update') -> name('admin.items.update');
        Route::get('delete/{id}','ItemsController@destroy') -> name('admin.items.delete');


    });

    ######################### End  Main Categoris Routes  ########################



    ######################### Begin Sub Categoris Routes ########################
    Route::group(['prefix' => 'sub_categories'], function () {
        Route::get('/','SubCategoriesController@index') -> name('admin.subcategories');
        Route::get('create','SubCategoriesController@create') -> name('admin.subcategories.create');
        Route::post('store','SubCategoriesController@store') -> name('admin.subcategories.store');
        Route::get('edit/{id}','SubCategoriesController@edit') -> name('admin.subcategories.edit');
        Route::post('update/{id}','SubCategoriesController@update') -> name('admin.subcategories.update');
        Route::get('delete/{id}','SubCategoriesController@destroy') -> name('admin.subcategories.delete');
        Route::get('changeStatus/{id}','SubCategoriesController@changeStatus') -> name('admin.subcategories.status');

    });
    ######################### End  Sub Categoris Routes  ########################




    ######################### Begin vendors Routes ########################
    Route::group(['prefix' => 'vendors'], function () {
        Route::get('/','VendorsController@index') -> name('admin.vendors');
        Route::get('create','VendorsController@create') -> name('admin.vendors.create');
        Route::post('store','VendorsController@store') -> name('admin.vendors.store');
        Route::get('edit/{id}','VendorsController@edit') -> name('admin.vendors.edit');
        Route::post('update/{id}','VendorsController@update') -> name('admin.vendors.update');
        Route::get('delete/{id}','VendorsController@destroy') -> name('admin.vendors.delete');
    });
    ######################### End  vendors Routes  ########################



});
Route::group(['namespace' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('admin/login', 'LoginController@getLogin')->name('get.admin.login') ;
    Route::post('admin/login', 'LoginController@login')->name('admin.login');

});

########################### test part routes #####################

Route::get('subcateory',function (){

    $mainCategory = \App\Models\MainCategory::find(31);

    return       $mainCategory -> subCategories;
});

Route::get('maincategory',function (){

    $subcategory = \App\Models\SubCategory::find(1);

    return $subcategory -> mainCategory;


});
