<?php

namespace App\Http\Controllers;

class CobaKontroler extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function generateKey()
    {
        return str_random(32);
    }
    public function fooExample()
    {
        return 'Example Controller From POST request';
    }
    //
}