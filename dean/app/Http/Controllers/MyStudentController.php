<?php

namespace App\Http\Controllers;

use App\Models\MyStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $last_name = 'Gapbarov';
        $first_name = 'Nurmaganbet';
        $patronymic = 'Seitkaliuly';

        $fios = DB::table('my_students')->where('parol', '=', '5423')->get(['last_name', 'first_name', 'patronymic']);

        foreach ($fios as $fio) {
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
        $full_name = array(
            'FIO' => [$last_name, $first_name, $patronymic]
        );

        return view('pages.dean')->with($full_name);
        */
        $office = array(
            'office' => 'Иммануил Кант Калининград',
            'office1' => 'Георги Гегель Штутгард',
            'office2' => 'Людвиг Фейербах Ландсухт'
        );
        /*

        $office = array(
            'offices' => ['Иммануил Кант Калининград', 'Георги Гегель Штутгард', 'Людвиг Фейербах Ландсухт']
        );
        $notifications

        */

        $komu = '';
        $status = '';
        $komu2 = '';
        $status2 = '';
        $author_id = 0;
        $nn = 0;


        /*
                foreach ($notifications as $notification) {
                    //$notificate = $notifications->komu_blya.' '.$notifications->status;

        //            if ($nn == 0) {
                        $komu1 = $notification->komu_blya;
                        $status1 = $notification->status;
        //                $nn = 1;
        //            } else {
        //                $komu2 = $notification->komu_blya;
        //                $status2 = $notification->status;
        //            }

                }
        */
        $offices = DB::table('my_offices')->where('parol', '=', '5423')->get(['full_name', 'chair']);

        foreach ($offices as $off) {
            if ($nn == 2) {
                $offer2 = $off->full_name . ' (' . $off->chair . ')';
            }
            if ($nn == 1) {
                $offer1 = $off->full_name . ' (' . $off->chair . ')';
                $nn = 2;
            }
            if ($nn == 0) {
                $offer = $off->full_name . ' (' . $off->chair . ')';
                $nn = 1;
            }
        }

        $office = array(
            'office' => $offer,
            'office1' => $offer1,
            'office2' => $offer2
        );


        /*
        //return view('pages.student')->with($full_name);

//                $title = array(
//                    'not1'=>$komu1,
//                    //'status'=>$status
//                    'not2'=>$komu2
//                );
//        //        $title = array(
//        //            'not'=>' "'.$komu.'" '
//        //            //'status'=>$status
//        //        );
//
//                $notification = array(
//                    'not1'=>$status1,
//                    //'status'=>$status
//                    'not2'=>$status2
//                );
//



        $title = array(
            'titles' => $komu1 //[$komu1, $komu2]
        );
        $notification = array(
            'notifications' => $status1//[$status1, $status2]
        );

*/
        $notifications = DB::table('my_documents')->where('author_id', '=', '24748')->get(['komu_blya', 'status']);

        //$offices = DB::table('my_offices')->where('parol', '=', '5423')->get(['full_name', 'chair']);


        foreach ($notifications as $notice){
            foreach ($notice as $qu){
                $quotation = array('quotation' => json_decode($qu));
            }
        }



        //$quotation =
/*
        foreach (array_reverse((array)$notifications) as $not) {
            if ($nn == 4) {
                $noTitle3 = $not->komu_blya;
                $noStatus3 = $not->status;
                $nn = 5;
            }
            if ($nn == 3) {
                $noTitle2 = $not->komu_blya;
                $noStatus2 = $not->status;
                $nn = 4;
            }
            if ($nn == 2) {
                $noTitle1 = $not->komu_blya;
                $noStatus1 = $not->status;
                $nn = 3;
            }
        }

        $notification = array(
            'no1' => [
                'title' => $noTitle1,
                'status' => $noStatus1
            ],
            'no2' => [
                'title' => $noTitle2,
                'status' => $noStatus2
            ],
            'no3' => [
                'title' => $noTitle3,
                'status' => $noStatus3
            ]

        );
*/

        $title = array(
            'titles' => ''//[$komu1, $komu2]
        );
        /*
        $notification = array(
            'notifications' => ''//[$status1, $status2]
        );
        */



        //or

        //return view('quotation')->with('quotation',json_decode($req->quotation))

        return view('pages.student', ["FIO" => $full_name, "offices" => $office,/* "titles" => $title, */"notifications" => array_reverse((array)$notifications)/*, "quotation"=>$quotation*/]/*, ["offices" => $my_students]*/);

        //return view('pages.student')->with($title, $notificate);
        //return view('pages.student')->with('last_name' ,$last_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param \App\Models\MyStudent $mystudent
     * @return \Illuminate\Http\Response
     */
    public function show(MyStudent $mystudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MyStudent $mystudent
     * @return \Illuminate\Http\Response
     */
    public function edit(MyStudent $mystudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MyStudent $mystudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyStudent $mystudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MyStudent $mystudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyStudent $mystudent)
    {
        //
    }
}
