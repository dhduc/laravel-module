<?php
$namespace = 'Unet\Module\Http\Controllers';

Route::group(
    ['module' => 'Module', 'namespace' => $namespace, 'middleware' => ['web']],
    function () {
        Route::resource('module', 'ModuleController');
    }
);

Route::get('/docs', function () {
    return view('Module::docs');
});