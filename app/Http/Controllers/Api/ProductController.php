<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this -> product = new ProductModel();
    }

    public function getList(Request $request)
    {
        //每页数据个数
        $page_index = request('page_index') ? (int)request('page_index'): 1;
        $data_num = request('data_num') ? (int)request('data_num'): 20;
        $product_cate = request('product_cate') ? (int)request('product_cate'): '';
        $offset = ($page_index - 1) * $data_num;
        //var_dump($page_index);

        $this ->product ->getProductlist($offset,$data_num,$product_cate);
        /*$products = ProductModel::where('titlepic','<>','null')->orderBy('newstime','desc')->paginate(20);
        var_dump($products);*/
    }
}
