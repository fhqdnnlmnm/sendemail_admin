<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\CustomerCollection;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $name = $request -> query('name');
        $category_Id = $request -> query('category_id');
        $page = $request -> query('page');
        if(isset($name) || isset($category_Id)){
            $tempName= urldecode($name);
            $customers=Customer::with(['contacts','category'])
            ->where('name','like','%'. $name.'%')
            ->orWhere('category_id','=',$category_Id)
            ->paginate(15);
        }else{
            $customers=Customer::with(['contacts','category'])
            ->paginate(15);
        }
        return  new CustomerCollection($customers);
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
        return Customer::create($request->all());
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
    public function update(Request $request, Customer $customer)
    {
        //
        $customer->update($request->all());
        return response()->json($customer,202);
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
        Customer::destroy($id);
        return response()->json(202);
    }

    public function getCountries()
    {
        return Customer::select('country')->distinct()->get();
    }
}
