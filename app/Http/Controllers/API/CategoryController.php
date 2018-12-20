<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CategoryResource::collection(Category::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return Category::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $category->update($request->all());
        return response()->json($category,202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Category::destroy($id);
        return response()->json(202);
    }

   // 2.1 获取类别的树形列表（用于显示）
    public function getTreeList(Category $category)
    {
        // dump(Category::all()->toArray());
        $cats = CategoryResource::collection(Category::all())->resolve();
         // 引用算法
        $items = array();
        foreach($cats  as $value){
            $items[$value['id']]=$value;
        }
        $tree = array();
        foreach($items as $key => $value){
            if(isset($items[$value['parent_id']]) && $value['parent_id'] !==0 ){
                $items[$value['parent_id']]['children'][]= &$items[$key];
            }else{
                $tree[]=&$items[$key];
            }
        }
        return $tree;
    }

    public function getParentList()
    {
        return CategoryResource::collection(Category::where('parent_id','=',0)->get());
    }
}
