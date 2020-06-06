<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
// use Illuminate\Http\Response;

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

//======================================================

    public function getUserProfile(Request $request)
    {
        //mengambil data name
        // return $request -> name;

        //======================================================
        //mengambil data name,username,password,email
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['password'] = $request->password;
        // $user['email'] = $request->email;

        // return $user;

        //======================================================
        //mengambil data semua inputan
        // return $request -> all();

        //======================================================
        //membuat nilai null
        // return $request->input('name','Ferdy Poliwangi');

        //======================================================
        //membuat kondisi inputan || di dalam kondisi => [] data yang ada akan sukses jika tidak akan gagal
        // FUNGSI Has dan Filled
        //======================================================

        // if ($request->has(['name','email'])){
        //     return 'Success';
        // } else {
        //     return 'Fail';
        // }

        // if ($request->filled(['name','email'])){
        //     return 'Success';
        // } else {
        //     return 'Fail';
        // }

        
        //======================================================
        //Hanya Menampilkan data yang ada di => []
        // return $request->only(['username', 'password']);

        //Menampilkan data yang tidak ada di => []
        return $request->except(['username', 'password']);
    }

    //======================================================


    public function getResponse()
    {
        //membuat respon JSON (tanpa header sudah jadi JSON)
        // $data['status'] = 'Success';
        // return (new Response ($data , 201));
                // ->header('Content-Type','apllication/json');

        //membuat respon helper
        // $data['status'] = 'Success';
        // return response ($data , 201)->header()->header()->header();
        return response()->json([
            'message' => 'fail! Not Found!',
            'status' => false,
        ], 404);
    }

}
