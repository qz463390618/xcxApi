<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    protected $table = 'www_kaifadou_com_ecms_product';

    public  function getProductlist($offset,$data_num,$product_cate)
    {
        $where = '';
        if($product_cate != '')
        {
            $where = ' where cate = '.$product_cate;
        }
        $products = DB::select("select id,titlepic,title,cate from www_kaifadou_com_ecms_product {$where} order by newstime desc limit {$offset},{$data_num}");
        //var_dump(json_encode($products));
        echo json_encode($products);
    }
}
