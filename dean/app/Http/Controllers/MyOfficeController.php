<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyOfficeController extends Controller
{
    public function index()
    {
        /*
        $last_name  = 'Иммануил';
        $first_name = 'Кант';
        $patronymic = 'Калининград';
*/
        $last_name  = "";// DB::selectOne('SELECT last_name FROM my_offices WHERE login="office@iitu.kz"');
        $first_name = "";//DB::selectOne('SELECT first_name FROM my_offices WHERE login="office@iitu.kz"');
        $patronymic = "";//DB::selectOne('SELECT patronymic FROM my_offices WHERE login="office@iitu.kz"');

        $fios  =  DB::table('my_offices')->where('login', '=', 'office@iitu.kz')->get(['last_name', 'first_name', 'patronymic']);

        foreach ($fios as $fio){
            $last_name = $fio->last_name;
            $first_name = $fio->first_name;
            $patronymic = $fio->patronymic;
            break;
        }

        $full_name = array(
            'FIO' => [$last_name, $first_name, $patronymic],
            'frz'=>['Ғапберов Нұрмағанбет Сейтқалиұлы'],
            'zayav'=>['Ғапбаров Нұрмағанбет Сейтқалиұлы', 'Категорический императив']
        );

        $full_name = array($last_name, $first_name, $patronymic);

        $data = DB::table('my_documents')->where('active', '=', 2)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);

        return view('pages.office', ["FIO" => $full_name,  "data" => array_reverse((array)$data)]);

        //return view('pages.office')->with($full_name);
    }
    public function home()
    {
        return view('pages.home');
    }
}
