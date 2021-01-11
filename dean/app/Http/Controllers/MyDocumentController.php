<?php

namespace App\Http\Controllers;

use App\Models\MyDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyDocumentController extends Controller
{

    public static function annex_1()
    {
        $data = array(
            'last_name' => 'Ғапбаров',
            'first_name' => 'Нұрамағанбет',
            'patronymic' => 'Сейтқалиұлы',
            'BDay' => '09.09.1999',
            'curs' => 1,
            'prof' => 'CSSE (ВТиПО)',
            'sroc' => 2,
            'period' => '14.09.2020 - 06.06.2022',
            'forma' => 'очного'
        );
//        DB::table('my_documents')->insert(
//            ['ID' => random_int(2000, 4000), 'number' => '25.12.2020-001-92574'/*.random_int(2000, 4000)*/ , 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка по месту требования', 'komu_id' => 0, 'text' => '', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//        );
        return view('pages.annex_1')->with($data);
    }



    public static function annex_5()
    {
        $data = array(
            'last_name' => 'Ғапбаров',
            'first_name' => 'Нұрамағанбет',
            'patronymic' => 'Сейтқалиұлы',
            'BDay' => '09.09.1999',
            'curs' => 1,
            'prof' => 'CSSE (ВТиПО)',
            'sroc' => 2,
            'period' => '14.09.2020 - 06.06.2022',
            'forma' => 'очного'
        );
//        DB::table('my_documents')->insert(
//            ['ID' => random_int(4001, 6000), 'number' => '25.12.2020-001-74859', 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка для военкомата', 'komu_id' => 0, 'text' => '', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//        );
        return view('pages.annex_5')->with($data);
    }

    public static function annex_10()
    {
        $data = array(
            'last_name' => 'Ғапбаров',
            'first_name' => 'Нұрамағанбет',
            'patronymic' => 'Сейтқалиұлы',
            'BDay' => '09.09.1999',
            'curs' => 1,
            'prof' => 'CSSE (ВТиПО)',
            'sroc' => 2,
            'period' => '14.09.2020 - 06.06.2022',
            'forma' => 'очного'
        );
//        DB::table('my_documents')->insert(
//            ['ID' => random_int(6001, 8000), 'number' => '25.12.2020-001-74742', 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка гос органом', 'komu_id' => 0, 'text' => '', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//        );
        return view('pages.annex_10')->with($data);
    }

    public function download1PDF()
    {

        $first_name = 'Nurmaganbet';
        $last_name = 'Gapbarov';
        $type = 'Справка по месту требования';
        $pdf = app('dompdf.wrapper');
        //$pdf->loadView(PDFController :: annex_1());
        $pdf->loadView('pages.annex_1');
        return $pdf->download($first_name . ' ' . $last_name . ' ' . $type . '.pdf');
    }

    public function download5PDF()
    {

        $first_name = 'Nurmaganbet';
        $last_name = 'Gapbarov';
        $type = 'Справка для военкомата';
        $pdf = app('dompdf.wrapper');
        //$pdf->loadView(PDFController :: annex_1());
        $pdf->loadView('pages.annex_5');
        return $pdf->download($first_name . ' ' . $last_name . ' ' . $type . '.pdf');
    }

    public function download10PDF()
    {

        $first_name = 'Nurmaganbet';
        $last_name = 'Gapbarov';
        $type = 'Справка гос органом';
        $pdf = app('dompdf.wrapper');
        //$pdf->loadView(PDFController :: annex_1());
        $pdf->loadView('pages.annex_10');
        return $pdf->download($first_name . ' ' . $last_name . ' ' . $type . '.pdf');
    }

//    public function index(){
//        $pdf = PDF::loadView('welcome');
//        return $pdf->download('invoice.pdf');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     * @throws \Exception
     */
    public function annexCreate(Request $request)
    {
        //
        //$full_name = $request->input('annexAuthor');
        /*
        DB::table('my_documents')->insert(
            ['ID' => 1, 'number' => '23.12.2020-001-62991', 'author'=>'Паленшеев Түгенше', 'komu_blya'=>'dean', 'annex_type'=>'Справка гос органом', 'komu_id'=>1, 'text'=>'asdfbn']
        );
        */
        DB::table('my_documents')->insert(
            ['ID' => random_int(6, 999), 'number' => '25.12.2020-001-12895', 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 24748, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка по месту требования', 'komu_id' => 0, 'text' => '', 'status' => 'в рассмотрении', 'active' => null]
        );
        /*
        DB::table('my_documents')->insert(
            ['ID' => 2, 'number' => '23.12.2020-001-45841', 'author'=>'Есмухамедова Дина Ерлановна', 'komu_blya'=>'Иммануил Кант Калининград', 'annex_type'=>'заявления', 'komu_id'=>1, 'text'=>'Действуй тому максимуму который ты хотел чтобы твои законы стали универсальными']
        );
        */


        /*
        $id = DB::table('users')->insertGetId(
            ['email' => 'john@example.com', 'votes' => 0]
        );
        */

        //$tamGdeNasNet = DB::select('INSERT INTO Product (type, model, maker) VALUES (" ", 1157, " ")');

        //return 'successfully!';
        return redirect(url('/student', '', ''));
    }

    public function zayavCreate(Request $request)
    {
        //
        //$full_name = $request->input('annexAuthor');
        /*
        DB::table('my_documents')->insert(
            ['ID' => 1, 'number' => '23.12.2020-001-62991', 'author'=>'Паленшеев Түгенше', 'komu_blya'=>'dean', 'annex_type'=>'Справка гос органом', 'komu_id'=>1, 'text'=>'asdfbn']
        );

        DB::table('my_documents')->insert(
            ['ID' => 4, 'number' => '25.12.2020-001-12895', 'author'=>'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'komu_blya'=>'dean', 'annex_type'=>'Справка по месту требования', 'komu_id'=>1, 'text'=>'шшш']
        );
        */

        /*
        DB::table('my_documents')->insert(
            ['ID' => 5, 'number' => '23.12.2020-001-00907', 'author'=>'Ғапбаров Нұрмағанбет сейтқалиұлы', 'komu_blya'=>'Иммануил Кант Калининград', 'annex_type'=>'заявления', 'komu_id'=>1, 'text'=>'Категорический императив']
        );

        */
        $fios = DB::table('my_students')->where('parol', '=', '5423')->get(['last_name', 'first_name', 'patronymic']);

        //['ID' => 4, 'number' => '25.12.2020-001-12895', 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 24748, 'komu_blya' => 'dean', 'annex_type' => 'Справка по месту требования', 'komu_id' => 0, 'text' => '', 'status' => 'в рассмотрении', 'active' => null]
        try {
            DB::table('my_documents')->insert(
                ['ID' => random_int(999, 2000), 'number' => '23.12.2020-001-00907', 'author' => 'Ғапбаров Нұрмағанбет Cейтқалиұлы', 'author_id' => 24748, 'komu_blya' => 'Иммануил Кант Калининград', 'annex_type' => 'заявления', 'komu_id' => 1,
                    'text' => $request->text_zayav, 'status' => 'в рассмотрении', 'active' => null]
            );
        } catch (\Exception $e) {
            return redirect(url('/student', '', ''));
        }
        /*
        $id = DB::table('users')->insertGetId(
            ['email' => 'john@example.com', 'votes' => 0]
        );
        */

        //$tamGdeNasNet = DB::select('INSERT INTO Product (type, model, maker) VALUES (" ", 1157, " ")');

        foreach ($fios as $fio){
            $last_name = $fio->last_name;
            $first_name = $fio->first_name;
            $patronymic = $fio->patronymic;
            break;
        }
        /*
                $full_name = array(
                    'FIO' => [$last_name, $first_name, $patronymic]
                );
        */
        $full_name = array(
            'last_name' => $last_name,
            'first_name' => $first_name,
            'patronymic' => $patronymic
        );
        /*
                return view('pages.student')->with('<div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>');
        */
        $office = array(
            'office' => 'Иммануил Кант Калининград',
            'office1' => 'Георги Гегель Штутгард',
            'office2' => 'Людвиг Фейербах Ландсухт'
        );
        /*
                return view('pages.student', ['<div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>',"FIO"=>$full_name, "offices"=>$office]);
        */

        return redirect(url('/student', '', ''));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MyDocument $myDocument
     * @return \Illuminate\Http\Response
     */
    public function show(MyDocument $myDocument)
    {
        //
    }

    public function check(Request $request){

        $code = $request->input('numCode');

        $data = array(
            'last_name' => 'Ғапбаров',
            'first_name' => 'Нұрамағанбет',
            'patronymic' => 'Сейтқалиұлы',
            'BDay' => '09.09.1999',
            'curs' => 1,
            'prof' => 'CSSE (ВТиПО)',
            'sroc' => 2,
            'period' => '14.09.2020 - 06.06.2022',
            'forma' => 'очного'
        );

        switch ($code) {
            case '25.12.2020-001-62991':
                //return view('pages.annex_1')->with($data);
                break;
            case '25.12.2020-001-74859':
                //return view('pages.annex_5')->with($data);
                break;
            case '25.12.2020-001-74742':
                //return view('pages.annex_10')->with($data);
                break;
            default:
                //return redirect(url('/home'));
        }
        $data = DB::table('my_documents')->where('ID', '=', $request->numCode)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);

        foreach ($data as $dat){
            if(count($dat)>0){
                switch ($dat->annex_type) {
//                    case 'Справка по месту требования':
//                        return view('pages.annex_1')->with($data);
                    case 'Справка для военкомата':
                        return view('pages.annex_5')->with($data);
                    case 'Справка гос органом':
                        return view('pages.annex_10')->with($data);
                    default:
                        return view('pages.annex_1')->with($data);
                }
            } else{
                return view('pages.home');
            }
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MyDocument $myDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(MyDocument $myDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MyDocument $myDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyDocument $myDocument)
    {
        //
    }

    public static function annex(Request $request)
    {
        $last_name = 'Ахметбеков';
        $first_name = 'Ардакелди';
        $patronymic = 'Арыстанович';

        /*
                $last_name = DB::selectOne('SELECT last_name FROM my_deans WHERE login="dean@iitu.kz"');
                $first_name = DB::selectOne('SELECT first_name FROM my_deans WHERE login="dean@iitu.kz"');
                $patronymic = DB::selectOne('SELECT patronymic FROM my_deans WHERE login="dean@iitu.kz"');
        */
//        $data = array(
//            'FIO' => [$last_name, $first_name, $patronymic],
//            'fra'=>[],
//            'frz'=>['Ғапбаров Нұрмағанбет Сейтқалиұлы'],
//            'annex'=>[],
//            'zayav' => ['Заевшик: Ғапбаов Нұрмағанбет Сейтқалиұлы',
//                'Кому: Иммануил Кант Калилинград',
//                'Тест: Категорический императив']
//        );

        $full_name = array($last_name, $first_name, $patronymic);

        $datar = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);



        try {
//            DB::table('my_documents')->insert(
//                ['ID' => random_int(2000, 4000), 'number' => '25.12.2020-001-' . random_int(10000, 99999), 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка по месту требования', 'komu_id' => 0, 'text' => '', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//            );
//            $offer = DB::update(
//                'update my_documents set status = "ответ күт"  where annex_type = ?',
//                ['заявления']
            $affected = DB::table('my_documents')->where('author_id', '=', '24748')->where('annex_type','!=','заявления')->update(['active' => 1, 'status'=>'Ответ деканата : '.$request->text_zayavDean]);
        } catch (\Exception $e) {
            return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$datar)]);
        }
//        return view('pages.dean')->with($data);

//        $last_name = 'Ахметбеков';
//        $first_name = 'Ардакелди';
//        $patronymic = 'Арыстанович';



        $type = DB::table('my_documents')->where('author', '=', "Ғапбаров Нұрмағанбет Сейтқалиұлы")
            ->where('komu_blya','=', 'Деканат')/*->where('active', '=', null)*/->get('annex_type');

        $data = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);


        $info = DB::table('my_students')->where('ID', '=', 24748)->get(['last_name', 'first_name', 'patronymic', 'prof', 'curs', 'forma', 'sroc', 'bday']);


        return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$data), "info"=>array_reverse((array)$info), "types"=>array_reverse((array)$type)]);


        //return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$data)]);
        //return redirect()->action([MyDeanController::class, 'index']);

        //return redirect(url('/dean', '$data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MyDocument $myDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyDocument $myDocument)
    {
        //
    }

    public static function zayavDean()
    {
        $last_name = 'Ахметбеков';
        $first_name = 'Ардакелди';
        $patronymic = 'Арыстанович';

        /*
                $last_name = DB::selectOne('SELECT last_name FROM my_deans WHERE login="dean@iitu.kz"');
                $first_name = DB::selectOne('SELECT first_name FROM my_deans WHERE login="dean@iitu.kz"');
                $patronymic = DB::selectOne('SELECT patronymic FROM my_deans WHERE login="dean@iitu.kz"');
        */
//        $data = array(
//            'FIO' => [$last_name, $first_name, $patronymic],
//            'fra'=>[],
//            'frz'=>[],
//            'annex'=>[],
//            'zayav' => []
//        );
//
//        //**************************************************************************************************************
//
//
//
//        $dat = array(
//            'FIO' => [$last_name, $first_name, $patronymic],
//            'array1'=>[
//                'array11'=>[
//                    '11'=>'22',
//                    '09'=>'444'
//                ],
//                'array22'=>[
//                    'array33'=>[
//                        'ice'=>'cream',
//                        '44'=>'741'
//                    ],
//                    'red'=>'bull'
//                ]
//            ]
//        );



        //**************************************************************************************************************






        $full_name = array($last_name, $first_name, $patronymic);

        $datar = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);

//        try {
//            DB::table('my_documents')->insert(
//                ['ID' => random_int(2000, 4000), 'number' => '25.12.2020-001-' . random_int(10000, 99999), 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Иммануил Кант Калининград', 'annex_type' => 'заявления', 'komu_id' => 1, 'text' => 'Категорический императив', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//            );
//        } catch (\Exception $e) {
//            return view('pages.dean')->with($data);
//        }
//        $offer = DB::update(
//            'update my_documents set status = "ответ күт"  where annex_type = ?',
//            ['заявления']
//        );
        try {
//            DB::table('my_documents')->insert(
//                ['ID' => random_int(2000, 4000), 'number' => '25.12.2020-001-' . random_int(10000, 99999), 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка по месту требования', 'komu_id' => 0, 'text' => '', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//            );
//            $offer = DB::update(
//                'update my_documents set status = "ответ күт"  where annex_type = ?',
//                ['заявления']
            $affected = DB::table('my_documents')->where('author_id', '=', '24748')->where('annex_type','=','заявления')->update(['active' => 2, 'status'=>'отправлено!']);
        } catch (\Exception $e) {
            return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$datar)]);
        }
//        return view('pages.dean')->with($data);
        $data = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);

//        $last_name = 'Ахметбеков';
//        $first_name = 'Ардакелди';
//        $patronymic = 'Арыстанович';


        $info = DB::table('my_students')->where('ID', '=', 24748)->get(['last_name', 'first_name', 'patronymic', 'prof', 'curs', 'forma', 'sroc', 'bday']);

        $type = DB::table('my_documents')->where('author', '=', "Ғапбаров Нұрмағанбет Сейтқалиұлы")
            ->where('komu_blya','=', 'Деканат')->where('active', '=', null)->get('annex_type');
        //return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$data)]);


        return view('pages.dean', ["FIO" => $full_name,  "data" => array_reverse((array)$data), "info"=>array_reverse((array)$info), "types"=>array_reverse((array)$type)]);




        //return view('pages.dean')->with($data);

        //return redirect()->action([MyDeanController::class, 'index']);

        //return redirect(url('/dean', '$data'));
    }

    public static function zayavOffice(Request $request)
    {
        $last_name = 'Иммануил';
        $first_name = 'Кант';
        $patronymic = 'Калининград';

        /*
                $last_name = DB::selectOne('SELECT last_name FROM my_deans WHERE login="dean@iitu.kz"');
                $first_name = DB::selectOne('SELECT first_name FROM my_deans WHERE login="dean@iitu.kz"');
                $patronymic = DB::selectOne('SELECT patronymic FROM my_deans WHERE login="dean@iitu.kz"');
        */
        $data = array(
            'FIO' => [$last_name, $first_name, $patronymic],
            'fra'=>[],
            'frz'=>[],
            'annex'=>[],
            'zayav' => []
        );
        /*
        try {
            DB::table('my_documents')->insert(
                ['ID' => random_int(2000, 4000), 'number' => '25.12.2020-001-' . random_int(10000, 99999), 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Иммануил Кант Калининград', 'annex_type' => 'заявления', 'komu_id' => 1, 'text' => 'Категорический императив', 'status' => 'Получил(а) по заслугам', 'active' => 1]
            );
        } catch (\Exception $e) {
            return view('pages.office')->with($data);
        }
        */
/*
        $offer = DB::update(
            'update my_documents set active = 1  where annex_type = ?',
            ['заявления']
        );

        return view('pages.office')->with($data);
*/
        $full_name = array($last_name, $first_name, $patronymic);



        try {
            $affected = DB::table('my_documents')->where('author_id', '=', '24748')->where('annex_type','=','заявления')->update(['active' => 1, 'status'=>$request->text_zayavAnswer]);
        } catch (\Exception $e) {
            return view('pages.office', ["FIO" => $full_name,  "data" => array_reverse((array)$data)]);
        }

        $data = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);


        return view('pages.office', ["FIO" => $full_name,  "data" => array_reverse((array)$data)]);

        //return redirect()->action([MyDeanController::class, 'index']);

        //return redirect(url('/dean', '$data'));
    }

}
