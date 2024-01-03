<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

    // fetch code from db
    $name="gk sir";

    $data = array(
        "KIENFU793H"=>array("name"=>"awseK","place"=>"hell","img"=>"pic2.png"),
        "DKJFI3593H"=>array("name"=>"KSI","place"=>"heaven","img"=>"pic2.png"),
        "DHD45HGFH3"=>array("name"=>"asfk","place"=>"hell","img"=>"pic2.png"),
        "DFGKJDFO4K"=>array("name"=>"hfh","place"=>"same as u","img"=>"pic2.png"),
    );
    return view('welcome',['userName'=>$name,'list'=>$data]);
});


