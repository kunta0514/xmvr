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
            [
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
            ],
            [
                'name'=>'中建汤逊湖壹号高层',
                'nick_name'=> '汤逊湖壹号',
                'price'=>12000,
                'score'=>4,
                'comment_count'=>303,
                'tag'=>'新盘首开,中环以外,板楼,塔楼',
                'area'=>'汤逊湖',
                'address'=>'汤逊湖红旗岛（文化大道与金樱街交汇处向东1000米）',
                'gps'=>'',
                'opening_comment'=>'2016年5月25号加推4#和6#楼(在售)',
                'ending_comment'=>'预计2017年3月9#入住',
                'discount_comment'=>'购房享5千享95折',
                'red_packets'=>800,
                'red_packets_count'=>300
            ],
            [
                'name'=>'海伦春天三期',
                'nick_name'=> '海伦春天',
                'price'=>9800,
                'score'=>4.3,
                'comment_count'=>821,
                'tag'=>'待售,3号线,二至中环,板楼',
                'area'=>'龙阳大道',
                'address'=>'龙阳大道与芳草一路交汇处（龙阳大道升官渡附近）',
                'gps'=>'',
                'opening_comment'=>'预计2016年下半年11#开盘(待售)',
                'ending_comment'=>'11栋约2018年上半年入住',
                'discount_comment'=>'8千享8折',
                'red_packets'=>600,
                'red_packets_count'=>300
            ],
            [
                'name'=>'东湖楚天府',
                'nick_name'=> '楚天府',
                'price'=>18000,
                'score'=>4.2,
                'comment_count'=>603,
                'tag'=>'老盘加推,2号线,内至二环,普通住宅',
                'area'=>'洪山区',
                'address'=>'洪山区八一路340号(武汉大学对面)',
                'gps'=>'',
                'opening_comment'=>'2014年9月18日已第一次加推（在售）',
                'ending_comment'=>'预计2016年6月soho公寓',
                'discount_comment'=>'顾问带访减4万再99折',
                'red_packets'=>300,
                'red_packets_count'=>200
            ],
            [
                'name'=>'花样年花样城一期',
                'nick_name'=> '花样城',
                'price'=>11000,
                'score'=>3.9,
                'comment_count'=>678,
                'tag'=>'老盘加推,1号线,小户型,南北通透',
                'area'=>'东西湖',
                'address'=>'东西湖区张伯路',
                'gps'=>'',
                'opening_comment'=>'2015年4月25日已加推G3、G4号楼（在售）',
                'ending_comment'=>'预计2016年4月入住',
                'discount_comment'=>'清盘一口价，来电询房',
                'red_packets'=>900,
                'red_packets_count'=>100
            ]
        ];
        DB::table('project')->truncate();

        foreach($projectList as $project)
        {
            Project::create([
                'name' => $project['name'].str_random(4),
                'nick_name'=> $project['nick_name'],
                'price' => $project['price'],
                'score' => $project['score'],
                'comment_count' => $project['comment_count'],
                'tag' => $project['tag'],
                'area' => $project['area'],
                'address' => $project['address'],
                'gps' => $project['gps'],
                'opening_comment' => $project['opening_comment'],
                'ending_comment' => $project['ending_comment'],
                'discount_comment' => $project['discount_comment'],
                'red_packets' => $project['red_packets'],
                'red_packets_count' => $project['red_packets_count']
            ]);
        }

    }
}
