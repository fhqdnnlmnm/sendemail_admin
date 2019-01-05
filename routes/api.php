<?php

use Illuminate\Http\Request;
// use Illuminate\Mail\Mailable;
// use Illuminate\Support\Facades\Mail;
// use  App\Mail\PriceQuotation;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'v1'], function () {
    Route::get('categories/getTreeList','API\CategoryController@getTreeList');
    Route::get('categories/getParentList','API\CategoryController@getParentList');
    Route::resource('categories','API\CategoryController');
    Route::get('customers/getCountries','API\CustomerController@getCountries');
    Route::resource('customers','API\CustomerController');
    Route::resource('emailsenders','API\EmailSenderController');
    Route::resource('emailtemplates','API\EmailTemplateController');
});

// Route::get('categories/tree_list','API\CategoryController@getTreeList');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/sendemail',function(){
//     Mail::to('fhqdnnlmnm@163.com')->send(new PriceQuotation());
// });

// // API的所有操作API
// Route::group(['prefix' => 'v1'],function(){
//     //1 联系人操作的相关API
//     Route::middleware('auth:api')->get('/user',function(Request $request){
//         return $request->user();
//     });
//     // 公司
//     Route::prefix('companies')->group(function(){
//         // 1.1 获取公司列表
//         Route::get('/', 'API\CompanyController@index');
//         // 1.2 获取指定公司
//         Route::get('/{company}', 'API\CompanyController@show');
//         // 1.3 创建公司
//         Route::post('/', 'API\CompanyController@store');
//         // 1.4 更新公司信息
//         Route::put('/', 'API\CompanyController@update');
//         // 1.5 删除公司信息
//         Route::delete('/', 'API\CompanyController@delete');
//         // 1.6 带查询参数获取公司
//         // Route::get('/countries','API\CompanyController@getComCountry');
//     });
//     Route::get('countries','API\CompanyController@getComCountry');
//     // 2 公司类别的相关API
//     // 2.1 获取所有类别
    
//     // 2.2 获取所有类别的树形结构数组
//     // Route::get('catsTreeList','API\CategoryController@getTreeList');

//     // 3.发件人相关的API
//     // 3.1 获取所有发件人列表
//     Route::get('senderList','API\SenderController@index');

//     // 4. 邮件模板相关的API
//     // 4.1 获取所有邮件模板
//     Route::get('emailTemList','API\EmailTemController@index');

//     Route::get('test',function(){
//         return json_encode(array('id'=>1,'content'=>'test'));
//     });

//     // 客户的相关的操作
//     Route::resource('customers','API\CustomerController',['only' => ['index','show']]);
//     // 类别的相关操作
//     Route::get('categories/tree_list','API\CategoryController@getTreeList');
// });

