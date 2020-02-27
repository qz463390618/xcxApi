<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return mixed  产品分类
     */
    public function __construct()
    {

    }


    public function getCateDetailName()
    {
        $cateArr = array(
            1=>'大气班台',
            2=>'主管桌椅',
            3=>'屏风工位',
            4=>'钢木结构',
            5=>'人体转椅',
            6=>'会议桌椅',
            7=>'文件柜子',
            8=>'沙发茶几',
            9=>'培训桌椅',
            10=>'高隔断墙',
            11=>'前台接待'
        );
        //return $cateArr;
        echo json_encode($cateArr);
    }
}
