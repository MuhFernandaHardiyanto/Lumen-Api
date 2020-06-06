<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;

class CobaKontroler extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//__construct() selalu di exsekusi pertama kali app berjalan
    public function __construct()
    {
        // $this->middleware('age');

        //menentukan middleware pada url tertentu
        // $this->middleware('age', ['only' => ['getUser', 'getAlias']]);

        //menentukan middleware pada semua url kecuali di dalam => []
        // $this->middleware('age', ['except' => ['getUser', 'generateKey']]);
    }
//======================================================
    public function generateKey()
    {
        return str_random(32);
    }
//======================================================
    public function fooExample()
    {
        return 'Example Controller From POST request';
    }
//======================================================   
    public function getUser($id)
    {
        return 'User Id = ' . $id;
    }
//======================================================
    public function getPost($cat1, $cat2)
    {
        return 'Category 1 = ' . $cat1 . ' Category 2 = ' . $cat2;
    }
//======================================================
    public function getAlias()
    {
        // return 'Alias Action = ' . route('alias.action');
        echo '<a href= "' . route ('alias.action') . '">Alias Action</a>';
    }

    public function getAliasAction()
    {
        return 'Alias = ' . route('profile');
    }

//======================================================
//jika menggunakan request jangan lupa import "\Illuminate\Http\Request"

    public function getFoo(Request $request)
    {
        // if ($request->is('foo/bar')){
        //     return 'Success';
        // } else {
        //     return 'Fail';
        // }
        // return $request -> path();
        return $request -> method();
    }
}
