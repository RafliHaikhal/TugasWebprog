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

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    $arrItemName = [
        'Razer Deathstalker V2', 'Logitech GPro Superlight', 'Ducky One 2 Mini', 'HyperX Cloud II', 'Redragon K630', 'Steelseries Artics 3', 'Alienware 34 QD-OLED'
    ];
    $arrItemPrice = [
        1500000, 2000000, 1800000, 1200000, 500000, 1800000, 25000000, 
    ];
    return view('index')
    ->with('itemName', $arrItemName)
    ->with('itemPrice', $arrItemPrice);
});