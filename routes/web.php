<?php

use App\Models\Skill;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $skills = Skill::all();
    return view('index', compact('skills'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skill', function () {
    return view('skill');
});


Route::post('/save_skill', function (Request $request) {
    $skill = new Skill();
    $skill->name = $request->name;
    $skill->percentage = $request->percentage;
    $skill->save();
    $skills = Skill::all();
    return view('index', compact('skills'));
});
