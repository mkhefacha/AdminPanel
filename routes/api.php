<?php




Route::group(['as' => 'api.', 'namespace' => 'Api\Admin' ,'middleware' => ['auth:api']], function () {

    Route::Resource('users','UserController');

});

