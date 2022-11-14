<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $arrItemName = [
            'Razer Deathstalker V2', 'Logitech GPro Superlight', 'Ducky One 2 Mini', 'HyperX Cloud II', 'Redragon K630', 'Steelseries Artics 3', 'Alienware 34 QD-OLED', 'NVIDIA Geforce RTX 3090', 'ROG Thor 1000W Platinum', 'PressPlay NOVA Ultralight Wireless'
        ];
        $arrItemPrice = [
            1500000, 2000000, 1800000, 1200000, 500000, 1800000, 25000000, 16000000, 6000000, 320000
        ];

        return view('index', compact('arrItemName', 'arrItemPrice'));
    }
}
