<?php

use Illuminate\Database\Seeder;
use App\Model\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $projectList=[
                'name'=>'北大资源山水年华',
                'nick_name'=> '山水年华',
                'price'=>8990,
                'score'=>3.8,
                'comment_count'=>900,
                'tag'=>'花园洋房,南北通透,中环以外,普通住宅,中环以外',
                'area'=>'东湖高新区-光谷北',
                'address'=>'东湖高新区珊瑚北路与九峰二路交汇处（新能源研究院北侧）',
                'gps'=>'',
                'opening_comment'=>'2016年5月14日二期G4、6号楼已开盘（待售）',
                'ending_comment'=>'预计2017年年底二期入住',
                'discount_comment'=>'5千享9折',
                'red_packets'=>500,
                'red_packets_count'=>249
        ];
        DB::table('project')->truncate();

        Project::create([
            'name' => $projectList['name'].str_random(4),
            'nick_name'=> $projectList['nick_name'],
            'price' => $projectList['price'],
            'score' => $projectList['score'],
            'comment_count' => $projectList['comment_count'],
            'tag' => $projectList['tag'],
            'area' => $projectList['area'],
            'address' => $projectList['address'],
            'gps' => $projectList['gps'],
            'opening_comment' => $projectList['opening_comment'],
            'ending_comment' => $projectList['ending_comment'],
            'discount_comment' => $projectList['discount_comment'],
            'red_packets' => $projectList['red_packets'],
            'red_packets_count' => $projectList['red_packets_count']
        ]);
    }
}
