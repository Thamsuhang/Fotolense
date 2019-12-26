<?php

//=========Frontend=====//

Route::group(['namespace' => 'Frontend'], function() {

    Route::any('/','ApplicationController@index')-> name('index');
    Route::any('about','ApplicationController@about')-> name('about');
    Route::any('ourServices','ApplicationController@ourServices')->name('ourServices');
    Route::any('Contact','ApplicationController@Contact')->name('contact');

} );