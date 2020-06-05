<?php

namespace App\Http\Middleware;

use Closure;

class Age
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //tempat melakukan kondisi
        /**Redirect adalah teknik yang digunakan untuk mengarahkan
        pengunjung domain Anda ke URL yang berbeda. Anda dapat
        meneruskan nama domain ke situs web apa pun yang tersedia
        secara online. Saat seseorang mengetik atau mengklik pada
        URL asli, mereka akan dibawa ke halaman atau situs web baru.
        */
        
        if ($request->age < 17 ){
            return redirect('/fail');
        }
        return $next($request);
    }
}
