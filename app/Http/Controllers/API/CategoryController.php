<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{

    // 获取所有类别列表
    public function getList()
    {
        return CategoryResource::collection(Category::all());
    }
   // 2.1 获取类别的树形列表（用于显示）
   public function getTreeList(Request $request){
    //    $pcats=Category::where('par_id',0)->get();
    //    $cats = CategoryResource::collection(Category::all())->all();
    $cats = Category::all()->toArray();
    //    dump($cats);
       return $this->toTree($cats);
   }

//    将数组转成数型结构
   public function toTree($array)
   {
    // 引用算法
    $items = array();
    foreach($array as $value){
        // dump($value);
        $items[$value['id']]=$value;
    }
    // dump($items);
    $tree = array();
    foreach($items as $key => $value){
        if(isset($items[$value['par_id']]) && $value['par_id'] !==0 ){
            $items[$value['par_id']]['children'][]= &$items[$key];
        }else{
            $tree[]=&$items[$key];
        }
    }
    return $tree;
   }
}
