<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});


Auth::routes(['register' => false]);

Route::get('/refreshcaptcha','Auth\loginController@refreshcaptcha');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {


    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');


    // Contact Companies
    Route::delete('contact-companies/destroy', 'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');
    route::get('companie-history','ContactCompanyController@history')->name('companie-history');
    //route::get('companie-liste','ContactCompanyController@liste')->name('companie-liste');
    route::delete('contact-companies/forcedestroy/{id}','ContactCompanyController@forcedestroy')->name('contact-companies.ForceDestroy');
    route::get('contact-companies/restore/{id}','ContactCompanyController@restore')->name('contact-companies.restore');
    Route::resource('contact-companies', 'ContactCompanyController');

    // Contact Contacts
    Route::delete('contact-contacts/destroy', 'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');
    Route::resource('contact-contacts', 'ContactContactsController');

     //Liste Companies
    Route::delete('companie-liste/destroy', 'ListeCompanyController@massDestroy')->name('companie-liste.massDestroy');
    Route::get('companie-liste/{companie_liste}/liste-contact', 'ListeCompanyController@contactListe')->name('liste-contact');
    Route::resource('companie-liste', 'ListeCompanyController');


    //sms_companies
    Route::delete('sms-companie/destroy', 'SmsCompanyController@massDestroy')->name('sms-companie.massDestroy');
    Route::resource('sms-companie', 'SmsCompanyController');

    //email_companies
    Route::delete('email-companie/destroy', 'EmailCompanyController@massDestroy')->name('email-companie.massDestroy');
    Route::resource('email-companie','EmailCompanyController');

    //event
    Route::delete('event/destroy', 'EventController@massDestroy')->name('event.massDestroy');
    Route::resource('event','EventController');

});


//test
Route::get('/test', 'TestController@index');
