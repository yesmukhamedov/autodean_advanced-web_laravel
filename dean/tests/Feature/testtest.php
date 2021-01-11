<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class testtest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()

    {

        $response = $this->get('/');



        $datar = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);

        $type = DB::table('my_documents')->where('author', '=', "Ғапбаров Нұрмағанбет Сейтқалиұлы")
            ->where('komu_blya','=', 'Деканат')/*->where('active', '=', null)*/->get('annex_type');

        $data = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);

        try {
//            DB::table('my_documents')->insert(
//                ['ID' => random_int(2000, 4000), 'number' => '25.12.2020-001-' . random_int(10000, 99999), 'author' => 'Ғапбаров Нұрмағанбет Сейтқалиұлы', 'author_id' => 0, 'komu_blya' => 'Деканат', 'annex_type' => 'Справка по месту требования', 'komu_id' => 0, 'text' => '', 'status' => 'Получил(а) по заслугам', 'active' => 1]
//            );
//            $offer = DB::update(
//                'update my_documents set status = "ответ күт"  where annex_type = ?',
//                ['заявления']
            $affected = DB::table('my_documents')->where('author_id', '=', '24748')->where('annex_type','=','заявления')->update(['active' => 2, 'status'=>'отправлено!']);
        } catch (\Exception $e) {
            $response->assertStatus(500);
        }
//        return view('pages.dean')->with($data);
        $data = DB::table('my_documents')->where('active', '=', null)->get(['komu_blya', 'status', 'author', 'annex_type', 'text']);


        $info = DB::table('my_students')->where('ID', '=', 24748)->get(['last_name', 'first_name', 'patronymic', 'prof', 'curs', 'forma', 'sroc', 'bday']);

        $response->assertStatus(200);
    }
}
