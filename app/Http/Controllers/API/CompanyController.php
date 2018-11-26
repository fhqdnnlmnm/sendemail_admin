<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyCollection;

class CompanyController extends Controller
{
    /**
     * 1.1 获取公司列表
     * v1.0 公司列表与联系人、类别一起处理
     * v1.1 公司列表和联系人的数据分开进行管理
     */
    public function index(Request $request)
    {
        $companyName = $request -> query('companyName');
        $cat = $request -> query('cat');
        $page = $request -> query('page');
        if(isset($companyName) || isset($cat)){
            $companies=Company::with(['contacts','category'])
            ->where('name','like','%'.$companyName.'%')
            ->Where('cat_id','=',$cat)
            ->paginate(15);
        }else{
            $companies=Company::with(['contacts','category'])
            ->paginate(15);
        }
        return  new CompanyCollection($companies);
    }
    // public function index(Request $request){
    //     $companyName = $request -> query('companyName');
    //     $cat = $request -> query('cat');
    //     $page = $request -> query('page');
    //     // return $companyName;
    //     if(isset($companyName) || isset($cat)){
    //         $companies=Company::with(['contacts','category'])
    //         ->where('name','like','%'.$companyName.'%')
    //         ->Where('cat_id','=',$cat)
    //         ->paginate(15);
    //     }else{
    //         $companies=Company::with(['contacts','category'])
    //         ->paginate(15);
    //     }
       
    //     // $companies=Company::all();
    //     return  new CompanyCollection($companies);
    // }
    /**
     * 1.2 获取指定公司
     */
    public function show(Company $company){
        CompanyResource::withoutWrapping(); #去除data的包裹
        // return Company::with(['contacts','category'])->find($company); #使用模型方式返回数据
        return new CompanyResource($company); #使用resource来完成数据的加工和返回
    }
    /**
     * // 1.3 创建公司
     */
    public function store(Request $request){
       return Company::create($request->all());
    }

    /**
     * 1.4 更新公司信息
     */
    public function update(Request $request){
        $company = Company::find($request->id);
        $company->update($request->all());
        return $company;
    }
    /**
     * 1.5 删除公司信息
     * 使用路由的隐性模型绑定
     */
    public function delete(Request $request){
        $company = Company::find($request->id);
        $company->delete();
        return 204;
    }
    // public function edit($id){
    //     $com=Company::with(['contacts','category'])->find($id)->firstOrFail();
    //     return $com;
    // }

    /**
     * 1.6 获取公司所在的所有的国家列表
     *
     */
    public function getComCountry(){
      return  $countries =Company::select('country')->distinct()->get();
    }
}
