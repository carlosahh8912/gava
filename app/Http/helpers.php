<?php

use Illuminate\Support\Facades\Route;



function active_link(string $slug){
    if($slug == Route::currentRouteName()){
        return 'active';
    }else{
        return '';
    }
}