<?php

use Illuminate\Database\Seeder;

use App\Model\Consultant;

class ConsultantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $consultantList=[
            'name'=>'朱文静',
            'occupational_level'=> '问题专家',
            'occupational_age'=>5,
            'tel'=>'138001380000',
            'sale_comment'=>'江南新天地 华天明紫阳府',
            'answer_count'=>205,
            'deal_count'=>87,
            'people_count'=>300,
        ];
//        DB::table('consultant')->truncate();

        Consultant::create([
            'name' => $consultantList['name'],
            'occupational_level' => $consultantList['occupational_level'],
            'occupational_age' => $consultantList['occupational_age'],
            'tel' => $consultantList['tel'],
            'sale_comment' => $consultantList['sale_comment'],
            'answer_count' => $consultantList['answer_count'],
            'deal_count' => $consultantList['deal_count'],
            'people_count' => $consultantList['people_count']
        ]);
    }
}
