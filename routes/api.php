<?php




Route::group(['as' => 'api.', 'namespace' => 'Api\Admin'], function () {

    Route::Resource('users','UserController');




});
