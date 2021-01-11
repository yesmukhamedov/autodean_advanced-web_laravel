<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyDeanController extends Controller
{
    public function index()
    {



        //арраедің ішіне аррей тастау керек қой

        /*
                $last_name = DB::selectOne('SELECT last_name FROM my_deans WHERE login="dean@iitu.kz"');
                $first_name = DB::selectOne('SELECT first_name FROM my_deans WHERE login="dean@iitu.kz"');
                $patronymic = DB::selectOne('SELECT patronymic FROM my_deans WHERE login="dean@iitu.kz"');
        */

        /*
        $info = array(
            'annex' => ['ФИО: Ғапбаров Нұрмағанбет Сейтқалиұлы',
                'Дата рождения: 03.04.1999',
                'курс: 1-курса',
                'специальность: CSSE - Вычислительная техника и программное обеспечение (ВТиПО)',
                'Срок обучения: 2 (два)',
                'Период обучения: с 14.09.2020г. по 30.06.2022г.',
                'Тип справки: Справка по месту требование'],
        );
        */

        $last_name = 'Ахметбеков';
        $first_name = 'Ардакелди';
        $patronymic = 'Арыстанович';

        $full_name = array($last_name, $first_name, $patronymic);

        $data = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text', 'active']);

        $info = DB::table('my_students')->where('ID', '=', 24748)->get(['last_name', 'first_name', 'patronymic', 'prof', 'curs', 'forma', 'sroc', 'bday']);

        $type = DB::table('my_documents')->where('author', '=', "Ғапбаров Нұрмағанбет Сейтқалиұлы")
            ->where('komu_blya','=', 'Деканат')->where('active', '=', null)->get('annex_type');


        return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$data), "info"=>array_reverse((array)$info), "types"=>array_reverse((array)$type)]);

        //return view('pages.dean')->with("data" => array_reverse((array)$data));
    }

    public function annexAuthor(Request $request)
    {
        return 'annexAuthor';
    }
}
