<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;

//use Cartalyst\Sentinel;

//use Validator;
//use Sentinel;
//use RedisSentinel;
//use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
//use Cartalyst\Sentinel\Checkpoints\NotActivatedException;


class AuthController extends Controller
{
    public function index()
    {
        $my_students = DB::select('SELECT * FROM my_students');

        return view('pages.auth', ["my_students" => $my_students]);
    }

    public function login()
    {
        /*
        if (Sentinel::check()) {
            return redirect(url('/home'));
        }
        return view('pages.auth');
        */
        /*
        $email = DB::select('SELECT * FROM my_students');
        $parol = DB::select('SELECT * FROM my_students');
*/
        $check = 'just GET';

        //return view('pages.auth', ["check" => $check]);
        //return redirect(url('/'));
        //return 'index';
        return view('pages.auth'/*, ["check" => $check]*/);
    }

    public function postLogin(Request $request)
    {
        //$array = explode(',', $string);
        //$check = explode(',', $request);
        //$val = $request->input('email');

        $email = $request->input('email');
        $password = $request->input('password');
        /*
                if($email == 'yesmukhamedov009@gmail.com'){
                    return view('pages.home');
                }else{
                    $val = '11';
                    return view('pages.auth', ["check" => $val]);
                }
        */

        switch ($email) {
            case 'student@iitu.kz':
                if ($password == '5423') {
                    return redirect(url('/student', '', ''));
                } else {
                    return redirect(url('/auth'));
                }
                break;
            case 'dean@iitu.kz':
                if ($password == '5423') {
                    return redirect(url('/dean'));
                } else {
                    return redirect(url('/auth'));
                }
                break;
            case 'office@iitu.kz':
                if ($password == '5423') {
                    return redirect(url('/office'));
                } else {
                    return redirect(url('/auth'));
                }
                break;
            default:
                return redirect(url('/auth'));
        }


        //return redirect(url('/auth'));


        /*
                //return 'INDEX';
                //dd($request->all());
                Sentinel::disableCheckpoints();
                $errorMsgs = [
                    'email.required' => 'email netu',
                    'email.email' => 'kajes email incorrect',
                    'password.required' => 'password obezyatelno'
                ];

                $validator->make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required'
                ], $errorMsgs);

                if ($validator->fails()) {
                    $returnData = array(
                        'status' => 'error',
                        'messages' => 'ne to popytca',
                        'errors' => $validator->errors()->all()
                    );
                    return response()->json($returnData, 500);
                }

                if ($request->remember == 'on') {
                    try {
                        $user = Sentinel::authenticateAndRemember($request->all());
                    } catch (ThrottlingException $e) {
                        $delay = $e->getDelay();
                        $returnData = array(
                            'status' => 'error',
                            'messages' => 'ne to popytca',
                            'errors' => ["You are banned for $delay seconds."]
                        );
                        return response()->json($returnData, 500);
                    } catch (NotActivatedException $e) {
                        $returnData = array(
                            'status' => 'error',
                            'messages' => 'ne to popytca',
                            'errors' => ["Prover!"]
                        );
                        return response()->json($returnData, 500);
                    }
                } else {
                    try {
                        $user = Sentinel::authenticate($request->all());
                    } catch (ThrottlingException $e) {
                        $delay = $e->getDelay();
                        $returnData = array(
                            'status' => 'error',
                            'messages' => 'ne to popytca',
                            'errors' => ["You are banned for $delay seconds."]
                        );
                        return response()->json($returnData, 500);
                    } catch (NotActivatedException $e) {
                        $returnData = array(
                            'status' => 'error',
                            'messages' => 'ne to popytca',
                            'errors' => ["Prover!"]
                        );
                        return response()->json($returnData, 500);
                    }
                }
                if (Sentinel::check()) {
                    return redirect(url('pages.home'));
                } else {
                    $returnData = array(
                        'status' => 'error',
                        'messages' => 'ne to popytca',
                        'errors' => ["email or password incorrect"]
                    );
                    return response()->json($returnData, 500);
                }
            }
            public function logout()
            {
                Sentinel::logout();
                return redirect(url('/auth'));
        */
    }

}
