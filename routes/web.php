<?php

use App\Models\comment_replies;
use App\Models\post_comment;
use App\Models\post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
