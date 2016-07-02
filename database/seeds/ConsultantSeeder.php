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
            [
                'name'=>'朱文静',
                'occupational_level'=> '问题专家',
                'occupational_age'=>5,
                'tel'=>'138001380000',
                'sale_comment'=>'江南新天地 华天明紫阳府',
                'answer_count'=>205,
                'deal_count'=>87,
                'people_count'=>300,
                'good_rate'=>89
            ],
            [
                'name'=>'张三丰',
                'occupational_level'=> '问题专家',
                'occupational_age'=>5,
                'tel'=>'138001380000',
                'sale_comment'=>'江南新天地 华天明紫阳府',
                'answer_count'=>33,
                'deal_count'=>112,
                'people_count'=>345,
                'good_rate'=>89
            ],
            [
                'name'=>'陈冠希',
                'occupational_level'=> '情感专家',
                'occupational_age'=>5,
                'tel'=>'138001380000',
                'sale_comment'=>'江南新天地 华天明紫阳府',
                'answer_count'=>123,
                'deal_count'=>31,
                'people_count'=>542,
                'good_rate'=>90
            ],
            [
                'name'=>'AngleBaby',
                'occupational_level'=> '颜值担当',
                'occupational_age'=>5,
                'tel'=>'138001380000',
                'sale_comment'=>'江南新天地 华天明紫阳府',
                'answer_count'=>205,
                'deal_count'=>87,
                'people_count'=>300,
                'good_rate'=>89
            ],
            [
                'name'=>'罗永浩',
                'occupational_level'=> '相声老师',
                'occupational_age'=>5,
                'tel'=>'138001380000',
                'sale_comment'=>'江南新天地 华天明紫阳府',
                'answer_count'=>205,
                'deal_count'=>87,
                'people_count'=>300,
                'good_rate'=>89
            ],
            [
                'name'=>'雷军',
                'occupational_level'=> '英语专家',
                'occupational_age'=>5,
                'tel'=>'138001380000',
                'sale_comment'=>'江南新天地 华天明紫阳府',
                'answer_count'=>205,
                'deal_count'=>87,
                'people_count'=>300,
                'good_rate'=>89
            ]
        ];
        
        DB::table('consultant')->truncate();

        foreach($consultantList as $consultant)
        {
            Consultant::create([
                'name' => $consultant['name'],
                'occupational_level' => $consultant['occupational_level'],
                'occupational_age' => $consultant['occupational_age'],
                'tel' => $consultant['tel'],
                'sale_comment' => $consultant['sale_comment'],
                'answer_count' => $consultant['answer_count'],
                'deal_count' => $consultant['deal_count'],
                'people_count' => $consultant['people_count'],
                'good_rate'=>$consultant['good_rate'],
            ]);
        }


    }
}
