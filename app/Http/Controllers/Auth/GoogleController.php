<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Laravel\Socialite\Facades\Socialite;

use Exception;

use App\Models\User;

use Illuminate\Support\Facades\Auth;



class GoogleController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleGoogleCallback()

    {


        try {



     $user        =    Socialite::driver('google')->stateless()->user();




            $finduser = User::where('google_id', $user->id)->first();



            if($finduser){



                Auth::login($finduser);



                return redirect()->intended('/');



            }else{

                $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

                    'google_id'=> $user->id,

                    'password' => encrypt('123456dummy')

                ]);

                $newUser->assignRole('customer');


                Auth::login($newUser);



                return redirect()->intended('/');

            }



        } catch (Exception $e) {

            return $e;

            dd($e->getMessage());

        }

    }

}
